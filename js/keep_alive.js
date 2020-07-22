/*
**************Session activa***********************
*/


function ajaxMantenerSesionActiva()
{
	var xmlHttp;
	try { // Safari, Firefox, Opera, etc.
		xmlHttp = new XMLHttpRequest();
	}
	catch (e) { // Internet Explorer
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) {
				alert("El browser utilizado no soporta AJAX!");
				return false;
			}
		}
	}
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4) {
			var resultado = xmlHttp.responseText;
			var componentesResultado = resultado.split("#%#");
			var estado = componentesResultado[0];
			if (estado != "OK") {
				if (estado == "ERROR")
					alert(componentesResultado[1]);
				else
					alert("La sesión ha expirado, por favor vuelva a ingresar al sistema.");
			}
		}
	}
	xmlHttp.open("GET","ajax.do?f=keepalive&r="+Math.random(),true);
	xmlHttp.send(null);
}
