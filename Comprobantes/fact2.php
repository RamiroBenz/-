<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Fact-2</title>
		<!-- <link type="text/css" href="css/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
		<!-- <link type="text/css" href="css/blitzer_jig/jquery-ui-1.8.15.custom.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet">
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet">
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet">
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet">
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet">
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet">
	<!--[if !IE]><!-->
		<link type="text/css" href="css/jig_old.css" rel="stylesheet">
		<link type="text/css" href="css/jig.css?v=20151216" rel="stylesheet">
	<!--<![endif]-->
	<!--[if gte IE 9]>
		<link type="text/css" href="css/jig_old_ie_9.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_9.css?v=20151216" rel="stylesheet" />
	<![endif]-->
	<!--[if lt IE 9]>
		<link type="text/css" href="css/jig_old_ie_6_8.css?v=20151216" rel="stylesheet" />
		<link type="text/css" href="css/jig_ie_6_8.css?v=20151216" rel="stylesheet" />
	<![endif]-->
		<style type="text/css">@import url(scripts/calendar/calendar-blue2.css);</style>
		<script type="text/javascript" src="scripts/calendar/calendar.js"></script>
		<script type="text/javascript" src="scripts/calendar/calendar-es.js"></script>
		<script type="text/javascript" src="scripts/calendar/calendar-setup.js"></script>

		<script type="text/javascript" src="js/logout.js"></script>
		<script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.3.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="js/jquery.notice.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery.validationEngine.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.validationEngine-es-jig.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
		
<!-- Head específico (inicio) -->

		<!-- estiloFact.css -->
		<link rel="stylesheet" href="estiloFact.css">



<!-- Head específico (fin) -->
	</head>
	<body>
		<div id="encabezado" style="background-image:url(imagenes/rcel_logo3small.png);background-position:560px -5px;background-repeat:no-repeat; padding-top: 150px;">
			<div id="encabezado_logo_afip">
			<img src="img/Lola_Morena.jpg" width="300px">
			</div>
			<div id="encabezado_salir">
			<a href="index.html" onclick="salirAplicacion('/rcel');">Salir</a></div>
			
			<table id="encabezado_usuario_container">
				<tbody><tr>
					<td>
						<table id="encabezado_usuario" style="font-size: 15px;">
							<tbody><tr><th>Usuario<span>:</span></th>
							<td>30708662190 - EDILU SRL</td></tr>
							
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
			
		</div>
		<div id="contenido">
<!-- Contenido (inicio) -->











<script type="text/javascript">
var concepto = "";
function mostrarOcultar(p)
{
	concepto = p;
	
	if ((p == "2") || (p == "3"))
		document.getElementById("tablaperiodo").style.display = "inline";
	else
		document.getElementById("tablaperiodo").style.display = "none";
	
	
}

function mostrarOcultarMoneda(mostrar, buscarTipoDeCambio)
{
	if (mostrar) {
		document.getElementById("moneda").value = "DOL";
		document.getElementById("tablamoneda").style.display = "inline";
		if (buscarTipoDeCambio)
			setTimeout("ajaxFunction()",200);
	} else {
		document.getElementById("moneda").value = "";
		document.getElementById("tipocambio").value = "";
		document.getElementById("tablamoneda").style.display = "none";
	}
}

function mostrarOcultarExportaSimple()
{
	
}

function actualizarChecksSegunExportaSimple()
{
	
}

function validarCampos()
{
	if (validarCamposObligatorios())
		if (validarCamposValores())
			document.datosEmisorForm.submit();
}

function validarCamposObligatorios()
{
	var camposFaltantes = "";

	camposFaltantes += registrarSiVacio("fc","Fecha del Comprobante");
	
	camposFaltantes += registrarSiNulo("idconcepto","","Conceptos a incluír");
	
	
	if (camposFaltantes == "")
		return true;
	else
	{
		alert("Los siguientes campos son obligatorios:\n\n"+camposFaltantes);
		return false;
	}
}

function validarCamposValores()
{
	var camposInvalidos = "";

	//camposInvalidos += validarCampoFecha("fc","Fecha del Comprobante");
	

	if (camposInvalidos == "")
		return true;
	else
	{
		alert("Los siguiente campos contienen valores incorrectos:\n\n"+camposInvalidos);
		return false;
	}
}

