<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 24/06/2017
 * Time: 13:01
 */


if($_POST){
    require ('core/core.php');
    $dato = $_GET['mode'];

    switch ($dato){
        case 'closesesion':
            require ('core/bin/ajax/CloseSesion.php');
            break;

        case 'login':
            require ('core/bin/ajax/goLogin.php');
            break;



        default:
            header('location: index.php');
            break;

    }
} else {
    header('location: index.php');
}