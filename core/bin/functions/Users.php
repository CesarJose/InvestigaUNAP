<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 24/06/2017
 * Time: 18:17
 */

function Users(){
    $db = new Conexion();
    $sql = $db->query("Select * from usuarios u INNER join persona p on u.id_persona = p.id_persona;");
    if ($db->rows($sql) > 0) {
        while ($d = $db->recorrer($sql)){
            $users[$d['id_usuario']] = array(
                'id_usuario' => $d['id_usuario'],
                'usuario' => $d['usuario'],
                'contraseña' => $d['contraseña'],
                'correo' => $d['correo']
            );
        }
    } else {
        $users = false;
    }
    $db->liberar($sql);
    $db->close();

    return $users;
}