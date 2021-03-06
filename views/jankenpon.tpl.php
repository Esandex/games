<?php require 'template/inicio.php'; ?>
	<div class="encabezado">
		GAME <span id="jugadas"></span>
	</div>

	<div class="contenedor-juego">

		<div class="contenedor-puntajes">
		<div id="resultado" class="resultado inicio"><span>INICIA EL JUEGO </span><a class="cerrar" href="inicio"></a></div>
		<!--  Yo  -->
			<div class="yo">
				<div class="avatar">
					<img src="img/person-flat.png">
				</div>	
				<div class="datos">
					<div class="nombre"><?= $username ?></div>
					<div id="miContador" class="contador miContador">0</div>
				</div>
			</div>
		<!-- Oponente -->
			<div class="oponente">
				<div class="datos">
					<div class="nombre">ESANDEX</div>
					<div id="suContador" class="contador suContador">0</div>
				</div>
				<div class="avatar">
					<img src="img/avatares/esandex.png">
				</div>	
			</div>
		</div>
 
		<div class="batalla">
			<div class="yo">
				<img id="miOpcion" src="img/ppt.gif">
			</div>
			<div class="oponente">
				<img id="opcionOponente" src="img/ppt.gif">
			</div>
		</div>


		<div class="opciones">
			<div class="jugarDnuevo">
				<div class="boton" onclick="jugarDeNuevo();">Jugar de nuevo</div>
			</div>
			<div class="piedra" onclick="procesar('piedra')"></div>
			<div class="papel" onclick="procesar('papel')"></div>
			<div class="tijera" onclick="procesar('tijera')"></div>
		</div>
	
	</div>

<!--
	<div class="contenedor-chat">
		<div class="formulario">
			<input type="text" placeholder="Envia un mensaje" class="msm">
			<input class="btn_enviar" type="submit" value="">
		</div>

		

	</div>

	-->
	<div class="preload" style="display: none;">
		<img src="img/oponente_papel.jpg">
		<img src="img/oponente_piedra.jpg">
		<img src="img/oponente_tijera.jpg">
		<img src="img/papel.jpg">
		<img src="img/piedra.jpg">
		<img src="img/tijera.jpg">
	</div>
<?php require 'template/fin.php'; ?>