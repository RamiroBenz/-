<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta charset="utf-8">
		<meta content="utf-8">
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
<link rel="stylesheet" href="estiloFact.css">

<!-- Head específico (fin) -->
	</head>
	<body>
		<div id="encabezado" style="background-position:100% -5px;background-repeat:no-repeat;">
			<!-- <div id="encabezado_logo_afip">
			<img src="imagenes/logoafipsmall2.png"></div><div id="encabezado_salir"><a href="#" onclick="salirAplicacion('/rcel');">Salir</a></div> -->
			
			<table id="encabezado_usuario_container">
				<tbody><tr>
					<td>
						<table id="encabezado_usuario">
							<tbody><tr><th>Usuario<span>:</span></th><td>20083621940 - BENZACAR EDUARDO ALBERTO</td></tr>
							<tr><th>Representando a<span>:</span></th><td>30708662190 - EDILU SRL</td></tr>
							<tr><th>Dependencia<span>:</span></th><td>AGENCIA NRO 2</td></tr>
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
			
		</div>
		<div id="contenido">
<!-- Contenido (inicio) -->



<script type="text/javascript">

function confirmar()
{
	if (confirm("Usted está por generar un nuevo comprobante.\n\n¿Confirma la Operación?"))
	{
		document.getElementById("botones_accion").style.display = "none";
		document.getElementById("generando_comprobante").style.display = "block";
		ajaxFunction();
	}
}

var idComprobante;
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
				alert("El browser utilizado no soporta AJAX!"); //TODO: hacer el redirect al generador?
				return false;
			}
		}
	}
	xmlHttp.onreadystatechange=function() {
		if (xmlHttp.readyState==4) {
			//alert("listo!");
			idComprobante = xmlHttp.responseText;
			if (!isNaN(parseInt(idComprobante)))
			{
				document.getElementById("generando_comprobante").style.display = "none";
				document.getElementById("botones_comprobante").style.display = "block";
			}
			else
			{
				document.getElementById("generando_comprobante").style.display = "none";
				document.getElementById("error_comprobante").style.display = "block";
				//alert("Error:\n======================\n"+idComprobante); //TODO: parsear y presentar el error
				//alert(idComprobante);
				//TODO: las dos lineas que siguen son solo para debug - elimiar en produccion (igual, mas que "perdió la sesión" no debería salir, a menos que haya problemas con la base de datos)
				var a = window.open('','','scrollbars=1,width='+window.screen.availWidth+',height='+window.screen.availHeight+',resizable=1,left=0,top=0');
				if (a)
					a.document.write(idComprobante);
				else
					alert("Por favor desactive el bloqueador de popups de su navegador");

				if (idComprobante.indexOf("<!--pdferror-->") >= 0)
					document.getElementById("mensaje_error").innerHTML = "Error durante la generaci&oacute;n del PDF.<br />El comprobante fue generado correctamente<br />pero no puede imprimirse en este momento.<br /><br /><u>Por favor intente imprimirlo m&aacute;s tarde desde la secci&oacute;n </u><a href='filtrarComprobantesGenerados.do' style='text-decoration:underline;'>Consultas</a>";
				else if (idComprobante.indexOf("<!--caeerror-->") >= 0)
					document.getElementById("mensaje_error").innerHTML = "Error durante la generaci&oacute;n del comprobante.<br />No se pudo generar el C&oacute;digo de Autorizaci&oacute;n<br />Comprobante NO v&aacute;lido.<br /><br />";
				else if (idComprobante.indexOf("<!--datosadicionaleserror-->") >= 0)
					document.getElementById("mensaje_error").innerHTML = "Error durante la generaci&oacute;n del comprobante.<br />No se cargaron los datos adicionales del comprobante.<br /><br />";
			}
		}
	}
	xmlHttp.open("GET","generarComprobante.do?_="+(new Date().getTime()),true); // El timestamp es para evitar problemas de cache de IE
	xmlHttp.send(null);
}
</script>

<style type="text/css" media="all">

	#advertencia_impresion {
		display:none;
	}

</style>

<style type="text/css" media="print">

	#advertencia_impresion {
		display:block;
	}
	#resumen_datos {
		display:none;
	}

</style>





