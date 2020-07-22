<?php include '../cn.php';	 ?>

<!DOCTYPE html>
<html lang="es">
	<head>
	
		<meta charset="utf-8">
		
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<title>Factura 4</title>
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
		<style type="text/css">@import url(../scripts/calendar/calendar-blue2.css);</style>
		<script type="text/javascript" src="../scripts/calendar/calendar.js"></script>
		<script type="text/javascript" src="../scripts/calendar/calendar-es.js"></script>
		<script type="text/javascript" src="../scripts/calendar/calendar-setup.js"></script>

		<script type="text/javascript" src="js/logout.js"></script>
		<script type="text/javascript" src="../js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" src="../js/jquery-migrate-1.3.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.11.4.min.js"></script>
		<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
		<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
		<script type="text/javascript" src="../js/jquery.notice.js"></script>
		<script type="text/javascript" src="../js/jquery.cookie.js"></script>
		<script type="text/javascript" src="../js/jquery.validationEngine.js" charset="utf-8"></script>
		<script type="text/javascript" src="../js/jquery.validationEngine-es-jig.js" charset="utf-8"></script>
		<script type="text/javascript" src="../js/jquery.form.js"></script>
		<script type="text/javascript" src="../scripts/gen_com_datos_operacion.js?v=20160601"></script>

		<script type="text/javascript" src="../scripts/gen_com_datos_operacion_am.js?v=20160601"></script>
		<script type="text/javascript" src="../scripts/keep_alive.js?v=20160311"></script>

		<!-- Head específico (inicio) -->

		<!-- estiloFact.css -->
		<link rel="stylesheet" href="estiloFact.css">
		<link rel="stylesheet" href="botones.css">

		<!-- Head específico (fin) -->
<style>
	body{
		background-color: #90CAF9;
	}
</style>


	</head>
	<body>
		<div id="encabezado" style="background-position:560px -5px;background-repeat:no-repeat;">
			<div id="encabezado_logo_afip" align="center">
				<img src="../img/Edilu1.png">
			</div>
			<!-- Boton de Salir vamos al index -->
			<div id="encabezado_salir" align="right"><a href="index.html" onclick="salirAplicacion('/rcel');" class="button blue"><span class="icon-house"></span>Salir</a></div>
			
			<table id="encabezado_usuario_container" align="center">
				<tbody>
					<tr>
						<td>
							<table id="encabezado_usuario">
							<tbody>
							<tr>
							<b>EDILU SRL - 30-70866219-0 </b>
						</td>
							</tr>
								
							</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			
		</div>
		<div id="contenido">
<!-- Contenido (inicio) -->

<style type="text/css" media="all">
#advertencia_impresion {
	display:none;
}
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

<br>
<br>
<br>
<div align="center">
<div class="jig_titulo_con_subtitulo"><b>EDILU S.R.L. - GENERACIÓN DE 
								COMPROBANTES - FACTURA A</div>
<div class="jig_subtitulo">DATOS DE LA OPERACIÓN (PASO 4 DE 5)</b></div>
<div class="jig_paso_proceso"></div>
<div id="advertencia_impresion"><!-- <p><b>Por favor confirme los datos para generar una impresión, no imprima esta página.</b></p> --></div>
<br>
<form name="datosOperacionForm" action="genComResumenDatos.php" method="post" style="margin-top:0px;">

