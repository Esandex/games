<?php require 'template/inicio.php'; ?>
	<div class="encabezado">
		GAME <span id="jugadas"></span>
	</div>

	<div class="contenedor-juego">

		<div class="contenedor-puntajes">
		<div id="resultado" class="resultado inicio">INICIA EL JUEGO</div>
		<!--  Yo  -->
			<div class="yo">
				<div class="avatar">
					<img src="img/avatares/vegeta.jpg">
				</div>	
				<div class="datos">
					<div class="nombre">VEGETA</div>
					<div id="miContador" class="contador miContador">0</div>
				</div>
			</div>
		<!-- Oponente -->
			<div class="oponente">
				<div class="datos">
					<div class="nombre">GOKU</div>
					<div id="suContador" class="contador suContador">0</div>
				</div>
				<div class="avatar">
					<img src="img/avatares/goku.jpg">
				</div>	
			</div>
		</div>
 
		<div class="batalla">
			<div class="yo">
				<img id="miOpcion" src="../img/ppt.gif">
			</div>
			<div class="oponente">
				<img id="opcionOponente" src="../img/ppt.gif">
			</div>
		</div>


		<div class="opciones">
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
<?php require 'template/fin.php'; ?>