<form name="datosReceptorForm" action="#" method="post" style="margin-top:0px;">
	<div id="advertencia_impresion"><p><b>Por favor confirme los datos para generar una impresion, no imprima esta pagina.</b></p></div>
	<div class="jig_contenido" style="background-image:none;" id="resumen_datos">
		<table class="jig_form" style="width:100%;">
			<tbody><tr>
				<td style="text-align:center;">
				<span style="color:#7788AA;">El siguiente es un resumen de todos los datos ingresados.<br>De confirmar los mismos se procedera a la generacion del comprobante.</span></td>
			</tr>
			
			
			<tr>
				<td colspan="2" align="left" class="jig_subtitulo_seccion">Datos del Emisor<div class="jig_separador"><!-- IE falla sin este comentario --></div></td>
			</tr>
			<tr>
				<td>
					<table class="jig_form">
						
						
						<tbody><tr><th width="140px">Punto de Venta</th><td>0002</td></tr>
						<tr><th width="140px">Domicilio</th><td>Lamarca Emilio 4961 - Ciudad de Buenos Aires</td></tr>
						<tr><th width="140px">Conceptos a Incluír</th><td>Productos</td></tr>
						
						
					</tbody></table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="left" class="jig_subtitulo_seccion">Datos del Receptor<div class="jig_separador"><!-- IE falla sin este comentario --></div></td>
			</tr>
			<tr>
				<td>
					<table class="jig_form">
						
						<tbody><tr><th width="140px">CUIT</th><td>30686309378</td></tr>
						<tr><th width="140px">Razón Social</th><td>ARCA DISTRIBUCIONES SOCIEDAD ANONIMA</td></tr>
						<tr><th width="140px">Domicilio Comercial</th><td>Cerrito 1136 Piso:1 Dpto:fte - Capital Federal, Ciudad de Buenos Aires</td></tr>
						<tr><th width="140px">Email</th><td></td></tr>
						<tr><th width="140px">Condición frente al IVA</th><td>IVA Responsable Inscripto</td></tr>
						
						<tr><th width="140px" style="vertical-align:top;">Condiciones de Venta</th>
							<td style="padding-top:5px;padding-bottom:5px;">
							
							
							Cuenta Corriente<br>
							</td>
						</tr>

						
						<tr>
							<th width="140px" style="vertical-align:top;">Comprobantes Asociados</th>
							<td style="padding-top:5px;padding-bottom:5px;"><b>Remito</b> 0001-00004338  <br></td>
						</tr>
						
						
						
						

					</tbody></table>
				</td>
			</tr>
			
			
			

			<tr>
				<td colspan="2" align="left" class="jig_subtitulo_seccion">Detalle de la Operacion
				<div class="jig_separador">
				<!-- IE falla sin este comentario -->
					
				</div>
				</td>
			</tr>
			<tr>
				<td>
					<table cellspacing="0px" cellpadding="0px">
						<tbody><tr>
							<td>
								<table cellspacing="0px" cellpadding="3px" class="jig_table">
									
									<tbody><tr>
										
										<th>Codigo</th>
										<th style="text-align:left;">Productos</th>
										
										<th style="text-align:center;">Cant.</th>
										<th style="text-align:center;">U. Medida</th>
										<th>Prec. Unitario</th>
										<th>% Bon.</th>
										<th>Importe Bon.</th>
										<th>Subtotal</th>
										<th style="text-align:center;">Alicuota IVA</th>
										<th>Importe IVA</th>
										<th>Subtotal c/IVA</th>
									</tr>
									
										
										<!-- 
										********** Primer Producto ************ -->
										
										<tr class="jig_par"><td style="text-align:right;"></td><td style="text-align:left;">  </td><td style="text-align:center;"></td><td style="text-align:center;"></td><td style="text-align:right;"></td><td syle="text-align:right;"></td><td style="text-align:right;"></td><td style="text-align:right;"></td><td style="text-align:center;"></td><td style="text-align:right;"></td><td style="text-align:right;"></td></tr>
										
								</tbody></table>
							</td>
						</tr>
						<tr><td><div class="jig_fin_de_pagina"><!-- IE falla sin este comentario --></div></td></tr>
					</tbody></table>
					<br>
					<br>
					<table style="width:100%;">
						<tbody><tr>
							<td>
								<table class="jig_formsmall" id="impuestos">
									
										<tbody><tr><td colspan="5">Otros Tributos:</td></tr>
										<tr><td><b>Descripcion</b></td><td><b>Detalle</b></td><td><b>Alicuota %</b></td><td> </td><td><b>Importe</b></td></tr>
										
										
										
										<tr><td><b>Per./Ret. de Impuesto a las Ganancias</b></td><td></td><td style="text-align:center;"></td><th><span>$</span></th><td style="text-align:right;">-&nbsp;</td></tr><tr><td><b>Per./Ret. de IVA</b></td><td></td><td style="text-align:center;"></td><th><span>$</span></th><td style="text-align:right;">-&nbsp;</td></tr>
										<tr><td><b>Per./Ret. Ingresos Brutos</b></td><td></td><td style="text-align:center;"></td><th><span>$</span></th>
										<td style="text-align:right;">-&nbsp;</td></tr><tr><td><b>Impuestos Internos</b></td><td></td>
										<td style="text-align:center;"></td><th><span>$</span></th>
										<td style="text-align:right;">-&nbsp;</td></tr><tr><td><b>Impuestos Municipales</b></td><td></td><td style="text-align:center;"></td><th><span>$</span></th><td style="text-align:right;">-&nbsp;</td></tr>
									
									
								</tbody></table>
							</td>
							<td style="vertical-align:top;height:100%;">
								<table class="jig_formsmall" style="height:100%;width:100%;">
									<tbody><tr>
										<td style="vertical-align:top;">
											<table class="jig_formsmall" id="importes" style="float:right;">
											
												<tbody><tr>
													<td></td>
													<th nowrap="nowrap"><b>Importe Neto no Gravado: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>Importe Exento: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>Importe Neto Gravado: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 629.10</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>IVA 27%: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>IVA 21%: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 132.11</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>IVA 10,5%: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>IVA 5%: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>IVA 2,5%: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
												<tr>
													<td></td>
													<th nowrap="nowrap"><b>IVA 0%: </b><span>$</span></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"> 0.00</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
									<tr>
										<td>
											<table class="jig_formsmall" style="float:right;">
												<tbody><tr>
													<th nowrap="nowrap"><b>Importe Otros Tributos: <span>$</span></b></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"><b> 0.00</b></td>
												</tr>
											</tbody></table>
										</td>
									</tr>
									<tr>
										<td>
											<table class="jig_formsmall" style="float:right;">
												<tbody><tr>
													<th nowrap="nowrap"><b>Importe Total: <span>$</span></b></th><td style="width:70px;border-bottom:1px solid #000;text-align:right;"><b> 761.21</b></td>
												</tr>
												
											</tbody></table>
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
			
		</tbody></table>
	</div>
	<div class="jig_fin_de_pagina"><!-- IE falla sin este comentario --></div>
	<br>
	<div id="botones_accion">
	<input type="button" value="< Volver" onclick="parent.history.back();">&nbsp;<input type="button" value="Confirmar Datos..." onclick="confirmar();" style="width:150px;" id="btngenerar"><br><br></div>


	<div id="generando_comprobante" style="display:none;">
	<b>Generando Comprobante...</b><br>
	<img src="imagenes/progresogris.gif" width="16px" height="16px" alt="Generando comprobante..."></div>


	<div id="botones_comprobante" style="display:none;">
	<img src="imagenes/ok.gif" alt="ok" style="margin-bottom:-3px;">&nbsp;<a name="pdftxt"></a><b>Comprobante Generado</b><br>
	<br>
	<input type="button" value="Imprimir..." onclick="parent.location.href='imprimirComprobante.do?c='+idComprobante;" style="width:150px;font-weight:bold;">
	<br>
	<br>

	<a href="#pdftxt" onclick="parent.location.href='exportarComprobante.do?t=z&amp;c='+idComprobante;" style="font-size:10px;" title="Generar archivo comprimido con los archivos Cabecera y Detalle">Exportar Duplicados Electronicos (ZIP)</a> | <a href="#pdftxt" onclick="parent.location.href='exportarComprobante.do?t=v&amp;c='+idComprobante;" style="font-size:10px;" title="Generar archivo comprimido con los archivos Ventas y Alícuotas">Ventas (ZIP)</a><br></div>


	<div id="error_comprobante" style="display:none;"><img src="imagenes/error.gif" alt="error" style="margin-bottom:-3px;">&nbsp;<a name="pdftxt"></a><b id="mensaje_error">Error! No se pudo generar el Comprobante</b></div>


</form>



<table style="margin-left:auto;margin-right:auto;">
	<tbody>
	<tr>
	<td>
	<div class="jig_separador_botones"><!-- IE falla sin este comentario --></div></td></tr>
	<tr>
	<td>
	<input type="button" value="Menú Principal" onclick="parent.location.href='menu_ppal.jsp'"></td>
	</tr>
</tbody>
</table>
<br>
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