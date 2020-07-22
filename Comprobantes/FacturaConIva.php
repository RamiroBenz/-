<?php 
include 'cn.php';

 ?>

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<meta charset="utf-8">

			<title>Factura A</title>
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
		<link type="text/css" href="css/jig.css" rel="stylesheet">
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

<style>

	body{
		background-color:  #90CAF9;
		margin-bottom: 50px;

	}
	.encabezado{
		padding-top: 50px;
	}

	.botonSalir {
		font-family: helvetica bold;
		font-size: 18px;
	}
	.contenido {
		margin-left: 30px;
		display: flex;
		width: 90%;
		text-align: center;
		flex-direction: column;
	}

	.jig_contenido th input textarea select {
		font-family: helvetica bold;
		font-size: 15px;
		width: 100%;
		
	}
	.datos {
		width: 1000px;
		height: 150px;
		display: flex;
		justify-content: space-around;
		
	}
	 .datos1 {
		
	}
	.datos2 {
		
	}	
	form {
		width: 90%;
		text-align: center;

		justify-content: space-around;
	}
	.uno{
		float: left;
	}
	.dos{
		float: right;
	}

	.form {
		font-family: monospace bold;
		font-size: 25px;
		border-color: #030303;
		border: 1px groove;
		margin-left: 100px;
		padding-bottom: 100px;
		padding-left: 50px;
	}
	h1 .form {
		font-size: 30px;
	}



</style>

<!-- estiloFact.css -->
<!-- <link rel="stylesheet" href="estiloFact.css"> -->

<!-- Head específico (fin) -->
	</head>
	<body>
		<div id="encabezado" style=" background-color: #9E9E9E; background-position:760px -5px;background-repeat:no-repeat; padding: 50px; padding-top:150px; width: 90%;">
				<!-- <div id="encabezado_logo_afip" class="img" align="left" style="padding-bottom: 10px; border-radius: 10px;">
				<img src="img/Edilu.jpg" width="200">
				</div> -->
			<div id="encabezado_salir" class="botonSalir">
			<a href="index.php" onclick="salirAplicacion('/logout');">Salir</a>
			</div>
			<div class="form" align="center">
					<h1>A</h1>
				</div>
			
			<table id="encabezado_usuario_container" style=" width: 90%; padding-top: 100px;">

				<tbody>
					<tr>
						<td>
				
								<table id="encabezado_usuario" style="">
									<tbody class="encabezado" align="left">
										<tr>
										<th>Usuario<span>:</span></th>
										<td>30708662190 - EDILU SRL</td>
										</tr>
									<tbody>
										<tr>
										<th>Domicilio<span>:</span></th>
										<td>Emilio Lamarca 4961 - Capital Federal</td>
										</tr>
									<tbody>
									<tr>
										<th>Tel/Fax<span>:</span></th>
										<td>(54-11) 4572-3010</td>
										</tr>
									
									</tbody>
								</table>
							</td>
						</tr>
				</tbody>
				

						<div align="right">	
							<tbody align="right">
								<tr align="right">
									<td align="right">
										<table id="encabezado_usuario">
											<tbody>
												<tr>
												<th>C.U.I.T.<span>:</span></th>
												<td>30-70866219-0</td>
												</tr>
											</tbody>
											<tbody>
												<tr>
												<th>Ing.Brutos<span>:</span></th>
												<td>1132231-04</td>
												</tr>
											</tbody>
											<tbody>
												<tr>
												<th>Inicio de Actividades<span>:</span></th>
												<td>03/2004</td>
												</tr>
											</tbody>
										</table>	
										
									</td>
								</tr>
							</tbody>
						</div>
			</table>	
		
			
		</div>
	<div id="contenido" class="contenido">
<!-- Contenido (inicio) -->



<style type="text/css" media="all">
	/* #advertencia_impresion {
		display:none;
	} */

</style>

<style type="text/css" media="print">

	#advertencia_impresion {
		display:block;
	}
	#descripcion_moneda {
		display:none;
	}
	#detalles_datos {
		display:none;
	}
	#resumen_datos {
		display:none;
	}
	#otros_datos {
		display:none;
	}
	.uno{
		float: left;
	}
	.dos{
		float: right;
	}

</style>

<script type="text/javascript">

