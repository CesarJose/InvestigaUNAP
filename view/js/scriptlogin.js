/**
 * Created by CesarJose39 on 23/06/2017.
 */
$(document).ready(function () {
    $('#login_inv').hide();
    $('#opciones-user').hide();


    $('#open-close').click(function () {
        $('#login_inv').slideToggle();
    })

    $('#open-close2').click(function () {
        $('#opciones-user').slideToggle();
    })

})