</div>	
	<div class="jig_borde">
		<div class="jig_contenido" id="detalles_datos">
			
			<table class="jig_formvertical" id="idoperacion">
				<tbody>
				<tr>
					<th>Código</th>
					<th>Descripcion</th>
					<th>Cant.</th>
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
			<tr>
				<td style="padding:0px 4px;">
				<input type="text" name="codigo" maxlength="12" size="12">
				<input type="hidden" name="detalleNroLinea"></td>

				<td style="padding:0px 4px;">
				<textarea name="descripcion" id="detalle_descripcion1" style="width:200px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>

				<td style="padding:0px 2px;">
				<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1" size="10"></td>

				 <td style="padding:0px 4px;">

				<select type="text" name="medida" id="detalle_medida1" style="width:95px;">
				<option value="7" style="color:#888;"> unidades</option>
				<option value="1" style="padding-left:10px;"> kilogramos</option>
				<option value="2" style="padding-left:10px;"> metros</option>
				<option value="3" style="padding-left:10px;"> metros cuadrados</option>
				<option value="4" style="padding-left:10px;"> metros cúbicos</option>
				<option value="5" style="padding-left:10px;"> litros</option>
				<option value="6" style="padding-left:10px;"> 1000 kWh</option>
				<option value="7" style="padding-left:10px;"> unidades</option>
				<option value="8" style="padding-left:10px;"> pares</option>
				<option value="9" style="padding-left:10px;"> docenas</option>
				<option value="10" style="padding-left:10px;"> quilates</option>
				<option value="11" style="padding-left:10px;"> millares</option>
				<option value="14" style="padding-left:10px;"> gramos</option>
				<option value="15" style="padding-left:10px;"> milimetros</option>
				<option value="16" style="padding-left:10px;"> mm cúbicos</option>
				<option value="17" style="padding-left:10px;"> kilómetros</option>
				<option value="18" style="padding-left:10px;"> hectolitros</option>
				<option value="20" style="padding-left:10px;"> centímetros</option>
				<option value="25" style="padding-left:10px;"> jgo. pqt. mazo naipes</option>
				<option value="27" style="padding-left:10px;"> cm cúbicos</option>
				<option value="29" style="padding-left:10px;"> toneladas</option>
				<option value="30" style="padding-left:10px;"> dam cúbicos</option>
				<option value="31" style="padding-left:10px;"> hm cúbicos</option>
				<option value="32" style="padding-left:10px;"> km cúbicos</option>
				<option value="33" style="padding-left:10px;"> microgramos</option>
				<option value="34" style="padding-left:10px;"> nanogramos</option>
				<option value="35" style="padding-left:10px;"> picogramos</option>
				<option value="41" style="padding-left:10px;"> miligramos</option>
				<option value="47" style="padding-left:10px;"> mililitros</option>
				<option value="48" style="padding-left:10px;"> curie</option>
				<option value="49" style="padding-left:10px;"> milicurie</option>
				<option value="50" style="padding-left:10px;"> microcurie</option>
				<option value="51" style="padding-left:10px;"> uiacthor</option>
				<option value="52" style="padding-left:10px;"> muiacthor</option>
				<option value="53" style="padding-left:10px;"> kg base</option>
				<option value="54" style="padding-left:10px;"> gruesa</option>
				<option value="61" style="padding-left:10px;"> kg bruto</option>
				<option value="62" style="padding-left:10px;"> uiactant</option>
				<option value="63" style="padding-left:10px;"> muiactant</option>
				<option value="64" style="padding-left:10px;"> uiactig</option>
				<option value="65" style="padding-left:10px;"> muiactig</option>
				<option value="66" style="padding-left:10px;"> kg activo</option>
				<option value="67" style="padding-left:10px;"> gramo activo</option>
				<option value="68" style="padding-left:10px;"> gramo base</option>
				<option value="96" style="padding-left:10px;"> packs</option>
				<option value="98" style="padding-left:10px;"> otras unidades</option>
				</select>
				</td>
				<td style="padding:0px 4px;">
				<input type="text" name="precio" maxlength="19" id="detalle_precio1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);"></td>
				<td style="padding:0px 4px;">

				<input type="text" name="bon" maxlength="4" id="detalle_porcentaje1" value="0" onchange="calcularImporteBonificacionDetalle(1);" size="3"></td>

				<td style="padding:0px 4px;">
				<input type="text" name="impobon" maxlength="14" id="detalle_importe_bonificacion1" onchange="calcularPorcentajeBonificacionDetalle(1);">
				<input type="hidden" name="TipoBonificacion" id="detalle_tipo_bonificacion1" value="porcentaje"></td>

				<td style="padding:0px 4px;">
				<input type="text" name="subtotal1" id="detalle_subtotal11" readonly="readonly"></td>

				<td style="padding:0px 4px;">
				<select name="iva" id="detalle_tipo_iva1" onchange="calcularSubtotalDetalle(1);" style="width:70px;">
					 <option value="0" style="color:#888;">seleccionar...</option>
					 <!-- <option value="1">&nbsp;No gravado</option> -->
					 <option value="2">&nbsp;Exento</option>
					 <!-- <option value="3">&nbsp;0%</option>
					 <option value="9">&nbsp;2,5%</option>
					 <option value="8">&nbsp;5%</option>
					 <option value="4">&nbsp;10,5%</option> -->
					 <option value="5" selected="selected">&nbsp;21%</option>
					 <!-- <option value="6">&nbsp;27%</option> -->
				 </select></td>
				 <td style="padding:0px 4px;">
				 <input type="text" name="importeIva" id="detalle_importe_iva1" readonly="readonly"></td>

				 <td style="padding:0px 4px;">
				 <input type="text" name="subtotal2" id="detalle_subtotal21" readonly="readonly"></td>

				 <!--            BOTON ELIMINAR       -->
				 <td style="text-align:center;padding:0px;">
				 <span style="width:100%;text-align:center;">
                 <input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td>
			</tr>
			</tbody>
			</table>
