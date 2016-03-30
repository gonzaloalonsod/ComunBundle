// Para implementar agregar: onkeypress="return validaPatron(event, 'patron')"
function validaPatron(e, patron) {
    // Patron de entrada, en este caso solo aceptaria numeros o numeros y punto.
    // patron =[0-9]; patron =[0-9-.];
    tecla = (document.all) ? e.keyCode : e.which;
    // Teclas de retroceso para borrar, tab, enter, delete, siempre la permite
    if (tecla==8 || tecla==13) {
        return true;
    } else if (e.keyCode==9 || e.keyCode==46) {
        return true;
    }
    patron = new RegExp(patron);
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}