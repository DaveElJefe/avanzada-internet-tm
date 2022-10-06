<?php

    #En el archivo config.php insertar lo siguiente:
    session_start();

    if(!isset($_SESSION['global_token'])){
        $_SESSION['global_token'] = md5( uniqid( mt_rand(), true ) );
    }

    #Copiar y pegar la ruta base que obtenga del localhost
    #Nunca poner espacios en las rutas
    #Al final del defined es importante la ultima diagonal
    if(!defined('BASE_PATH')){
        define('BASE_PATH','.../');
    }

    #En cada php que se tenga session start copiarle esto:
    #con include o include_once tambien funciona
    #En el login tambien se debe incluir justo antes del !DOCTYPE html
    include_once "app/config.php";

    #En el login justo debajo del boton login hidden agregar otro boton
    <input type="hidden" name="global_token" value="<?= $_SESSION['global_token'] ?>">

    #En el AuthContainer.php colocar el switch action dentro del nuevo if:
    if(isset(($_POST['global_token']) && $_POST['global_token']) == $_SESSION['global_token']) {
        switch($_POST['action']) {
            case 'access':
                $authController = new AuthController();
                .....
        }
    }
    #En el form del index(login) que tiene /AuthController.php solo dejarle auth
    #El <?) es un <?php echo --- en los ... va un ? que cierre el php de esa parte
    #Despues con los cambios del BasePath dejarle: <?= BASE_PATH ...> /auth
    #Cada formulario debe tener el token

    #En los header location del AuthController, quitar el ../products y poner "location:".BASE_PATH."products"
    #En el var_dump donde esta el error dejar: header("location:".BASE_PATH."error=true")
    #En productController tambien seria reemplazar esas rutas como lo anterior

    #crear un archivo index.html en la ruta de la carpeta App
    #en la raiz del proyecto crear un archivo .htaccess
    #Insertar el siguiente codigo:
    Options +FollowSymLinks -MultiViews
    RewriteEngine On
    
    #RUTAS
    RewriteRule ^auth$ app/AuthController.php
?>