function registrarSiVacio(campo,descripcionError)
{
	if (document.getElementById(campo).value == "")
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+"\n";
	}
	else
	{
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
	return "";
		}
	}

	function registrarSiNulo(campo, valorNulo, descripcionError) {
		if (document.getElementById(campo).value == valorNulo) {
			document.getElementById(campo).className = "jig_error";
			return "* " + descripcionError + "\n";
		} else {
			document.getElementById(campo).className = "";
			return "";
		}
	}

	function validarCampoNumericoConDecimales(campo, enteros, decimales,
			descripcionError) {
		var valorCampo = document.getElementById(campo).value;
		if (valorCampo.length == 0) {
			if (document.getElementById(campo).readOnly)
				document.getElementById(campo).className = "jig_readonly";
			else
				document.getElementById(campo).className = "";
			return "";
		}
		if (!validarNumericoConDecimales(valorCampo, enteros, decimales)) {
			document.getElementById(campo).className = "jig_error";
			return "* " + descripcionError
					+ " (el valor debe ser numérico, positivo, con 1 a "
					+ enteros + " enteros y hasta " + decimales
					+ " decimales)\n";
		}
		if (document.getElementById(campo).readOnly)
			document.getElementById(campo).className = "jig_readonly";
		else
			document.getElementById(campo).className = "";
		return "";
	}

	function validarCampoNumericoMayorACeroConDecimales(campo, enteros,
			decimales, descripcionError) {
		var resultado = validarCampoNumericoConDecimales(campo, enteros,
				decimales, descripcionError);

		if (resultado == "") {
			var valorCampo = document.getElementById(campo).value;
			if (valorCampo.length == 0)
				return "";

			if ((valorCampo * 1) == 0) {
				document.getElementById(campo).className = "jig_error";
				resultado = "* " + descripcionError
						+ " (el valor debe ser mayor a cero)\n";
			}
		}

		return resultado;
	}

	function validarNumericoConDecimales(texto, enteros, decimales) {
		var regExp = new RegExp("^\\d{1," + enteros + "}(\\.\\d{0," + decimales
				+ "}?)?$");
		return (texto.match(regExp));
	}

	function ajaxFunction() {
		document.getElementById("actualizartipocambio_btn").style.display = "none";
		var xmlHttp;
		try { // Safari, Firefox, Opera, etc.
			xmlHttp = new XMLHttpRequest();
		} catch (e) { // Internet Explorer
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					alert("El browser utilizado no soporta AJAX!");
					return false;
				}
			}
		}
		xmlHttp.onreadystatechange = function() {
			if (xmlHttp.readyState == 4) {
				var resultado = xmlHttp.responseText;

				if (resultado == "OK#%#") {
					document.getElementById("tipocambio").value = "";
				} else {
					//alert(resultado);
					var componentesResultado = resultado.split("#%#");
					var estado = componentesResultado[0];
					if (estado == "ERROR") {
						alert(componentesResultado[1]);
						document.getElementById("tipocambio").value = "";
					} else
						document.getElementById("tipocambio").value = componentesResultado[1];
				}

				setTimeout("mostrarProgreso(false)", 250);
			}
		}
		if (document.getElementById("moneda").value != "") {
			mostrarProgreso(true);
			xmlHttp.open("GET", "ajax.do?f=tipocambio&m="
					+ document.getElementById("moneda").value, true);
			xmlHttp.send(null);
		} else
			document.getElementById("tipocambio").value = "";
	}

	function mostrarProgreso(mostrar) {
		if (mostrar)
			document.getElementById("recuperando_tipocambio").style.display = "block";
		else
			document.getElementById("recuperando_tipocambio").style.display = "none";
	}
