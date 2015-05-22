<?php 
    session_start(); 
    if(!isset($_SESSION['username']))
    {
        $username = 'invitado';
        $du_avatar = 'user.png';
    }else
    {
        $username = $_SESSION['username'];
        require 'src/conexion.php';
        require 'src/querys.php';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <title>Jan Ken Pon!</title>
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
   <header>
        <div class="maximoAncho">
            <a href="/"><div class="logo"></div></a>
            <nav>
                <ul>
                    <li id="login">
                        <a href="login">Entrar</a>
                    </li>
                </ul>
                <div class="usuario">
                    <div class="nombre"><?= $username ?></div>
                    <div class="avatar">
                        <img src="http://dev.joseluisrl.com/img/avatares/<?= $du_avatar ?>">
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="contenido">