var htmlUnidadesMedida = "<option value='1' style='padding-left:10px;'> kilogramos</option><option value='2' style='padding-left:10px;'> metros</option><option value='3' style='padding-left:10px;'> metros cuadrados</option><option value='4' style='padding-left:10px;'> metros cúbicos</option><option value='5' style='padding-left:10px;'> litros</option><option value='6' style='padding-left:10px;'> 1000 kWh</option><option value='7' style='padding-left:10px;'> unidades</option><option value='8' style='padding-left:10px;'> pares</option><option value='9' style='padding-left:10px;'> docenas</option><option value='10' style='padding-left:10px;'> quilates</option><option value='11' style='padding-left:10px;'> millares</option><option value='14' style='padding-left:10px;'> gramos</option><option value='15' style='padding-left:10px;'> milimetros</option><option value='16' style='padding-left:10px;'> mm cúbicos</option><option value='17' style='padding-left:10px;'> kilómetros</option><option value='18' style='padding-left:10px;'> hectolitros</option><option value='20' style='padding-left:10px;'> centímetros</option><option value='25' style='padding-left:10px;'> jgo. pqt. mazo naipes</option><option value='27' style='padding-left:10px;'> cm cúbicos</option><option value='29' style='padding-left:10px;'> toneladas</option><option value='30' style='padding-left:10px;'> dam cúbicos</option><option value='31' style='padding-left:10px;'> hm cúbicos</option><option value='32' style='padding-left:10px;'> km cúbicos</option><option value='33' style='padding-left:10px;'> microgramos</option><option value='34' style='padding-left:10px;'> nanogramos</option><option value='35' style='padding-left:10px;'> picogramos</option><option value='41' style='padding-left:10px;'> miligramos</option><option value='47' style='padding-left:10px;'> mililitros</option><option value='48' style='padding-left:10px;'> curie</option><option value='49' style='padding-left:10px;'> milicurie</option><option value='50' style='padding-left:10px;'> microcurie</option><option value='51' style='padding-left:10px;'> uiacthor</option><option value='52' style='padding-left:10px;'> muiacthor</option><option value='53' style='padding-left:10px;'> kg base</option><option value='54' style='padding-left:10px;'> gruesa</option><option value='61' style='padding-left:10px;'> kg bruto</option><option value='62' style='padding-left:10px;'> uiactant</option><option value='63' style='padding-left:10px;'> muiactant</option><option value='64' style='padding-left:10px;'> uiactig</option><option value='65' style='padding-left:10px;'> muiactig</option><option value='66' style='padding-left:10px;'> kg activo</option><option value='67' style='padding-left:10px;'> gramo activo</option><option value='68' style='padding-left:10px;'> gramo base</option><option value='96' style='padding-left:10px;'> packs</option><option value='98' style='padding-left:10px;'> otras unidades</option>";
var codBonosA = "";

</script>

<script type="text/javascript">

	var simboloMoneda = "$";
	var tipoCambio = 1;

	var cuitRepresentada = "null";

</script>

<script type="text/javascript" src="scripts/gen_com_datos_operacion.js?v=20160601"></script>

<script type="text/javascript" src="scripts/gen_com_datos_operacion_am.js?v=20160601"></script>

<script type="text/javascript" src="scripts/keep_alive.js?v=20160311"></script>

<!-- <div class="jig_titulo_con_subtitulo" style="padding-left: 25px; ">EDILU - GENERACION DE COMPROBANTES - Remitos</div> -->
<!-- <div class="jig_subtitulo">DATOS DE LA OPERACIÓN (PASO 3 DE 4)</div>
<div class="jig_paso_proceso">
<img src="imagenes/circulolleno.gif">
<img src="imagenes/circulolleno.gif">
<img src="imagenes/circulolleno.gif">
<img src="imagenes/circulovacio.gif">
<img src="imagenes/circulolleno.gif">
</div>
<div id="advertencia_impresion"><p><b>Por favor confirme los datos para generar una impresión, no imprima esta página.</b></p></div> -->
<br>
<br>
<div class="datos" style="margin-bottom: 30px; padding-bottom: 20px; ">
	<div class="datos1" align="left">
		<table>

			<tbody class="uno">
				<tr>
				<th>Cliente: <input type="text" name="Cliente">	</th>
				</tr>
				<tr>
				<th>Direccion: <input type="text" name="Direccion">	</th>
				</tr>
				<tr>
				<th>IVA: <input type="text" name="IVA"></th>
				</tr>
				
			</tbody>
		</table>	
	</div>
	<div class="datos2" align="right"> 
		<table>	
				<tbody class="dos">
					<tr>
					<th>Localidad: <input type="text" name="Localidad"></th>
					</tr>
					<tr>
					<th>Provincia: <input type="text" name="Provincia"></th>
					</tr>
					<tr>
					<th>C.U.I.T.: <input type="text" name="C.U.I.T."></th>
					</tr>	
				</tbody>
		</table>
	</div>

