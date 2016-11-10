function limpiarForm(){
	alert("limpiando");        
        document.getElementById("contacto_frm").reset();

}

function validarForm(){
	
	var verificar =true;
	

	var formulario = document.getElementById("contacto_frm");
	 var nombre = document.getElementById("nombre");
	 var sector = document.getElementById("sector");
	 var zona = document.getElementById("zona");
	 var clave = document.getElementById("clave");

	if (!nombre.value) {
		alert ("EL campo nombre de la escuela es requerido.");
		nombre.focus();		
		verificar = false;

	}

	else if (!sector.value) {
		alert ("EL campo sector es requerido.");
		sector.focus();		
		verificar = false;

	}

	else if (!zona.value) {
		alert ("EL campo zona es requerido.");
		zona.focus();		
		verificar = false;

	}
	else if (!clave.value) {
		alert ("EL campo clave es requerido.");
		clave.focus();		
		verificar = false;
	}
	

	if (verificar) {
		alert("se han guardado los datos del formulario.");
		document.contacto_frm.submit();
	}


}

//funcion para inpedir el paso de numeros en un campo dedicado para letras.
function soloLetras(e) {

    key = e.keyCode || e.which;//reconoce los comando tecleados.
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}





	window.onload = function()
	{
        
    var botonEnviar, botoLimpiar;
    botoLimpiar = document.getElementById("limpiar");
    botoLimpiar.onclick = limpiarForm;

    botonEnviar = document.getElementById("enviar");
    botonEnviar.onclick = validarForm;
}   


