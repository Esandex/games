</div>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jankenpon.js"></script>
	<script type="text/javascript">
		var usuario = '<?= $username ?>';
		
		if(usuario == 'invitado')
		{
			
			console.log('El usuario no ha iniciado sesion');
			$('nav ul').css('display', 'inline-block');
		}
		else
		{
			console.log(usuario);
			console.log('El usuario ha iniciado sesion');
			$('.usuario').css('display', 'inline-block');
		}
	</script>
</body>
</html>