</div> 
<br>
<br>
<br>
<br>
<br>
<div class="form">
	<form name="datosOperacionForm" action="" method="post" style="font-size: 20px;">
		<div class="jig_borde" align="center">
			<div class="jig_contenido" id="detalles_datos" style="font-size: 20px;">
				
				<table class="jig_formvertical" id="idoperacion" style="font-size: 20px;">
					<tbody>
					<tr style="font-size: 20px; padding-left: 10px; font-size: 20px;">
						<th>Cantidad</th>
						<th>Codigo</th>
						<th>Descripcion</th>
						<th style="padding:0px;">U. Medida</th>
						<th>Prec. Unitario</th>
						<th>% Bon.</th>
						<th>Importe Bon.</th>
						<th>Subtotal</th>
						<th>Alícuota IVA</th>
						<th>Importe IVA</th>
						<th>Subtotal c/IVA</th>
						<th>Eliminar</th>
					</tr>
				<!-- *******************Cantidad************** -->
				<tr style="padding-left: 10px; font-size: 20px;">
				<td style="padding:10px 8px; width: 35px; padding-left: 15px; font-size: 20px;">
				<input type="tdetalle_cantidad1ext" name="Cantidad" maxlength="10" id="" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1"></td>

				<!-- *********************Codigo****************** -->
				<td style="padding:0px 20px; padding-left: 10px;">
				<input type="text" name="Codigo" maxlength="10">
				<input type="hidden" name="detalleNroLinea"></td>

				<!-- ********************Descripcion ********************* -->
				<td style="padding:0px 8px; padding-left: 10px;">
				<textarea name="Descripcion" id="detalle_descripcion1" style="width:300px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

				<!-- **********************Unidades********************* -->
				<td style="padding:20px 8px; padding-left: 10px;">
				<select type="text" name="detalleMedida" id="detalle_medida1" style="width:100px;">
				<option value="1" style="color:#888;">seleccionar...</option>
				<option value="1" style="padding-left:15px;"> unidades</option>
				<option value="2" style="padding-left:15px;"> kilogramos</option>
				<option value="3" style="padding-left:15px;"> metros</option>
				<option value="4" style="padding-left:15px;"> metros cuadrados</option>
				<option value="2" style="padding-left:15px;"> metros cubicos</option>
				<option value="6" style="padding-left:15px;"> litros</option>
				<option value="7" style="padding-left:15px;"> 1000 kWh</option>
				

				<!-- <option value="8" style="padding-left:10px;"> pares
				</option><option value="9" style="padding-left:10px;"> docenas
				</option>
				<option value="10" style="padding-left:10px;"> quilates
				</option>
				<option value="11" style="padding-left:10px;"> millares
				</option>
				<option value="14" style="padding-left:10px;"> gramos
				</option>
				<option value="15" style="padding-left:10px;"> milimetros
				</option><option value="16" style="padding-left:10px;"> mm cubicos
				</option><option value="17" style="padding-left:10px;"> kilometros
				</option><option value="18" style="padding-left:10px;"> hectolitros
				</option>
				<option value="20" style="padding-left:10px;"> centimetros
				</option>
				<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes
				</option><option value="27" style="padding-left:10px;"> cm cubicos
				</option>
				<option value="29" style="padding-left:10px;"> toneladas
				</option>
				<option value="30" style="padding-left:10px;"> dam cubicos
				</option>
				<option value="31" style="padding-left:10px;"> hm cubicos
				</option>
				<option value="32" style="padding-left:10px;"> km cubicos
				</option>
				<option value="33" style="padding-left:10px;"> microgramos
				</option>
				<option value="34" style="padding-left:10px;"> nanogramos
				</option>
				<option value="35" style="padding-left:10px;"> picogramos
				</option>
				<option value="41" style="padding-left:10px;"> miligramos
				</option>
				<option value="47" style="padding-left:10px;"> mililitros
				</option>
				<option value="48" style="padding-left:10px;"> curie
				</option>
				
				<option v
				alue="49" style="padding-left:10px;"> milicurie
				</option>
				<option value="50" style="padding-left:10px;"> microcurie
				</option>
				<option value="51" style="padding-left:10px;"> uiacthor
				</option>
				<option value="52" style="padding-left:10px;"> muiacthor
				</option>
				<option value="53" style="padding-left:10px;"> kg base
				</option>
				<option value="54" style="padding-left:10px;"> gruesa
				</option>
				<option value="61" style="padding-left:10px;"> kg bruto
				</option>
				<option value="62" style="padding-left:10px;"> uiactant
				</option>
				<option value="63" style="padding-left:10px;"> muiactant
				</option>
				<option value="64" style="padding-left:10px;"> uiactig
				</option>
				<option value="65" style="padding-left:10px;"> muiactig
				</option>
				<option value="66" style="padding-left:10px;"> kg activo
				</option>
				<option value="67" style="padding-left:10px;"> gramo activo
				</option>
				<option value="68" style="padding-left:10px;"> gramo base
				</option>
				<option value="96" style="padding-left:10px;"> packs
				</option>
				<option value="98" style="padding-left:10px;"> otras unidades
				</option>
				</select></td>
				 --><td style="padding:0px 4px;">
				 
				<input type="text" name="detallePrecio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>

				<td style="padding:0px 4px;">
				<input type="text" name="detallePorcentajeBonificacion" maxlength="6" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>

				<td style="padding:0px 4px;">
				<input type="text" name="detalleImporteBonificacion" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">

				<input type="hidden" name="detalleTipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>

				<td style="padding:0px 4px;">
				<input type="text" name="detalleSubtotal1" id="detalle_subtotal11" readonly="readonly"></td>

				<td style="padding:0px 4px;">
				<select name="detalleTipoIVA" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
				 <option value="0" style="color:#888;">seleccionar...</option>
				 <option value="1">&nbsp;No gravado</option>
				 <option value="2">&nbsp;Exento</option>
				 <option value="3">&nbsp;0%</option>
				 <option value="9">&nbsp;2,5%</option>
				 <option value="8">&nbsp;5%</option>
				 <option value="4">&nbsp;10,5%</option>
				 <option value="5" selected="selected">&nbsp;21%</option>
				 <option value="6">&nbsp;27%</option>
				 </select></td>

				 <td style="padding:0px 4px;">
				 <input type="text" name="detalleImporteIVA" id="detalle_importe_iva1" readonly="readonly"></td>

				 <td style="padding:0px 4px;">
				<input type="text" name="detalleSubtotal2" id="detalle_subtotal21" readonly="readonly"></td>
				
					<td style="text-align:center; padding:0px;">
						<span style="width:100%; text-align:center;"> 
							<input type="button" name="Eliminar" value="X" style="width:31px; text-align:center; color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);">
						</span>
					</td>
				</tr>
				</tbody>
				</table>
					<div class="Agregar">
						<input type="button" value="Agregar linea descripcion" style="width:190px;" onclick= "insertarFilaDetalle();">
					</div>
				<br>
				
				<br>
				
			</div>
	</div>
		<div class="jig_fin_de_pagina">IE falla sin este comentario</div>
		<div class="jig_borde">
			<div class="jig_contenido" id="resumen_datos">
				<table style="width:100%;">
					<tbody><tr>
						<td>
							<table class="jig_formsmall" id="impuestos" style="padding:0;margin:0;text-align:left;">
								<tbody><tr>
									<th style="padding:0px;"></th>
									<td style="padding:0px;">Detalle</td>
									<td style="padding:0px;">Base<br>Imponible</td>
									<td style="padding:0px;text-align:center;">Alicuota<br>%</td>
									<td style="padding-left:12px;">Importe</td>
									<td style="padding:0px;"></td>
								</tr>
								<tr>
									<th style="padding-right:3px;height:23px;"><input type="hidden" name="impuestoCodigo" value="1"><input type="hidden" name="impuestoDescripcion" value="Per./Ret. de Impuesto a las Ganancias">Per./Ret. de Imp. a las Ganancias: </th>
									<td style="padding:0px;"><input type="text" name="impuestoDetalle" id="impganancia" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
									<td style="padding:0px;"><input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible1" onkeyup="calcularImporteFilaImpuestos(1);" onchange="calcularImporteFilaImpuestos(1);" style="width:70px;" maxlength="16"></td>
									<td style="padding:0px;"><input type="text" name="impuestoAlicuota" id="impuesto_alicuota1" onkeyup="calcularImporteFilaImpuestos(1);" onchange="calcularImporteFilaImpuestos(1);" style="width:45px;" maxlength="7"></td>
									<td style="padding:0px;" nowrap="nowrap"><span>$</span> <input type="text" name="impuestoMonto" id="impuesto_monto1" onchange="limpiarBIyAFilaImpuestos(1);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
									<td></td>
								</tr>
								<tr>
									<th style="padding-right:3px;height:23px;"><input type="hidden" name="impuestoCodigo" value="2"><input type="hidden" name="impuestoDescripcion" value="Per./Ret. de IVA">Per./Ret. de IVA: </th>
									<td style="padding:0px;"><input type="text" name="impuestoDetalle" id="periva" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
									<td style="padding:0px;"><input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible2" onkeyup="calcularImporteFilaImpuestos(2);" onchange="calcularImporteFilaImpuestos(2);" style="width:70px;" maxlength="16"></td>
									<td style="padding:0px;"><input type="text" name="impuestoAlicuota" id="impuesto_alicuota2" onkeyup="calcularImporteFilaImpuestos(2);" onchange="calcularImporteFilaImpuestos(2);" style="width:45px;" maxlength="7"></td>
									<td style="padding:0px;"><span>$</span> <input type="text" name="impuestoMonto" id="impuesto_monto2" onchange="limpiarBIyAFilaImpuestos(2);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
									<td></td>
								</tr>
								<tr>
									<th style="padding-right:3px;height:23px;" nowrap="nowrap"><input type="hidden" name="impuestoCodigo" value="3"><input type="hidden" name="impuestoDescripcion" value="Per./Ret. Ingresos Brutos">Per./Ret. Ingresos Brutos: </th>
									<td style="padding:0px;"><input type="text" name="impuestoDetalle" id="ingbrutos" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
									<td style="padding:0px;"><input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible3" onkeyup="calcularImporteFilaImpuestos(3);" onchange="calcularImporteFilaImpuestos(3);" style="width:70px;" maxlength="16"></td>
									<td style="padding:0px;"><input type="text" name="impuestoAlicuota" id="impuesto_alicuota3" onkeyup="calcularImporteFilaImpuestos(3);" onchange="calcularImporteFilaImpuestos(3);" style="width:45px;" maxlength="7"></td>
									<td style="padding:0px;"><span>$</span> <input type="text" name="impuestoMonto" id="impuesto_monto3" onchange="limpiarBIyAFilaImpuestos(3);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
									<td></td>
								</tr>
								<tr>
									<th style="padding-right:3px;height:23px;"><input type="hidden" name="impuestoCodigo" value="4"><input type="hidden" name="impuestoDescripcion" value="Impuestos Internos">Impuestos Internos: </th>
									<td style="padding:0px;"><input type="text" name="impuestoDetalle" id="impinternos" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
									<td style="padding:0px;"><input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible4" onkeyup="calcularImporteFilaImpuestos(4);" onchange="calcularImporteFilaImpuestos(4);" style="width:70px;" maxlength="16"></td>
									<td style="padding:0px;"><input type="text" name="impuestoAlicuota" id="impuesto_alicuota4" onkeyup="calcularImporteFilaImpuestos(4);" onchange="calcularImporteFilaImpuestos(4);" style="width:45px;" maxlength="7"></td>
									<td style="padding:0px;"><span>$</span> <input type="text" name="impuestoMonto" id="impuesto_monto4" onchange="limpiarBIyAFilaImpuestos(4);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
									<td></td>
								</tr>
								<tr>
									<th style="padding-right:3px;height:23px;"><input type="hidden" name="impuestoCodigo" value="5"><input type="hidden" name="impuestoDescripcion" value="Impuestos Municipales">Impuestos Municipales: </th>
									<td style="padding:0px;"><input type="text" name="impuestoDetalle" id="impmunicipales" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
									<td style="padding:0px;"><input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible5" onkeyup="calcularImporteFilaImpuestos(5);" onchange="calcularImporteFilaImpuestos(5);" style="width:70px;" maxlength="16"></td>
									<td style="padding:0px;"><input type="text" name="impuestoAlicuota" id="impuesto_alicuota5" onkeyup="calcularImporteFilaImpuestos(5);" onchange="calcularImporteFilaImpuestos(5);" style="width:45px;" maxlength="7"></td>
									<td style="padding:0px;"><span>$</span> <input type="text" name="impuestoMonto" id="impuesto_monto5" onchange="limpiarBIyAFilaImpuestos(5);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
									<td></td>
								</tr>
								<tr>
									<td colspan="6"><span style="font-size:10px;font-weight:bold;display:none;padding:0px;" id="labelotrosimpuestos">Otros:</span></td>
								</tr>
								<tr>
									<th colspan="4" style="padding:0px;"><b>Importe Otros Tributos:</b></th>
									<td nowrap="nowrap" style="padding:0px;"><span>$</span> <input type="text" name="impTotalImpuestos1" id="imptotalimpuestos1" class="jig_readonly" readonly="readonly" style="width:70px;font-weight:bold;text-align:right;">
								</td></tr>
								<tr>
									<td colspan="2"></td>
									<td colspan="3" align="center"><br><input type="button" value="Agregar otro Tributo" name="agregarImp" onclick="document.getElementById('labelotrosimpuestos').style.display = 'inline';insertarFilaImpuesto();" style="text-align:center;width:190px;"></td>
									<td></td>
								</tr>
								
							</tbody></table>
						</td>
						<td style="vertical-align:top;height:100%;">
							<table class="jig_formsmall" style="height:100%;margin-left:auto;">
								<tbody><tr>
									<td style="vertical-align:top;">
										<table class="jig_formsmall" id="importes">
										
											<tbody><tr>
												<th colspan="2" style="padding:0;margin:0;">Importe Neto no Gravado: </th><td nowrap="nowrap"><span>$</span> <input type="text" name="impNetoNoGravado" id="impnetonogravado" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											<tr>
												<th colspan="2">Importe Exento: </th><td><span>$</span> <input type="text" name="impExento" id="impexento" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											<tr>
												<th colspan="2">Importe Neto Gravado: </th><td><span>$</span> <input type="text" name="impNetoGravado" id="impnetogravado" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											<tr>
												<th colspan="2">IVA 27%: </th><td><span>$</span> <input type="text" name="impIVA27" id="impiva27" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											<tr>
												<th colspan="2">IVA 21%: </th><td><span>$</span> <input type="text" name="impIVA21" id="impiva21" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											<tr>
												<th colspan="2">IVA 10,5%: </th><td><span>$</span> <input type="text" name="impIVA105" id="impiva105" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											
											<tr>
												<th colspan="2">IVA 5%: </th><td><span>$</span> <input type="text" name="impIVA5" id="impiva5" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											
											<tr>
												<th colspan="2">IVA 2,5%: </th><td><span>$</span> <input type="text" name="impIVA2" id="impiva2" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;"></td>
											</tr>
											
											<tr>
												<th colspan="2">IVA 0%: </th><td><span>$</span> <input type="text" name="impIVA0" id="impiva0" class="jig_readonly" readonly="readonly" style="width:80px;text-align:right;" value="0.00"></td>
											</tr>
											<tr>
												<th colspan="2">Crédito IVA por bonificaciones: </th><td><span>$</span> <input type="text" name="creditoIVA" id="creditoiva" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
											</tr>
										</tbody></table>
									</td>
								</tr>
								<tr>
									<td>
										<table class="jig_formsmall" style="float:right;">
											<tbody><tr>
												<th><b>Importe Otros Tributos: </b></th><td nowrap="nowrap"><span>$</span> <input type="text" name="impTotalImpuestos2" id="imptotalimpuestos2" class="jig_readonly" readonly="readonly" style="width:80px;font-weight:bold;text-align:right;"></td>
											</tr>
										</tbody></table>
									</td>
								</tr>
								<tr>
									<td>
										<table class="jig_formsmall" style="float:right;">
											<tbody><tr>
												<th><b>Importe Total: </b></th><td nowrap="nowrap"><span>$</span> <input type="text" name="impTotal" id="imptotal" class="jig_readonly" readonly="readonly" style="width:80px;font-weight:bold;text-align:right;"></td>
											</tr>
											
										</tbody></table>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>
			</div>
		</div>
		<div class="jig_fin_de_pagina">IE falla sin este comentario</div>
		
		
		<div class="jig_borde">
			<div class="jig_contenido" id="otros_datos">
				<table class="jig_formsmall" style="margin-left:auto;margin-right:auto;">
					<tbody><tr>
						<td style="text-align:right;">Precisión Campo Cantidad</td><td>
							<select style="width:90px;" name="numDecimalesCantidad" id="numdecimalescantidad">
								<option value="2">&nbsp;2 decimales</option>
								<option value="4">&nbsp;4 decimales</option>
								<option value="6">&nbsp;6 decimales</option>
							</select>
						</td>
						<td style="text-align:right;">Campo Precio Unitario</td><td>
							<select style="width:90px;" name="numDecimalesPrecioUnit" id="numdecimalespreciounit">
								<option value="2">&nbsp;2 decimales</option>
								<option value="4">&nbsp;4 decimales</option>
								<option value="6">&nbsp;6 decimales</option>
							</select>
						</td>
						<td style="width:100px;">&nbsp;</td>
					</tr>
				</tbody></table>
			</div>
		</div>
		<div class="jig_fin_de_pagina">
		IE falla sin este comentario
		</div>
		 
		<br>
		<br>
		
		<br>
		<br>
		<!-- <h2 class="cantCajas">
		<input type="text" name="Cantidad de cajas" maxlength="11px"></h2> -->
		<br>
		<br>
		<br>
		<div class="botones" align="center">
		<input type="button" value="< Volver" onclick="parent.history.back();">&nbsp;<input type="button" value="IMPRIMIR >" onclick="document.print();">
		</div>
		
		<!-- <h6 class="cai" align="right" style="">
		C.A.I.: 43380115270646 <br>
		Vto.: 21/09/2018</h6> -->
	</form>