</script>
<!-- <div class="jig_titulo_con_subtitulo">LOLA MORENA - GENERACION DE COMPROBANTES - FACTURA A</div> -->
<!-- <div class="jig_subtitulo">DATOS DE EMISION (PASO 1 DE 4)</div>
<div class="jig_paso_proceso">
<img src="imagenes/circulolleno.gif">
<img src="imagenes/circulovacio.gif">
<img src="imagenes/circulolleno.gif">
<img src="imagenes/circulolleno.gif">
<img src="imagenes/circulolleno.gif">
</div> -->
<center> 
<form name="datosEmisorForm" action="genComDatosReceptor.do.html" method="post" style="margin-top:0px;">
	<div class="jig_borde">
		<div class="jig_contenido">
			<table class="jig_form" style="margin-left:auto;margin-right:auto;">
				
				<tbody><tr>
					<th><label for="fc">Fecha del Comprobante</label></th>
					<td nowrap="nowrap"><input value="" size="10" maxlength="10" name="fechaEmisionComprobante" id="fc" type="text"><input id="fc_btn" value="..." type="button" style="text-align:center;"></td>
				</tr>
				<tr>
					<th>Conceptos a incluir</th>
				
					<td>
						<select name="idConcepto" id="idconcepto" onchange="mostrarOcultar(this.value);">
							<option value="" selected="selected" style="color:#888;" onclick="mostrarOcultar(this.value);">seleccionar...</option>
							<option value="1">&nbsp;Productos</option>
							<option value="2">&nbsp;Servicios</option>
							<option value="3">&nbsp;Productos y Servicios</option>
						</select>
					</td>
				</tr>
				
				
				<tr>
					<td colspan="2" style="border-spacing:0px;padding:0px;margin:0px;">
						<table class="jig_form" style="margin-left:70px;padding-top:0px;padding-bottom:0px;border-spacing:0px;" id="tablaventatabaco">
							<tbody><tr>
								<th style="padding-top:0px;padding-bottom:0px;border-spacing:0px;"><input type="checkbox" name="esVentaTabaco" id="esventatabaco" value="si" onclick="mostrarOcultarExportaSimple();"></th>
								<td><label for="esventatabaco">El comprobante se relaciona con venta de tabaco</label></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				
				
				<tr>
					<td colspan="2" style="border-spacing:0px;padding:0px;margin:0px;">
						<table class="jig_form" style="margin-left:70px;padding-top:0px;padding-bottom:0px;border-spacing:0px;">
							<tbody><tr>
								<th><input type="checkbox" name="monedaExtranjera" id="monedaextranjera" onclick="mostrarOcultarMoneda(this.checked,true);"></th>
								<td><label for="monedaextranjera">Moneda Extranjera</label></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<table class="jig_form" id="tablamoneda" style="display:none;">
							<tbody><tr>
								<th>Moneda</th>
								<td>
									<select name="moneda" id="moneda" onchange="ajaxFunction();">
										<option value="" selected="selected" style="color:#888;">seleccionar...</option>
										
										<option value="057">&nbsp;Baht (Tailandia)</option>
										
										<option value="043">&nbsp;Balboas Panameñas</option>
										
										<option value="023">&nbsp;Bolívar Venezolano</option>
										
										<option value="024">&nbsp;Corona Checa</option>
										
										<option value="014">&nbsp;Coronas Danesas</option>
										
										<option value="015">&nbsp;Coronas Noruegas</option>
										
										<option value="016">&nbsp;Coronas Suecas</option>
										
										<option value="044">&nbsp;Córdoba Nicaragüense</option>
										
										<option value="041">&nbsp;Derechos Especiales de Giro</option>
										
										<option value="059">&nbsp;Dinar Kuwaiti</option>
										
										<option value="025">&nbsp;Dinar Yugoslavo</option>
										
										<option value="045">&nbsp;Dirham Marroquí</option>
										
										<option value="027">&nbsp;Dracma Griego</option>
										
										<option value="026">&nbsp;Dólar Australiano</option>
										
										<option value="018">&nbsp;Dólar Canadiense</option>
										
										<option value="DOL">&nbsp;Dólar Estadounidense</option>
										
										<option value="002">&nbsp;Dólar Libre EEUU</option>
										
										<option value="051">&nbsp;Dólar de Hong Kong</option>
										
										<option value="053">&nbsp;Dólar de Jamaica</option>
										
										<option value="052">&nbsp;Dólar de Singapur</option>
										
										<option value="054">&nbsp;Dólar de Taiwan</option>
										
										<option value="060">&nbsp;Euro</option>
										
										<option value="007">&nbsp;Florines Holandeses</option>
										
										<option value="028">&nbsp;Florín (Antillas Holandesas)</option>
										
										<option value="056">&nbsp;Forint (Hungría)</option>
										
										<option value="009">&nbsp;Franco Suizo</option>
										
										<option value="049">&nbsp;Gramos de Oro Fino</option>
										
										<option value="029">&nbsp;Güaraní</option>
										
										<option value="040">&nbsp;Lei Rumano</option>
										
										<option value="063">&nbsp;Lempira Hondureña</option>
										
										<option value="046">&nbsp;Libra Egipcia</option>
										
										<option value="021">&nbsp;Libra Esterlina</option>
										
										<option value="035">&nbsp;Nuevo Sol Peruano</option>
										
										<option value="031">&nbsp;Peso Boliviano</option>
										
										<option value="033">&nbsp;Peso Chileno</option>
										
										<option value="032">&nbsp;Peso Colombiano</option>
										
										<option value="042">&nbsp;Peso Dominicano</option>
										
										<option value="010">&nbsp;Pesos Mejicanos</option>
										
										<option value="011">&nbsp;Pesos Uruguayos</option>
										
										<option value="055">&nbsp;Quetzal Guatemalteco</option>
										
										<option value="034">&nbsp;Rand Sudafricano</option>
										
										<option value="012">&nbsp;Real</option>
										
										<option value="047">&nbsp;Riyal Saudita</option>
										
										<option value="062">&nbsp;Rupia Hindú</option>
										
										<option value="030">&nbsp;Shekel (Israel)</option>
										
										<option value="036">&nbsp;Sucre Ecuatoriano</option>
										
										<option value="019">&nbsp;Yens</option>
										
										<option value="064">&nbsp;Yuan (Rep. Pop. China)</option>
										
										<option value="061">&nbsp;Zloty Polaco</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<th>Tipo de Cambio</th>
								<td><div style="position:relative;"><input type="text" name="tipoCambio" id="tipocambio" maxlength="11" style="width:80px;padding-left:2px;"><div id="recuperando_tipocambio" style="display:none;position:absolute;top:3px;left:90px;"><img src="imagenes/progreso.gif" width="16px" height="16px" alt="Recuperando Tipo de Cambio..."></div><input id="actualizartipocambio_btn" value="Actualizar" title="Actualizar el Tipo de Cambio" type="button" style="display:none;position:absolute;top:1px;left:83px;text-align:center;font-size:9px;" onclick="ajaxFunction();"></div></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				
				
				<tr>
					<td colspan="2" style="text-align:center;">
						<table class="jig_form" id="tablaperiodo" style="display:none;">
							<tbody><tr>
								<td colspan="2" align="left" class="jig_subtitulo_seccion">Período Facturado<div class="jig_separador"><!-- IE falla sin este comentario --></div></td>
							</tr>
							<tr>
								<th><label for="fsd">Desde</label></th>
								<td nowrap="nowrap"><input value="" size="10" maxlength="10" name="periodoFacturadoDesde" id="fsd" type="text"><input id="fsd_btn" value="..." type="button" style="text-align:center;"></td>
							</tr>
							<tr>
								<th><label for="fsh">Hasta</label></th>
								<td nowrap="nowrap"><input value="" size="10" maxlength="10" name="periodoFacturadoHasta" id="fsh" type="text"><input id="fsh_btn" value="..." type="button" style="text-align:center;"></td>
							</tr>
							<tr>
								<th><label for="vencimientopago">Vto. para el Pago</label></th>
								<td nowrap="nowrap"><input value="" size="10" maxlength="10" name="vencimientoPago" id="vencimientopago" type="text"><input id="fvto_btn" value="..." type="button" style="text-align:center;"></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				
			</tbody>
			</table>
		</div>
	</div>
	<br>
	<input type="button" value="< Volver" onclick="parent.history.back();">&nbsp;<input type="button" value="Continuar >" onclick="validarCampos();">
	<br><br>
