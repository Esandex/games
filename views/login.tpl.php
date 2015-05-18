<!DOCTYPE html>
<html>
<head>
	<title>Login - Esandex</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	<!-- Hojas de estilo -->
	<link rel="stylesheet" type="text/css" href="../css/main.css">	
	<style type="text/css">
		body
		{
			border-top: 5px #388E3C solid;
		}
	</style>
	<!-- Scripts -->
</head>
<body>
	<div class="formularioL">
		<a href="/">
			<div class="logoLogin"></div>			
		</a>
		<div class="titulo">Iniciar Sesión</div>
		<div id="respuestaLogin" class="cajaDialogo">
			<!-- <img src="img/loader.gif">-->
		</div>
		<form id="formLogIn" method="post">
			<label>Usuario</label>
			<input class="usr vaciar" type="text" name="user" placeholder="Nombre de usuario">
			<label>Contraseña</label>
			<input type="password" name="password" placeholder="Contraseña">
			<input  id="LogIn" class="botonFormulario" value="Entrar" type="submit">
		</form>
	</div>
	<div class="opcionCuenta" style="display: none;">
		<p>¿No tienes una cuenta?</p>
		<a href="../register">Crear una cuenta</a>
	</div>
	
</body>
</html>