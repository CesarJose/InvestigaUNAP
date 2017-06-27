<header id="header" class="alt style2">
    <img class="imagenunap" src="view/images/logo-min.png">
    <a href="index.php" class="logo"><strong>UNAP</strong> </a>
    <nav>
        <?php
        if (isset($_SESSION['app_id'])){

            echo '<div><!--Formulario despegable login-->
            <button id="open-close2" class="button-login">'. strtoupper($users[$_SESSION['app_id']]['usuario']) .'</button>
            <div id="opciones-user" class="formulario" onkeypress="return runScriptLogin(event)">
                <div id="_AJAX_LOGIN"></div>
                <div><button class="button-login">Ver Perfil</button></div>
                <div><button class="button-login">Administrar Cuenta</button></div>
                <div><button class="button-login" onclick="cerrarSesion()">Cerrar Sesión</button></div>
            </div>
            </div>
                        <a href="#menu">Menu</a>';
        } else {

            echo '<div><!--Formulario despegable login-->
            <button id="open-close" class="button-login">Iniciar Sesión</button>
            <div id=\'login_inv\' class="formulario" onkeypress="return runScriptLogin(event)">
                <div id="_AJAX_LOGIN">

                </div>
                <label>Usuario</label>
                <input type="text" id="nombre" placeholder="Escriba su nombre">
                <label>Contraseña</label>
                <input type="password" id="contraseña" placeholder="Escriba su contraseña">
                <div><label><input type="checkbox" class="prueba" value="1" id="recordar" checked>Recordar</label></div>
                <center><input type=\'submit\'  value="Ingresar" id="enviar" onclick="goLogin()"></center>
            </div>
            </div>
            <a href="#menu">Menu</a>';
        }

        ?>

    </nav>
</header>