</form>
</center>
<table style="margin-left:auto;margin-right:auto;">
	<tbody><tr><td><div class="jig_separador_botones"><!-- IE falla sin este comentario --></div></td></tr>
	<tr><td>
	<input type="button" value="Menu Principal" onclick="parent.location.href='menu_ppal.jsp'"></td></tr>
</tbody></table>
<br>


<script type="text/javascript">
Calendar.setup({inputField:"fc", ifFormat:"%d/%m/%Y", button:"fc_btn", align:"Bl", singleClick:true, firstDay:0, cache:true, step:1, showOthers:true, dateStatusFunc: dateStatusHandlerFC});

Calendar.setup({inputField:"fsd", ifFormat:"%d/%m/%Y", button:"fsd_btn", align:"Bl", singleClick:true, firstDay:0, cache:true, step:1, showOthers:true, dateStatusFunc: dateStatusHandlerFSD});
Calendar.setup({inputField:"fsh", ifFormat:"%d/%m/%Y", button:"fsh_btn", align:"Bl", singleClick:true, firstDay:0, cache:true, step:1, showOthers:true, dateStatusFunc: dateStatusHandlerFSH});
Calendar.setup({inputField:"vencimientopago", ifFormat:"%d/%m/%Y", button:"fvto_btn", align:"Bl", singleClick:true, firstDay:0, cache:true, step:1, showOthers:true, dateStatusFunc: dateStatusHandler});