<br>
			<div align="center">
				<input type="button" value="Agregar línea descripción" style="width:190px; text-align: center;" onclick="insertarFilaDetalle();">
				
				<br>
				
				<br>
			</div>
		</div>
	</div>
	<div class="jig_fin_de_pagina"><!-- IE falla sin este comentario --></div>
	<div class="jig_borde">
	<div class="jig_contenido" id="resumen_datos">
			<table style="width:100%;">
				<tbody>
				<tr>
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
								<th style="padding-right:3px;height:23px;">
								<input type="hidden" name="impuestoCodigo" value="1">
								<input type="hidden" name="impuestoDescripcion" value="Per./Ret. de Impuesto a las Ganancias">Per./Ret. de Imp. a las Ganancias: </th>
								<td style="padding:0px;">
								<input type="text" name="impuestoDetalle" id="impganancia" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible1" onkeyup="calcularImporteFilaImpuestos(1);" onchange="calcularImporteFilaImpuestos(1);" style="width:70px;" maxlength="16"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoAlicuota" id="impuesto_alicuota1" onkeyup="calcularImporteFilaImpuestos(1);" onchange="calcularImporteFilaImpuestos(1);" style="width:45px;" maxlength="7"></td>
								<td style="padding:0px;" nowrap="nowrap"><span>$</span>
								 <input type="text" name="impuestoMonto" id="impuesto_monto1" onchange="limpiarBIyAFilaImpuestos(1);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
								<td></td>
							</tr>
							<tr>
								<th style="padding-right:3px;height:23px;"><input type="hidden" name="impuestoCodigo" value="2">
								<input type="hidden" name="impuestoDescripcion" value="Per./Ret. de IVA">Per./Ret. de IVA: </th>
								<td style="padding:0px;">
								<input type="text" name="impuestoDetalle" id="periva" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible2" onkeyup="calcularImporteFilaImpuestos(2);" onchange="calcularImporteFilaImpuestos(2);" style="width:70px;" maxlength="16"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoAlicuota" id="impuesto_alicuota2" onkeyup="calcularImporteFilaImpuestos(2);" onchange="calcularImporteFilaImpuestos(2);" style="width:45px;" maxlength="7"></td>
								<td style="padding:0px;"><span>$</span>
								 <input type="text" name="impuestoMonto" id="impuesto_monto2" onchange="limpiarBIyAFilaImpuestos(2);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
								<td></td>
							</tr>
							<tr>
								<th style="padding-right:3px;height:23px;" nowrap="nowrap">
								<input type="hidden" name="impuestoCodigo" value="3">
								<input type="hidden" name="impuestoDescripcion" value="Per./Ret. Ingresos Brutos">Per./Ret. Ingresos Brutos: </th>
								<td style="padding:0px;">
								<input type="text" name="impuestoDetalle" id="ingbrutos" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible3" onkeyup="calcularImporteFilaImpuestos(3);" onchange="calcularImporteFilaImpuestos(3);" style="width:70px;" maxlength="16"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoAlicuota" id="impuesto_alicuota3" onkeyup="calcularImporteFilaImpuestos(3);" onchange="calcularImporteFilaImpuestos(3);" style="width:45px;" maxlength="7"></td>
								<td style="padding:0px;"><span>$</span>
								 <input type="text" name="impuestoMonto" id="impuesto_monto3" onchange="limpiarBIyAFilaImpuestos(3);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
								<td></td>
							</tr>
							<tr>
								<th style="padding-right:3px;height:23px;">
								<input type="hidden" name="impuestoCodigo" value="4">
								<input type="hidden" name="impuestoDescripcion" value="Impuestos Internos">Impuestos Internos: </th>
								<td style="padding:0px;">
								<input type="text" name="impuestoDetalle" id="impinternos" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible4" onkeyup="calcularImporteFilaImpuestos(4);" onchange="calcularImporteFilaImpuestos(4);" style="width:70px;" maxlength="16"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoAlicuota" id="impuesto_alicuota4" onkeyup="calcularImporteFilaImpuestos(4);" onchange="calcularImporteFilaImpuestos(4);" style="width:45px;" maxlength="7"></td>
								<td style="padding:0px;"><span>$</span>
								 <input type="text" name="impuestoMonto" id="impuesto_monto4" onchange="limpiarBIyAFilaImpuestos(4);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
								<td></td>
							</tr>
							<tr>
								<th style="padding-right:3px;height:23px;">
								<input type="hidden" name="impuestoCodigo" value="5">
								<input type="hidden" name="impuestoDescripcion" value="Impuestos Municipales">Impuestos Municipales: </th>
								<td style="padding:0px;">
								<input type="text" name="impuestoDetalle" id="impmunicipales" onkeyup="calcularTotalImpuestos();" style="width:100px;" maxlength="25"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoBaseImponible" id="impuesto_baseimponible5" onkeyup="calcularImporteFilaImpuestos(5);" onchange="calcularImporteFilaImpuestos(5);" style="width:70px;" maxlength="16"></td>
								<td style="padding:0px;">
								<input type="text" name="impuestoAlicuota" id="impuesto_alicuota5" onkeyup="calcularImporteFilaImpuestos(5);" onchange="calcularImporteFilaImpuestos(5);" style="width:45px;" maxlength="7"></td>
								<td style="padding:0px;"><span>$</span>
								 <input type="text" name="impuestoMonto" id="impuesto_monto5" onchange="limpiarBIyAFilaImpuestos(5);" onkeyup="calcularTotalImpuestos();" style="width:70px;"></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"><span style="font-size:10px;font-weight:bold;display:none;padding:0px;" id="labelotrosimpuestos">Otros:</span></td>
							</tr>
							<tr>
								<th colspan="4" style="padding:0px;"><b>Importe Otros Tributos:</b></th>
								<td nowrap="nowrap" style="padding:0px;"><span>$</span>
								 <input type="text" name="impTotalImpuestos1" id="imptotalimpuestos1" class="jig_readonly" readonly="readonly" style="width:70px;font-weight:bold;text-align:right;">
							</td></tr>
							<tr>
								<td colspan="2"></td>
								<td colspan="3" align="center"><br>
								<input type="button" value="Agregar otro Tributo" name="agregarImp" onclick="document.getElementById('labelotrosimpuestos').style.display = 'inline';insertarFilaImpuesto();" style="text-align:center;width:190px;"></td>
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
											<th><b>Importe Otros Tributos: </b></th><td nowrap="nowrap"><span>$</span>
											 <input type="text" name="impTotalImpuestos2" id="imptotalimpuestos2" class="jig_readonly" readonly="readonly" style="width:80px;font-weight:bold;text-align:right;"></td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="jig_formsmall" style="float:right;">
										<tbody><tr>
											<th><b>Importe Total: </b></th><td nowrap="nowrap"><span>$</span>
											 <input type="text" name="total" id="imptotal" class="jig_readonly" onchange="calcularTotal();" readonly="readonly" style="width:80px;font-weight:bold;text-align:right;"> <!-- calcularTotal(); -->
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
	</div>
	<div class="jig_fin_de_pagina"><!-- IE falla sin este comentario --></div>
	
	
	<div class="jig_borde">
		<div class="jig_contenido" id="otros_datos">
			<table class="jig_formsmall" style="margin-left:auto;margin-right:auto;">
				<tbody><tr>
					<td style="text-align:right;">Precisión Campo Cantidad</td><td>
						<select style="width:90px;" name="numDecimalesCantidad" id="numdecimalescantidad">
							<option value="2">&nbsp;2 decimales</option>
							<option value="4">&nbsp;4 decimales</option>
							<!-- <option value="6">&nbsp;6 decimales</option> -->
						</select>
					</td>
					<td style="text-align:right;">Campo Precio Unitario</td><td>
						<select style="width:90px;" name="numDecimalesPrecioUnit" id="numdecimalespreciounit">
							<option value="2">&nbsp;2 decimales</option>
							<option value="4">&nbsp;4 decimales</option>
							<!-- <option value="6">&nbsp;6 decimales</option> -->
						</select>
					</td>
					<td style="width:100px;">&nbsp;</td>
				</tr>
			</tbody></table>
		</div>
	</div>
	<div class="jig_fin_de_pagina"><!-- IE falla sin este comentario --></div>
	
	<br>
	<div align="center">
		<input type="button" value="< Volver" onclick="parent.history.back();">&nbsp;<input type="button" value="Continuar >" onclick="validarCampos();">
		<br><br>
	</div>
