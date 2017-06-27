/**
 * Created by CesarJose39 on 24/06/2017.
 */


function goLogin() {
    var connect, form, response, result, user, pass, sesion;
    user = __('nombre').value;
    pass = __('contraseña').value;
    sesion = __('recordar').checked ? true : false;
    form = 'user=' + user + '&pass=' + pass + '&sesion=' + sesion;

    connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    connect.onreadystatechange = function () {
        if (connect.readyState == 4 && connect.status == 200){
            if (connect.responseText == 1){
                result = '<label style="color: white;">¡Conectado!</label>';
                __('_AJAX_LOGIN').innerHTML = result;
                location.reload();
            }else {
                __('_AJAX_LOGIN').innerHTML = connect.responseText;
            }

        }else if(connect.readyState != 4){
            result = '<label style="color: white;">¡Conectando!</label>';;
            __('_AJAX_LOGIN').innerHTML = result;
        }
    }
    connect.open('POST','ajax.php?mode=login');
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);

}