var fechaHoyStringIEEE = "20170908";
var fechaHoyStringEsp = "08/09/2017";

document.getElementById("fc").value = fechaHoyStringEsp;

document.getElementById("fsd").value = fechaHoyStringEsp;
document.getElementById("fsh").value = fechaHoyStringEsp;
document.getElementById("vencimientopago").value = fechaHoyStringEsp;


function fechaMayorActual(date) {
	return (date.print("%Y%m%d") > fechaHoyStringIEEE);
}

function fechaMenorActual(date) {
	return (date.print("%Y%m%d") < fechaHoyStringIEEE);
}

function controlarFecha(date, campo, mayor)
{
	//if (fechaMayorActual(date)) return true;
	fechaString = document.getElementById(campo).value;
	if (fechaString == "")
		return false;
	else
	{
		if (fechaString.length != 10)
		{
			var partesFecha = fechaString.match(/^(\d{1,2})(\/)(\d{1,2})(\/)(\d{4})$/);

			if (partesFecha == null)
			{
				document.getElementById(campo).focus();
				document.getElementById(campo).className = "jig_error";
				document.getElementById(campo).select();
				alert("Fecha inválida");
				document.getElementById(campo).className = "";
				fechaString = "";
				document.getElementById(campo).value = fechaString;
				return false;
			}

			var dia = partesFecha[1];
			var mes = partesFecha[3];
			var anio = partesFecha[5];
			mes--;

			var fechaDate = new Date(anio, mes, dia,'12','00','00');
			fechaString = fechaDate.print("%d/%m/%Y");
			document.getElementById(campo).value = fechaString;
		}
		if (mayor)
			return (fechaString.substring(6,10)+""+fechaString.substring(3,5)+""+fechaString.substring(0,2) > date.print("%Y%m%d"));
		else
			return (fechaString.substring(6,10)+""+fechaString.substring(3,5)+""+fechaString.substring(0,2) < date.print("%Y%m%d"));
	}
}