</div>
<div class="botonStock" align="center">
	<table style="margin-left:auto; margin-right:auto;">
		<tbody>
			<tr>
				<td>
					<div class="jig_separador_botones">
						<!-- IE falla sin este comentario -->
						
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="Stock" onclick="parent.location.href='stock.php'">
				</td>
			</tr>
		</tbody>
	</table>
</div>
<br>
<!-- <script src="operaciones.js"></script> -->
<script type="text/javascript">

function insertarFilaDetalle()
{
	if (numFilasDetalles >= 100)
	{
		alert("Por favor ingrese no más de 100 líneas de detalle.");
		return;
	}
	indiceDetalles[numFilasDetallesMax] = numFilasDetalles+1;
	var tbl = document.getElementById('idoperacion');
	var lastRow = tbl.rows.length;
	var r = tbl.insertRow(lastRow);
	var c = new Array();

	for (var i = 0; i < 12; i++)
	{
		c[i] = r.insertCell(i);
		c[i].setAttribute("style","padding:0px 4px;");
	}
	
	numFilasDetalles++;
	numFilasDetallesMax++;

	c[0].innerHTML = "<input type='text' name='detalleCantidad' maxlength='19' id='detalle_cantidad"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' value='1' />";
	
	c[1].innerHTML = "<input type='text' name='detalleCodigoArticulo' maxlength='10' /><input type='hidden' name='detalleNroLinea' />";
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' />";
	/*if (navigator.userAgent.indexOf("MSIE")>=0)
		c[1].innerHTML = "<textarea name='detalleDescripcion' maxlength='30' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;overflow:visible;' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>";
	else*/
	
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' maxlength='200' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);' />";
	
	c[2].innerHTML = "<textarea name='detalleDescripcion' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:300px;overflow:auto;"+(navigator.userAgent.indexOf("Firefox")?"height:19px;":"")+"' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyPress='return limitarLongitudTextArea(event,this,4000);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>"; // Si, Firefox tiene un bug horrible: no puede hacer textareas con una sola fila, por eso tengo que simularla con el height:19px;
	
	/*c[2].innerHTML = "<input type='text' name='detalleCantidad' maxlength='19' id='detalle_cantidad"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' value='1' />";
	*/
	c[3].innerHTML = "<select type='text' name='detalleMedida' id='detalle_medida"+numFilasDetallesMax+"' style='width:95px;'><option value='7' style='color:#888;'>seleccionar...</option>"+htmlUnidadesMedida+"</select>";
	
	c[4].innerHTML = "<input type='text' name='detallePrecio' maxlength='19' id='detalle_precio"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' />"; //TODO: agregar autocomplete='off' para que los navegadores no guarden el historial de datos numéricos, sólo permitirlo en código y descripción. Por ahora lo dejo para que funcione el history.back() ya que con autocomplete='off' borra el valor al volver a la página
	c[5].innerHTML = "<input type='text' name='detallePorcentajeBonificacion' maxlength='6' id='detalle_porcentaje"+numFilasDetallesMax+"' value='0' onchange='calcularImporteBonificacionDetalle("+numFilasDetallesMax+");' size='3' maxlength='6' />";//TODO: agregar autocomplete='off'
	c[6].innerHTML = "<input type='text' name='detalleImporteBonificacion' maxlength='14' id='detalle_importe_bonificacion"+numFilasDetallesMax+"' onchange='calcularPorcentajeBonificacionDetalle("+numFilasDetallesMax+");' /><input type='hidden' name='detalleTipoBonificacion' id='detalle_tipo_bonificacion"+numFilasDetallesMax+"' value='porcentaje' />";
		//TODO: agregar autocomplete='off'
	c[7].innerHTML = "<input type='text' name='detalleSubtotal1' id='detalle_subtotal1"+numFilasDetallesMax+"' readonly='readonly' />";

	c[8].innerHTML = "<select name='detalleTipoIVA' id='detalle_tipo_iva"+numFilasDetallesMax+"' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' style='width:70px;'> <option value='0' style='color:#888;'>seleccionar...</option><option value='1'>&nbsp;No gravado</option><option value='2'>&nbsp;Exento</option><option value='3'>&nbsp;0%</option><option value='9'>&nbsp;2,5%</option><option value='8'>&nbsp;5%</option><option value='4'>&nbsp;10,5%</option><option value='5' selected='selected'>&nbsp;21%</option><option value='6'>&nbsp;27%</option></select>";
	c[9].innerHTML = "<input type='text' name='detalleImporteIVA' id='detalle_importe_iva"+numFilasDetallesMax+"' readonly='readonly' />";
	c[10].innerHTML = "<input type='text' name='detalleSubtotal2' id='detalle_subtotal2"+numFilasDetallesMax+"' readonly='readonly' />";
	
	c[4].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaDetalle("+numFilasDetallesMax+");' /></span>";
	c[5].setAttribute("style","text-align:center;padding:0px;");

	
}

</script>
<script>



function borrarFilaDetalle(rowNum)
{
	if (!estadoBorrandoDetalle)
	{
		estadoBorrandoDetalle = true;
		var fila = document.getElementById('idoperacion').rows[indiceDetalles[rowNum-1]];

		for (i=0;i<10;i++)
			fila.cells[i].firstChild.style.border = "none";
			fila.cells[3].firstChild.style.display = "none";
			fila.cells[8].firstChild.style.display = "none";
			fila.cells[11].firstChild.style.display = "none";

		/*borrarFilaDetalle();*/
	}

	/*borrarFilaDetalle();*/
}

</script>

<!-- Contenido (fin) -->

		</div>
		
		
<footer>
		<div id="pie" align="center" style="width: 90%;">
			<table>
				<tbody><tr><td><b>EDILU S.R.L. Emilio Lamarca 4961, Capital Federal</b></td><td style="text-align:right;">Autenticado por: <b>R&B Design Web &copy; 2017 <br>
				www.rbcreacionesweb.com</b></td></tr>
			</tbody></table>
		</div>
</footer>	


</body>
</html>