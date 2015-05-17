//Genera un número aleatorio entre un rango de enteros


function patito(minimo, maximo)
{
    var numero = Math.floor( Math.random() * (maximo - minimo + 1) + minimo );
    var opciones = ["piedra", "papel", "tijera"];
    return opciones[numero];
}
function procesar(opcion)
{    

    var opcionUsuario = opcion;
    console.log("La opcion elegida es " + opcionUsuario);
    var opcionMaquina = patito(0,2);
    console.log("La maquina eligio " + opcionMaquina);
    if(opcionUsuario == 'piedra')
    {
        if(opcionMaquina == 'piedra')
        {
            alert("Empate!");
        }
        else if(opcionMaquina == 'papel')
        {
            alert("Perdiste :( ");
        }
        else if(opcionMaquina == 'tijera')
        {
            alert("Ganaste!");
        }
    }
    else if(opcionUsuario == 'papel')
    {
        if(opcionMaquina == 'piedra')
        {
            alert("Ganaste!");
        }
        else if(opcionMaquina == 'papel')
        {
            alert("Empate!");
        }
        else if(opcionMaquina == 'tijera')
        {
            alert("Perdiste!");
        }
    }
    else if(opcionUsuario == 'tijera')
    {
        if(opcionMaquina == 'piedra')
        {
            alert("Perdiste!");
        }
        else if(opcionMaquina == 'papel')
        {
            alert("Ganaste!");
        }
        else if(opcionMaquina == 'tijera')
        {
            alert("Empate!");
        }
    }
    else
    {
        alert("¿Pos qué carajo?");
    }
}