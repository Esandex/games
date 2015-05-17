//Genera un número aleatorio entre un rango de enteros


function patito(minimo, maximo)
{
    var numero = Math.floor( Math.random() * (maximo - minimo + 1) + minimo );
    var opciones = ["piedra", "papel", "tijera"];
    return opciones[numero];
}
    var miContador  = 0;
    var suContador  = 0;
    var jugadas     = 0; 
function procesar(opcion)
{    

    var opcionUsuario = opcion;
    var opcionMaquina = patito(0,2);
    
    jugadas = jugadas + 1;
    $('#jugadas').text(jugadas);

    $('#miOpcion').attr('src','../img/'+opcionUsuario+'.jpg');
    $('#opcionOponente').attr('src','../img/oponente_'+opcionMaquina+'.jpg');
    
    
    if(opcionUsuario == 'piedra')
    {
        if(opcionMaquina == 'piedra')
        {
            $('#resultado').text("Empate!");
            $('#resultado').removeClass('ganaste');  
            $('#resultado').removeClass('perdiste');        
            $('#resultado').addClass('inicio');

        }
        else if(opcionMaquina == 'papel')
        {
            $('#resultado').text("Perdiste :( ");
            $('#resultado').removeClass('ganaste');
            $('#resultado').removeClass('inicio');        
            $('#resultado').addClass('perdiste');
                
            suContador = suContador + 1;
            console.log('su contador: ' + suContador + ' mi contador: ' + miContador);
            $('#miContador').text(miContador);
            $('#suContador').text(suContador);
        }
        else if(opcionMaquina == 'tijera')
        {
            $('#resultado').text("Ganaste!");
            $('#resultado').removeClass('perdiste');
            $('#resultado').removeClass('inicio');         
            $('#resultado').addClass('ganaste'); 

            miContador = miContador + 1;
            console.log('su contador: ' + suContador + ' mi contador: ' + miContador);
            $('#miContador').text(miContador);
            $('#suContador').text(suContador);

        }
    }
    else if(opcionUsuario == 'papel')
    {
        if(opcionMaquina == 'piedra')
        {
            $('#resultado').text("Ganaste!");
            $('#resultado').removeClass('perdiste'); 
            $('#resultado').removeClass('inicio');        
            $('#resultado').addClass('ganaste'); 

            miContador = miContador + 1;
            console.log('su contador: ' + suContador + ' mi contador: ' + miContador);
            $('#miContador').text(miContador);
            $('#suContador').text(suContador);
        }
        else if(opcionMaquina == 'papel')
        {
            $('#resultado').text("Empate!");
            $('#resultado').removeClass('ganaste');  
            $('#resultado').removeClass('perdiste');        
            $('#resultado').addClass('inicio');
        }
        else if(opcionMaquina == 'tijera')
        {
            $('#resultado').text("Perdiste :( ");
            $('#resultado').removeClass('ganaste'); 
            $('#resultado').removeClass('inicio');        
            $('#resultado').addClass('perdiste');

            suContador = suContador + 1;
            console.log('su contador: ' + suContador + ' mi contador: ' + miContador);
            $('#miContador').text(miContador);
            $('#suContador').text(suContador);
        }
    }
    else if(opcionUsuario == 'tijera')
    {
        if(opcionMaquina == 'piedra')
        {
            $('#resultado').text("Perdiste :( ");
            $('#resultado').removeClass('ganaste');
            $('#resultado').removeClass('inicio');         
            $('#resultado').addClass('perdiste');

            suContador = suContador + 1;
            console.log('su contador: ' + suContador + ' mi contador: ' + miContador);
            $('#miContador').text(miContador);
            $('#suContador').text(suContador);
        }
        else if(opcionMaquina == 'papel')
        {
            $('#resultado').text("Ganaste!");
            $('#resultado').removeClass('perdiste');
            $('#resultado').removeClass('inicio');         
            $('#resultado').addClass('ganaste'); 

            miContador = miContador + 1;
            console.log('su contador: ' + suContador + ' mi contador: ' + miContador);
            $('#miContador').text(miContador);
            $('#suContador').text(suContador);
        }
        else if(opcionMaquina == 'tijera')
        {
            $('#resultado').text("Empate!");
            $('#resultado').removeClass('ganaste');  
            $('#resultado').removeClass('perdiste');        
            $('#resultado').addClass('inicio');
            
        }
    }
    else
    {
        alert("¿Pos qué carajo?");
    }
}