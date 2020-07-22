<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fact1</title>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<title>RCEL</title>
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
			<link rel="stylesheet" href="botones.css">
			<link rel="stylesheet" href="estiloFact.css">

<style>
	body{
		background-color: #90CAF9;
	}
</style>


<!-- Head específico (fin) -->
	</head>
	<body>
		<div id="encabezado" style="background-position:560px -5px;background-repeat:no-repeat;">
			<div id="encabezado_logo_afip" align="center">
			<img src="../img/Edilu1.png"></div>
			<!--     +++++++++++++++++++++++++++++++++     -->
			<div id="encabezado_salir" align="right">
			<a href="../inicio.php" onclick="salirAplicacion('/rcel');" class="button blue"><span class="icon-house"></span>Salir</a></div>
			<br>
			<br>
			<br>
			<table id="encabezado_usuario_container" align="center">
				<tbody><tr>
					<td>
						<table id="encabezado_usuario">
							<tbody><tr><th>Usuario<span>:</b></span></th><td><td> <b>EDILU SRL - 30708662190</b></td></tr>
							
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
			<br>
			<br>
			<br>
		</div>
		<div id="contenido">
<!-- Contenido (inicio) -->

<script type="text/javascript">

var descripcionTC = new Array();
var descripcionPV = new Array();
var codigoSistemaPtoVta = new Array();
descripcionPV[0] = "";
codigoSistemaPtoVta[0]="";

descripcionPV[1] = "Factura en Linea - Responsable Inscripto";
codigoSistemaPtoVta[1] = "RLI";

function actualizarDescripcionPVConDelay(indice)
{
	if (document.getElementById('desc_pto_vta').innerHTML == "")
		actualizarDescripcionPV(indice);
	else // Para que el usuario note que se actualizó incluso cuando la descripción sea la misma
	{
		document.getElementById('desc_pto_vta').innerHTML = "";
		setTimeout("actualizarDescripcionPV("+indice+")",350);
	}
}

function actualizarDescripcionPV(indice)
{
	document.getElementById('desc_pto_vta').innerHTML = descripcionPV[indice];
	document.getElementById('cod_sis_pto_vta').value = codigoSistemaPtoVta[indice];
	
	if (descripcionPV[indice] == "")
		document.getElementById("desc_pto_vta").style.display = "none";
	else
		document.getElementById("desc_pto_vta").style.display = "block";
}

function actualizarDescripcionTC(indice)
{
	//alert("actualizarDescripcionTC("+indice+")");
	document.getElementById('desc_tipo_comp').innerHTML = descripcionTC[indice];
	
	if (descripcionTC[indice] == "")
		document.getElementById("desc_tipo_comp").style.display = "none";
	else
		document.getElementById("desc_tipo_comp").style.display = "block";
}

function validarCampos()
{
	if (validarCamposObligatorios())
		/*if (validarCamposValores())*/
			document.puntoVentasForm.submit();
}

function validarCamposObligatorios()
{
	var camposFaltantes = "";
	
	camposFaltantes += registrarSiNulo("puntodeventa","","Punto de Ventas");
	camposFaltantes += registrarSiNulo("universocomprobante","","Tipo de Comprobante");
	
	if (camposFaltantes == "")
		return true;
	else
	{
		alert("Los siguientes campos son obligatorios:\n\n"+camposFaltantes);
		return false;
	}
}

function registrarSiNulo(campo,valorNulo,descripcionError)
{
	if (document.getElementById(campo).value == valorNulo)
	{
		document.getElementById(campo).className = "jig_error";
		return "* "+descripcionError+"\n";
	}
	else
	{
		document.getElementById(campo).className = "";
		return "";
	}
}

function ajaxFunction()
{
	var xmlHttp;
	try { // Safari, Firefox, Opera, etc.
		xmlHttp=new XMLHttpRequest();
	}
	catch (e) { // Internet Explorer
		try {
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) {
			try {
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) {
				alert("El browser utilizado no soporta AJAX!");
				return false;
			}
		}
	}
	xmlHttp.onreadystatechange=function() {
		if (xmlHttp.readyState==4) {
			var resultado = xmlHttp.responseText;
			
			//alert(resultado);
			var componentesResultado = resultado.split("#%#");
			var estado = componentesResultado[0];
			document.getElementById("desc_tipo_comp").value = "";
			if (estado == "ERROR")
			{
				alert(componentesResultado[1]);
				borrarOpciones("universocomprobante");
			}
			else
			{
				if (componentesResultado.length > 1)
				{
					var universos = new Array(componentesResultado.length - 1);
					for (var i=1;i<componentesResultado.length;i++)
						universos[i-1] = componentesResultado[i];
				
					agregarOpcionesTiposComprobantes(universos);
				}
			}
			actualizarDescripcionTC(0);
			setTimeout("mostrarProgreso(false)",250);
		}
	}
	if (document.getElementById("puntodeventa").value != "")
	{
		mostrarProgreso(true);
		xmlHttp.open("GET","ajax.do?f=tiposcomp&pv="+document.getElementById("puntodeventa").value,true);
		xmlHttp.send(null);
	}
	else
	{
		document.getElementById("universocomprobante").value = "";
		borrarOpciones("universocomprobante");
		document.getElementById("desc_tipo_comp").style.display = "none";
	}
}