</form>
<table style="margin-left:auto;margin-right:auto;">
	<tbody><tr><td><div class="jig_separador_botones"><!-- IE falla sin este comentario --></div></td></tr>

	<tr><td>
		<input type="button" value="Menú Principal" onclick="parent.location.href='../inicio.php'"></td></tr>
</tbody></table>
<br>

<script>
	numFilasImpuestos = 6;
numFilasImpuestosMax = 6;

function ajustarAnchoFocus(campo)
{
	campo.style.width=(campo.value.length>36)?"280px":(campo.value.length>26)?"240px":"200px";
	// Con style="overflow:visible;" IE cambia el tamaño de forma automática, por lo que esto no es necesario - corrección, obviamente tiene un bug y me arruina el ancho!
	//if (!(navigator.userAgent.indexOf("MSIE")>=0))
	{
		if ((campo.value.length>36) || (campo.value.indexOf("\n")>=0))
			ajustarFilas(campo,Math.min(estimarNumLineas(campo.value,40),5));
		else
			ajustarFilas(campo,1);
	}
}

function ajustarAnchoBlur(campo)
{
	campo.style.width=(campo.value.length>46)?"340px":(campo.value.length>36)?"280px":(campo.value.length>26)?"220px":(campo.value.length>16)?"180px":"120px";
}

