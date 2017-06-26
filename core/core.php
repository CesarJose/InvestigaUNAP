<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 22/06/2017
 * Time: 10:51
 */


#Constantes de la aplicacion
define('VIEW_DIR','html/');
define('APP_TITLE','Investiga UNAP');
define('APP_URL','http://localhost/InvestigaUNAP/');

#Constantes de la base de datos
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','1234');
define('DB_NAME','investigaunap');


define('APP_COPY', 'Copyright &copy; ' . date('Y', time()). ' César José Ruiz.');

#Datos
require ('core/models/classConexion.php');
#require ('core/bin/functions/encrypt.php');
require ('core/bin/functions/Users.php');

$users = Users();