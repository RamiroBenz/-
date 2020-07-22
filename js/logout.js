function salirAplicacion(context) {
	if (confirm("¿Desea salir de la aplicacion?")) {
		var xmlHttp;
		try { // Safari, Firefox, Opera, etc.
			xmlHttp = new XMLHttpRequest();
		} catch (E) { // Internet Explorer
			try { 
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (E) {
				try { 					
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					alert("El browser utilizado no soporta AJAX!");
					return false;
				}
			}
		}
		
		try {
			xmlHttp.open("GET", context + "/jsp/logout.do", true);
			xmlHttp.send(null);
			if (xmlHttp.readyState == 4) { // Complete
				if (xmlHttp.status == 200) { // OK response
				} else {
					alert("Problem: " + req.statusText);
				}
			}
		} catch (Ex) {
			alert("Error");
		}
		
		$('body').parent().css("background-image","none");
		if (!($.browser.msie && ($.browser.version < 9)))
			$('body').html(''); // Como en IE < 9 uso PIE en el css, genera errores si trato de ejecutar esta linea, así que sólo la corro si no es IE o si es IE >= 9
		window.opener = self;
		window.close();
		//setTimeout('alert("Su navegador impide cerrar la ventana automáticamente. Por favor proceda a cerrarla de forma manual.")',3000);
		setTimeout('document.location.href = "index.php";',3000);
	}
}