function insertarFilaDetalle()
{
	if (numFilasDetalles >= 20)
	{
		alert("Por favor ingrese no más de 20 líneas de detalle.");
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
	
	c[0].innerHTML = "<input type='text' name='codigo' maxlength='19' size='12' /><input type='hidden' name='detalleNroLinea' />";
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' />";
	/*if (navigator.userAgent.indexOf("MSIE")>=0)
		c[1].innerHTML = "<textarea name='detalleDescripcion' maxlength='30' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;overflow:visible;' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>";
	else*/
	
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' maxlength='200' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);' />";
	
	c[1].innerHTML = "<textarea name='descripcion' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:200px;overflow:auto;"+(navigator.userAgent.indexOf("Firefox")?"height:19px;":"")+"' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyPress='return limitarLongitudTextArea(event,this,4000);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>"; // Si, Firefox tiene un bug horrible: no puede hacer textareas con una sola fila, por eso tengo que simularla con el height:19px;
	
	c[2].innerHTML = "<input type='text' name='cantidad' maxlength='9' id='detalle_cantidad"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' value='1' size='10' />";

	c[3].innerHTML = "<select type='text' name='medida' id='detalle_medida"+numFilasDetallesMax+"' style='width:95px;'><option value='7' style='color:#888;'>Unidades</option>"+htmlUnidadesMedida+"</select>";
	c[4].innerHTML = "<input type='text' name='precio' maxlength='19' id='detalle_precio"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' />"; 
	//TODO: agregar autocomplete='off' para que los navegadores no guarden el historial de datos numéricos, sólo permitirlo en código y descripción. Por ahora lo dejo para que funcione el history.back() ya que con autocomplete='off' borra el valor al volver a la página
	c[5].innerHTML = "<input type='text' name='detallePorcentajeBonificacion' maxlength='6' id='detalle_porcentaje"+numFilasDetallesMax+"' value='0' onchange='calcularImporteBonificacionDetalle("+numFilasDetallesMax+");' size='3' maxlength='6' />";//TODO: agregar autocomplete='off'
	c[6].innerHTML = "<input type='text' name='detalleImporteBonificacion' maxlength='14' id='detalle_importe_bonificacion"+numFilasDetallesMax+"' onchange='calcularPorcentajeBonificacionDetalle("+numFilasDetallesMax+");' /><input type='hidden' name='detalleTipoBonificacion' id='detalle_tipo_bonificacion"+numFilasDetallesMax+"' value='porcentaje' />";//TODO: agregar autocomplete='off'
	c[7].innerHTML = "<input type='text' name='detalleSubtotal1' id='detalle_subtotal1"+numFilasDetallesMax+"' readonly='readonly' />";
	c[8].innerHTML = "<select name='detalleTipoIVA' id='detalle_tipo_iva"+numFilasDetallesMax+"' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' style='width:70px;'> <option value='0' style='color:#888;'>seleccionar...</option><option value='1'>&nbsp;No gravado</option><option value='2'>&nbsp;Exento</option><option value='3'>&nbsp;0%</option><option value='9'>&nbsp;2,5%</option><option value='8'>&nbsp;5%</option><option value='4'>&nbsp;10,5%</option><option value='5' selected='selected'>&nbsp;21%</option><option value='6'>&nbsp;27%</option></select>";
	c[9].innerHTML = "<input type='text' name='detalleImporteIVA' id='detalle_importe_iva"+numFilasDetallesMax+"' readonly='readonly' />";
	c[10].innerHTML = "<input type='text' name='detalleSubtotal2' id='detalle_subtotal2"+numFilasDetallesMax+"' readonly='readonly' />";
	c[11].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaDetalle("+numFilasDetallesMax+");' /></span>";
	c[12].setAttribute("style","text-align:center;padding:0px;");
}

function calcularImporteBonificacionDetalle(fila)
{
	var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
	var precio = document.getElementById('detalle_precio'+fila).value;
	document.getElementById('detalle_porcentaje'+fila).style.color = "#000000";
	document.getElementById('detalle_tipo_bonificacion'+fila).value = "porcentaje";

	if (cantidad.toFixed)
		document.getElementById('detalle_importe_bonificacion'+fila).value =
			(precio * cantidad * document.getElementById('detalle_porcentaje'+fila).value/100.0).toFixed(2);
	else
		document.getElementById('detalle_importe_bonificacion'+fila).value =
			precio * cantidad * document.getElementById('detalle_porcentaje'+fila).value/100.0;

	document.getElementById('detalle_importe_bonificacion'+fila).style.color = "#999999";
	calcularSubtotalDetalle(fila);
}

function calcularPorcentajeBonificacionDetalle(fila)
{
	var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
	var precio = document.getElementById('detalle_precio'+fila).value;
	document.getElementById('detalle_importe_bonificacion'+fila).style.color = "#000000";
	document.getElementById('detalle_tipo_bonificacion'+fila).value = "importe";
	var importeBon = document.getElementById('detalle_importe_bonificacion'+fila).value*100;

	if (cantidad.toFixed)
		document.getElementById('detalle_porcentaje'+fila).value = (importeBon / (precio * cantidad)).toFixed(2);
	else
		document.getElementById('detalle_porcentaje'+fila).value = importeBon / (precio * cantidad);

	document.getElementById('detalle_porcentaje'+fila).style.color = "#999999";
	calcularSubtotalDetalle(fila);
}

function calcularSubtotalDetalle(fila)
{
	if (cambioManualDetalle)
	{
		cambioManualDetalle = false;
		var cantidad = document.getElementById('detalle_cantidad'+fila).value*1;
		var precio = document.getElementById('detalle_precio'+fila).value*1;
		var subTotalNeto = precio * cantidad;
		
		var importeBon = document.getElementById('detalle_importe_bonificacion'+fila).value*1;
		var subtotal1 = subTotalNeto - importeBon;

		var tipoIVA = document.getElementById('detalle_tipo_iva'+fila).value;
		if (isNaN(tipoIVA)) tipoIVA = 0;

		var importeIVA = 0;
		if (tipoIVA == 4)
			importeIVA = subtotal1 * 0.105;
		else if (tipoIVA == 5)
			importeIVA = subtotal1 * 0.21;
		else if (tipoIVA == 6)
			importeIVA = subtotal1 * 0.27;
		else if (tipoIVA == 8)
			importeIVA = subtotal1 * 0.05;
		else if (tipoIVA == 9)
			importeIVA = subtotal1 * 0.025;
		
		if (subtotal1.toFixed) {
			document.getElementById('detalle_subtotal1'+fila).value = subtotal1.toFixed(2);
			document.getElementById('detalle_importe_iva'+fila).value = importeIVA.toFixed(2);
			document.getElementById('detalle_subtotal2'+fila).value = (subTotalNeto - importeBon + importeIVA).toFixed(2);
		} else {
			document.getElementById('detalle_subtotal1'+fila).value = subtotal1;
			document.getElementById('detalle_importe_iva'+fila).value = importeIVA;
			document.getElementById('detalle_subtotal2'+fila).value = subTotalNeto - importeBon + importeIVA;
		}

		calcularTotal();
		cambioManualDetalle = true;
	}
}

function calcularTotal()
{
	var tbl = document.getElementById('idoperacion');
	var numFilas = tbl.rows.length;
	var fila;
	var totalNetoNoGravado = 0;
	var totalExento = 0;
	var totalNetoGravado = 0;
	var totalIVA27 = 0;
	var totalIVA21 = 0;
	var totalIVA105 = 0;
	var totalIVA5 = 0;
	var totalIVA2 = 0;
	var totalImpuestos = document.getElementById('imptotalimpuestos2').value*1;
	var total = 0;
	var totalPesos = 0;
	for (var i = 1; i < numFilasDetalles+1; i++)
	{
		fila = tbl.rows[i];
		if (fila.cells[8].firstChild.value == "1")
			totalNetoNoGravado += fila.cells[7].firstChild.value*1;
		else if (fila.cells[8].firstChild.value == "2")
			totalExento += fila.cells[7].firstChild.value*1;
		else if (fila.cells[8].firstChild.value == "3")
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		else if (fila.cells[8].firstChild.value == "4") {
			totalIVA105 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "5") {
			totalIVA21 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "6") {
			totalIVA27 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "8") {
			totalIVA5 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		else if (fila.cells[8].firstChild.value == "9") {
			totalIVA2 += fila.cells[9].firstChild.value*1;
			totalNetoGravado += fila.cells[7].firstChild.value*1;
		}
		total += fila.cells[10].firstChild.value*1;
	}
	if (totalNetoNoGravado.toFixed) {
		document.getElementById("impnetonogravado").value = totalNetoNoGravado.toFixed(2);
		document.getElementById("impexento").value = totalExento.toFixed(2);
		document.getElementById("impnetogravado").value = totalNetoGravado.toFixed(2);
		//recalcularBonificacionForzado();
		document.getElementById("impiva27").value = totalIVA27.toFixed(2);
		document.getElementById("impiva21").value = totalIVA21.toFixed(2);
		document.getElementById("impiva105").value = totalIVA105.toFixed(2);
		document.getElementById("impiva5").value = totalIVA5.toFixed(2);
		document.getElementById("impiva2").value = totalIVA2.toFixed(2);
		//document.getElementById("creditoiva").value = ((totalIVA27+totalIVA21+totalIVA105)*document.getElementById('porcbonifglobal').value/100.0).toFixed(2);
		document.getElementById("imptotal").value = (total/*-valorImporteBonifGlobal*/+totalImpuestos).toFixed(2);
		if (simboloMoneda != "$")
		{
			totalPesos = (document.getElementById("imptotal").value*1)*tipoCambio;
			document.getElementById("imptotalpesos").value = totalPesos.toFixed(2);
		}
	}
	else {
		document.getElementById("impnetonogravado").value = totalNetoNoGravado;
		document.getElementById("impexento").value = totalExento;
		document.getElementById("impnetogravado").value = totalNetoGravado;
		document.getElementById("impiva27").value = totalIVA27;
		document.getElementById("impiva21").value = totalIVA21;
		document.getElementById("impiva105").value = totalIVA105;
		document.getElementById("impiva5").value = totalIVA5;
		document.getElementById("impiva2").value = totalIVA2;

		document.getElementById("imptotal").value = total/*-valorImporteBonifGlobal*/+totalImpuestos;
		if (simboloMoneda != "$")
		{
			totalPesos = (document.getElementById("imptotal").value*1)*tipoCambio;
			document.getElementById("imptotalpesos").value = totalPesos.toFixed(2);
		}
	}
}

function insertarFilaImpuesto()
{
	if (numFilasImpuestos >= 9)
	{
		alert("Por favor ingrese no más de 3 tributos adicionales.");
		return;
	}
	indiceImpuestos[numFilasImpuestosMax] = numFilasImpuestos+1;
	var tbl = document.getElementById("impuestos");
	var lastRow = tbl.rows.length;
	var r = tbl.insertRow(lastRow-((simboloMoneda == "$")?2:3));
	var c = new Array();

	for (var i = 0; i < 6; i++)
		c[i] = r.insertCell(i);

	numFilasImpuestos++;
	numFilasImpuestosMax++;
	c[0].innerHTML = "<input type='text' name='impuestoDescripcion' id='impuesto_descripcion"+numFilasImpuestosMax+"' style='width:130px;' maxlength='40' />"
					+ "<input type='hidden' name='impuestoCodigo' id='impuesto_codigo"+numFilasImpuestosMax+"' value='0' />";
	c[0].setAttribute("style","text-align:right;padding:0px;");
	c[1].innerHTML = "<input type='text' name='impuestoDetalle' id='impuesto_detalle"+numFilasImpuestosMax+"' onkeyup='calcularTotalImpuestos();' style='width:100px;' maxlength='25' />";
	c[1].setAttribute("style","padding:0px;");
	c[1].style.padding = "0px";
	c[2].innerHTML = "<input type='text' name='impuestoBaseImponible' id='impuesto_baseimponible"+numFilasImpuestosMax+"' onkeyup='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' onchange='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' style='width:70px;' />";
	c[2].setAttribute("style","padding:0px;");
	c[2].style.padding = "0px";
	c[3].innerHTML = "<input type='text' name='impuestoAlicuota' id='impuesto_alicuota"+numFilasImpuestosMax+"' onkeyup='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' onchange='calcularImporteFilaImpuestos("+numFilasImpuestosMax+");' style='width:45px;' />";
	c[3].setAttribute("style","padding:0px;");
	c[3].style.padding = "0px";
	c[4].innerHTML = "<span>"+simboloMoneda+"</span>&nbsp;<input type='text' name='impuestoMonto' onkeyup='calcularTotalImpuestos();' id='impuesto_monto"+numFilasImpuestosMax+"' onchange='limpiarBIyAFilaImpuestos("+numFilasImpuestosMax+");' style='width:70px;' />";
	c[4].setAttribute("style","padding:0px;");
	c[4].style.padding = "0px";
	c[5].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' id='ef' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaImpuesto("+numFilasImpuestosMax+");' /></span>";
	c[5].setAttribute("style","padding:0px;");
	c[5].style.padding = "0px";
}

var estadoBorrandoDetalle = false;
var progresoBorrandoDetalle = 0;

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

		borrarFilaDetalleTimer(rowNum);
	}
}

