<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 24/06/2017
 * Time: 13:03
 */


if (!empty($_POST['user']) and !empty($_POST['pass'])){


    $db = new Conexion();
    $data = $db->real_escape_string($_POST['user']);
    $pass = $_POST['pass'];

    $sql = $db->query("Select id_usuario FROM usuarios where usuario = '$data' and contraseña='$pass' LIMIT 1;");


    if ($db->rows($sql) > 0){

        if ($_POST['sesion']){ ini_set('session.cookie_lifetime',time() + (60*60*24));}
        $_SESSION['app_id'] = $db->recorrer($sql)[0];
        echo 1;
    } else {
        echo '<label style="color: red;">¡Datos incorrectos!</label>';
    }
    $db->liberar($sql);
    $db->close();
}else{
    echo '<label style="color: red;">¡Rellena todos los datos!</label>';
}