function mostrarProgreso(mostrar)
{
	if (mostrar)
		document.getElementById("recuperando_tipo_comp").style.display = "block";
	else
		document.getElementById("recuperando_tipo_comp").style.display = "none";
}

function borrarOpciones(objetoSelect)
{
	var combo = document.getElementById(objetoSelect);
	while (combo.length > 0)
		combo.remove(0);
}

function agregarOpcionesTiposComprobantes(listaTiposComprobantes)
{
	var combo = document.getElementById("universocomprobante");
	var nuevoOption;
	var itemLista;
	
	borrarOpciones("universocomprobante");
	
	for (var i=0;i<listaTiposComprobantes.length;i++)
	{
		nuevoOption = document.createElement("option");
		itemLista = listaTiposComprobantes[i].split(",");
		nuevoOption.value = itemLista[0];
		nuevoOption.text = itemLista[1];
		descripcionTC[i] = itemLista[2];
		//alert(descripcionTC[i]);
		try {
			combo.add(nuevoOption, null);
		} catch(e) {
			combo.add(nuevoOption); // IE, mal como siempre
		}
	}
}
</script>
<div class="jig_titulo_con_subtitulo" align="center"><b>EDILU S.R.L. - GENERACIÓN DE COMPROBANTES</b></div>
<div class="jig_subtitulo" align="center">Puntos de Ventas y Tipos de Comprobantes habilitados para impresión</div>
<div class="jig_paso_proceso" align="center"></div>
<br>
<br>
<br>
<form name="puntoVentasForm" action="genComDatosEmisor.php" method="post" style="margin-top:0px;">
	<div class="jig_borde" align="center">
		<div class="jig_contenido">
			<table class="jig_form">
				<tbody><tr>
					<th>Punto de Ventas a utilizar</th>
					<td style="min-width:400px;">
						<select name="puntoDeVenta" onchange="actualizarDescripcionPVConDelay(this.selectedIndex);ajaxFunction();" id="puntodeventa">
							<option value="" selected="selected" style="color:#888;" onclick="document.getElementById('desc_pto_vta').innerHTML='';">seleccionar...</option>
							
							<option value="2">&nbsp;0002-Lamarca Emilio 4961 - Ciudad de Buenos Aires</option>
							
						</select>
					</td>
				</tr>
				<tr>
					<th style="width:300px;padding-top:0px;"></th>
					<td style="width:400px;">
						<input type="hidden" name="codigoSistemaPtoVta" value="RLI" id="cod_sis_pto_vta">
						<div id="desc_pto_vta" style="width: 400px; margin-top: -4px; padding-left: 5px; color: rgb(17, 51, 102); display: block;">Factura en Linea - Responsable Inscripto</div>
					</td>
				</tr>
				<tr>
					<th>Tipo de Comprobante</th>
					<td>
						<div style="position:relative;">
							<select name="universoComprobante" onchange="actualizarDescripcionTC(this.selectedIndex);" id="universocomprobante">
								
								<option value="10">Factura A</option>
								<option value="11">Nota de Débito A</option>
								<option value="12">Nota de Crédito A</option>
								<option value="13">Recibo A</option>
								<option value="19">Factura B</option>
								<option value="21">Nota de Débito B</option>
								<option value="23">Nota de Crédito B</option>
								<option value="25">Recibo B</option>
								<option value="111">Factura T</option>
								<option value="112">Nota de Débito T</option>
								<option value="113">Nota de Crédito T</option>
							</select>
							<div id="recuperando_tipo_comp" style="display: none; position: absolute; top: 3px; left: 130px;"><!-- <img src="imagenes/progreso.gif" width="16px" height="16px" alt="Recuperando Tipos de Comprobantes correspondientes al Punto de Venta..."> -->
								
							</div>
							</div>
					</td>
				</tr>
				<tr>
					<th style="width:300px; padding:0px;"></th>
					<td>
						<input type="hidden" name="leyenda" value="" id="leyenda">
						<div id="desc_tipo_comp" style="width:300px;margin-top:-4px;padding-left:5px;color:#136;display:none;"></div>
					</td>
				</tr>
			</tbody></table>
		</div>
	</div>
	<br>
	<div class="bottones" align="center">
	<input type="button" value="< Volver" >
	&nbsp;
	<input type="submit" value="Continuar >" ">
	<br>
	<br>
	</div>
</form>
<!-- Contenido (fin) -->
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div id="pie" align="center">
			<table>
				<tbody><tr><td><b><?php echo date("d-m-y ") ?></b></td><td style="text-align:right;">Autenticado por: <b>R&B Design Web &copy; 2017</b></td></tr>
			</tbody></table>
		</div>
	


</body>

</html>