function borrarFilaDetalleTimer(rowNum)
{
	if (progresoBorrandoDetalle == 10)
	{
		progresoBorrandoDetalle = 0;
		tableRemoveRow('idoperacion',indiceDetalles[rowNum-1]);
		numFilasDetalles--;

		for (i=rowNum-1;i < numFilasDetallesMax;i++)
			indiceDetalles[i]--;

		calcularTotalImpuestos();
		calcularTotal();
		estadoBorrandoDetalle = false;
	}
	else
	{
		progresoBorrandoDetalle+=2;
		var fila = document.getElementById('idoperacion').rows[indiceDetalles[rowNum-1]];
		fila.style.height = (11-progresoBorrandoDetalle)+"px";

		for (i=0;i<11;i++)
			fila.cells[i].firstChild.style.fontSize = (11-progresoBorrandoDetalle)+"px";

		setTimeout("borrarFilaDetalleTimer("+rowNum+")",15);
	}
}

var estadoBorrandoImpuesto = false;
var progresoBorrandoImpuesto = 0;

function borrarFilaImpuesto(rowNum)
{
	if (!estadoBorrandoImpuesto)
	{
		estadoBorrandoImpuesto = true;
		var fila = document.getElementById('impuestos').rows[indiceImpuestos[rowNum-1]];

		fila.cells[4].style.textAlign = 'right';
		fila.cells[4].firstChild.style.display = 'none';
		fila.cells[5].firstChild.style.display = "none";

		borrarFilaImpuestoTimer(rowNum);
	}
}

