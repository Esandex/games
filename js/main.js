$(document).on('ready', inicio);
function inicio()
{
	$('#LogIn').on('click', iniciarSesion);
}
function iniciarSesion()
{
	console.log('estoy iniciando sesion');
	var url = "src/query_login.php";
	$.ajax({
		type: "POST",
		url: url,
		data: $("#formLogIn").serialize(),
		success: function(data){
			$("#respuestaLogin").html(data);
			}
	});
	$('#respuestaLogin').slideToggle();
	$('.vaciar').val('');
	return false;
}
function ocultar()
{
	console.log('se ejecuto ocultar');
	$('#respuestaLogin').slideToggle();
	$('#respuestaConfirmacionCuenta').slideToggle();
}
function timeOcultar()
{
	setTimeout ("ocultar()", 3000);
}
function logueado()
{
	console.log('se ejecuto login');
	setTimeout ("redireccionar()", 5000);
}
function redireccionar()
{
	window.location = '/'
}