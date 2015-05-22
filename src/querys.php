<?php 
	
	$usuarioSesion	= $_SESSION['username'];

	$q_user = mysql_query("SELECT * FROM usuarios 
						 WHERE USER = '$usuarioSesion'")
			or die("problemas en consulta:".mysql_error());

	$arrayUsuario	=	mysql_fetch_array($q_user);
	//Variables de usuario
	$du_avatar 		= $arrayUsuario['AVATAR_USUARIO'];
	$du_email 		= $arrayUsuario['EMAIL'];
	$du_id			= $arrayUsuario['ID_USUARIO'];
	$du_name	 	= $arrayUsuario['NOMBRE_USUARIO'];
	$du_user 		= $arrayUsuario['USER'];