function borrarFilaImpuestoTimer(rowNum)
{
	if (progresoBorrandoImpuesto == 10)
	{
		progresoBorrandoImpuesto = 0;
		tableRemoveRow('impuestos',indiceImpuestos[rowNum-1]);
		numFilasImpuestos--;

		for (i=rowNum-1;i < numFilasImpuestosMax;i++)
			indiceImpuestos[i]--;

		if (numFilasImpuestos == 6)
			document.getElementById('labelotrosimpuestos').style.display = 'none';

		calcularTotalImpuestos();
		calcularTotal();
		estadoBorrandoImpuesto = false;
	}
	else
	{
		progresoBorrandoImpuesto+=2;
		var fila = document.getElementById('impuestos').rows[indiceImpuestos[rowNum-1]];
		fila.style.height = (11-progresoBorrandoImpuesto)+"px";

		fila.cells[0].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[1].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[2].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[3].firstChild.style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		fila.cells[4].getElementsByTagName("input")[0].style.fontSize = (11-progresoBorrandoImpuesto)+"px";
		setTimeout("borrarFilaImpuestoTimer("+rowNum+")",15);
	}
}

function validarCampos()
{
	if (validarCamposObligatorios())
		if (validarCamposValores())
			if (validarCamposLongitudCombinadaDescripciones())
				document.datosOperacionForm.submit();
}