function controlarFechaRango2(date, campo, fecha1, fecha2)
{
	fechaString = document.getElementById(campo).value;
	if (fechaString != "")
	{
		if (fechaString.length != 10)
		{
			var partesFecha = fechaString.match(/^(\d{1,2})(\/)(\d{1,2})(\/)(\d{4})$/);

			if (partesFecha == null)
			{
				document.getElementById(campo).focus();
				document.getElementById(campo).className = "jig_error";
				document.getElementById(campo).select();
				alert("Fecha inválida");
				document.getElementById(campo).className = "";
				fechaString = "";
				document.getElementById(campo).value = fechaString;
				return false;
			}

			var dia = partesFecha[1];
			var mes = partesFecha[3];
			var anio = partesFecha[5];
			mes--;

			var fechaDate = new Date(anio, mes, dia,'12','00','00');
			fechaString = fechaDate.print("%d/%m/%Y");
			document.getElementById(campo).value = fechaString;

		}
		//return false; // TODO: ver si realmente quieren limitarlo a un rango de 10 dias
		if ((fechaString.substring(6,10)+""+fechaString.substring(3,5)+""+fechaString.substring(0,2) < fecha1)
			|| (fechaString.substring(6,10)+""+fechaString.substring(3,5)+""+fechaString.substring(0,2) > fecha2))
		{
			document.getElementById(campo).focus();
			document.getElementById(campo).className = "jig_error";
			document.getElementById(campo).select();
			alert("Fecha inválida");
			document.getElementById(campo).className = "";
			fechaString = "";
			document.getElementById(campo).value = fechaString;
			return false;
		}
	}
	//return false; // TODO: ver si realmente quieren limitarlo a un rango de 10 dias
	return ((date.print("%Y%m%d") < fecha1) || (date.print("%Y%m%d") > fecha2));
}

function controlarFechaRango(date, campo, fecha1, fecha2)
{
	fechaString = document.getElementById(campo).value;
	if (fechaString != "")
	{
		if (fechaString.length != 10)
		{
			var partesFecha = fechaString.match(/^(\d{1,2})(\/)(\d{1,2})(\/)(\d{4})$/);

			if (partesFecha == null)
			{
				document.getElementById(campo).focus();
				document.getElementById(campo).className = "jig_error";
				document.getElementById(campo).select();
				alert("Fecha inválida");
				document.getElementById(campo).className = "";
				fechaString = "";
				document.getElementById(campo).value = fechaString;
				return false;
			}

			var dia = partesFecha[1];
			var mes = partesFecha[3];
			var anio = partesFecha[5];
			mes--;

			var fechaDate = new Date(anio, mes, dia,'12','00','00');
			fechaString = fechaDate.print("%d/%m/%Y");
			document.getElementById(campo).value = fechaString;

		}
		//return false; // TODO: ver si realmente quieren limitarlo a un rango de 10 dias
		if ((fechaString.substring(6,10)+""+fechaString.substring(3,5)+""+fechaString.substring(0,2) < fecha1)
			|| (fechaString.substring(6,10)+""+fechaString.substring(3,5)+""+fechaString.substring(0,2) > fecha2))
		{
			document.getElementById(campo).focus();
			document.getElementById(campo).className = "jig_error";
			document.getElementById(campo).select();
			alert("Fecha inválida");
			document.getElementById(campo).className = "";
			fechaString = "";
			document.getElementById(campo).value = fechaString;
			return false;
		}
	}
	//return false; // TODO: ver si realmente quieren limitarlo a un rango de 10 dias
	return ((date.print("%Y%m%d") < fecha1) || (date.print("%Y%m%d") > fecha2));
}

function dateStatusHandlerFC(date, y, m, d) {
	
	switch (concepto)
	{
		case "1":
			return controlarFechaRango(date, "fc", "20170905", "20170908");
		case "" :
		case "2":
		case "3":
			return controlarFechaRango(date, "fc", "20170905", "20170918");
		default:
			return false;
	}
	
}
function dateStatusHandlerFSD(date, y, m, d) {
	return controlarFecha(date, "fsh", false);
}
function dateStatusHandlerFSH(date, y, m, d) {
	return controlarFecha(date, "fsd", true);
}
function dateStatusHandler(date, y, m, d) {
	return fechaMenorActual(date);
}

function seleccionarTodos(nombreElemento,seleccionar)
{
	var objetos = document.getElementsByname(nombreElemento);
	for (var i = 0; i < objetos.length; i++)
		objetos[i].checked = seleccionar;
}


</script>
<!-- Contenido (fin) -->
		</div>
		<br>

		<div id="pie" align="center">
			<table>
				<tbody><tr><td><b>Viernes, 8 de septiembre de 2017</b></td><td style="text-align:right;">Autenticado por: <b>R&B Design Web &copy; 2017</b></td></tr>
			</tbody></table>
		</div>
	


</body>
</html>