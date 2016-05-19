// OPCION 1: Para implementar agregar: onkeypress="return validaPatron(event, 'patron')"
function validaPatron(event, patron) {
    // Patron de entrada, en este caso solo aceptaria numeros o numeros y punto.
    // patron =[0-9]; patron =[0-9-.];
    tecla = (document.all) ? event.keyCode : event.which;
    // Teclas de retroceso para borrar(8), tab(9), enter(13), flecha izquierda(37) y derecha(39), siempre la permite
    if (tecla==8 || tecla==13) {
        return true;
    } else if (event.keyCode==9 || event.keyCode==37 || event.keyCode==39) {
        return true;
    }
    patron = new RegExp(patron);
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
// OPCION 2: Utilizo JQuery para el control se debe poner como class: mwsValidaPatron
// Para configurar el Patron agregar propiedad como ejemplos, mwspatron = [0-9]; mwspatron = [0-9-.];
returnGlobal = false;
// EJECUTA PRIMERO
$(".mwsValidaPatron").on("keydown", function(event) {
    tecla = event.which;
    console.log(tecla);
    // Teclas de retroceso para borrar(8), tab(9), enter(13), flecha izquierda(37), derecha(39),
    // suprimir(46), siempre la permite
    if (tecla==8 || tecla==9 || tecla==13 || tecla==37 || tecla==39 || tecla==46) {
        returnGlobal = true;
    }
});
// EJECUTA SEGUNDO
$(".mwsValidaPatron").on("keypress", function(event) {
    if (returnGlobal) {
        return true;
    } else {
        patron = null;
        $.each(this.attributes, function(index, attr) {
            if(attr.name == "mwspatron") {
                patron = attr.value;
            }
        });
        console.log(patron);
        patron = new RegExp(patron);

        tecla       = (document.all) ? event.keyCode : event.which;
        tecla_final = String.fromCharCode(tecla);
        console.log(tecla_final);

        return patron.test(tecla_final);
    }
});