function validarCamposObligatorios()
{
	var i;
	var fila = 1;
	var camposFaltantes = "";
	var camposFaltantesFila;
	var totalFilasConCamposFaltantes = 0;

	for (i=1;i<=numFilasDetallesMax;i++)
	{
		if (document.getElementById("detalle_descripcion"+i))
		{
			camposFaltantesFila  = registrarSiVacio("detalle_descripcion"+i,"Descripción Producto/Servicio (fila "+fila+")");
			camposFaltantesFila += registrarSiVacio("detalle_cantidad"+i,"Cantidad (fila "+fila+")");
			camposFaltantesFila += registrarSiVacio("detalle_precio"+i,"Precio Unitario (fila "+fila+")");
			camposFaltantesFila += registrarSiNulo("detalle_tipo_iva"+i,0,"Alícuota IVA (fila "+fila+")");
			if (camposFaltantesFila != "")
			{
				totalFilasConCamposFaltantes++;
				if (totalFilasConCamposFaltantes < 6)
					camposFaltantes += camposFaltantesFila;
			}
			fila++;
		}
	}
	if (totalFilasConCamposFaltantes >= 6)
		camposFaltantes += "* [...]";

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
	var i;
	var fila;
	var camposInvalidos = "";
	var camposInvalidosFila;
	var totalFilasConCamposInvalidos = 0;
	var numDecimalesCantidad = document.getElementById("numdecimalescantidad")?document.getElementById("numdecimalescantidad").value:2;
	var numDecimalesPrecioUnit = document.getElementById("numdecimalespreciounit")?document.getElementById("numdecimalespreciounit").value:2;

	fila = 1;
	for (i=1;i<=numFilasDetallesMax;i++)
	{
		if (document.getElementById("detalle_descripcion"+i))
		{
			camposInvalidosFila  = validarCampoNumericoConDecimales("detalle_cantidad"+i,(numDecimalesCantidad<6)?7:5,numDecimalesCantidad,"Cantidad (fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("detalle_precio"+i,(numDecimalesPrecioUnit<6)?11:9,numDecimalesPrecioUnit,"Precio Unitario (fila "+fila+")");
			camposInvalidosFila += validarPorcentaje("detalle_porcentaje"+i,3,2,"% Bonificación (fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("detalle_importe_bonificacion"+i,11,2,"Importe Bonificación (fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("detalle_subtotal2"+i,11,2,"Subtotal [modificar cantidad y/o precio] (fila "+fila+")");
			if (camposInvalidosFila != "")
			{
				totalFilasConCamposInvalidos++;
				if (totalFilasConCamposInvalidos < 6)
					camposInvalidos += camposInvalidosFila;
			}
			fila++;
		}
	}

	fila = 1;
	for (i=1;i<=numFilasImpuestosMax;i++)
	{
		if (document.getElementById("impuesto_monto"+i))
		{
			camposInvalidosFila  = validarCampoNumericoConDecimales("impuesto_baseimponible"+i,11,2,"Base Imponible (Tributos - fila "+fila+")");
			camposInvalidosFila += validarPorcentaje("impuesto_alicuota"+i,3,2,"% Alícuota (Tributos - fila "+fila+")");
			camposInvalidosFila += validarCampoNumericoConDecimales("impuesto_monto"+i,11,2,"Monto (Tributos - fila "+fila+")");
			if (camposInvalidosFila != "")
			{
				totalFilasConCamposInvalidos++;
				if (totalFilasConCamposInvalidos < 6)
					camposInvalidos += camposInvalidosFila;
			}
			fila++;
		}
	}

	if (totalFilasConCamposInvalidos >= 6)
		camposInvalidos += "* [...]";

	if (camposInvalidos == "")
		return true;
	else
	{
		alert("Los siguientes campos tienen valores incorrectos:\n\n"+camposInvalidos);
		return false;
	}
}

function validarCamposLongitudCombinadaDescripciones()
{
	var i;
	var fila;
	var longitudTotal = 0;

	fila = 1;
	for (i=1;i<=numFilasDetallesMax;i++)
	{
		if (document.getElementById("detalle_descripcion"+i))
			longitudTotal += document.getElementById("detalle_descripcion"+i).value.length*1;
	}
	
	return true;
}

</script>

<script type="text/javascript">


insertarFilaDetalle();

</script>

<!-- Contenido (fin) -->
		</div>
		<br>

		<div id="pie" align="center">
			<table>
				<tbody><tr><td><b><?php echo date("d-m-y ") ?></b></td><td style="text-align:right;">Autenticado por: <b>R&B Design Web &copy; 2017</b></td></tr>
			</tbody></table>
		</div>
	


</body>
</html>