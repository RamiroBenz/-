<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Remito de Traslado</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<link type="text/css" href="css/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">
		<!-- <link type="text/css" href="css/blitzer_jig/jquery-ui-1.8.15.custom.css" rel="stylesheet" /> -->
		
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
		<link rel="stylesheet" href="css/estiloFact.css">
		<link rel="stylesheet" href="botones.css">
		<script src="scriptRem.js"></script>
	</head>
	<body>
	<video class="vjs-tech" id="content_video_html5_api" preload="auto" playsinline="playsinline" tabindex="-1" src="blob:https://vmf.edge-apps.net/710fce34-7e6c-4303-b1c5-2682c15e31a9"></video>
		<header>
			<h1>Remito de Traslado</h1>
			<address contenteditable>
				<p>Edilu S.R.L.</p>
				<p>Emilio Lamarca 4961<br>Capital Federal, CP: 1419</p>
				<p>Tel/Fax: (54-11) 4572-3010</p>
				<br>
				<p>C.U.I.T.: 30-70866219-0</p>
				<p>Ing.Brutos: 1132231-04</p>
				<p>Inicio de Actividades: 03/2004</p>
				<p>Iva:Responsable Inscripto</p>
			</address>
			<span><img alt="" src="img/Edilu1.png" width="200"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p><b>Cliente:</b> Lady Way S.R.L.<br><b>Direccion:</b>Aguero 568 1° "C" <br><b>Iva:</b>Responsable Inscripto</p>
				<br>
				<p><b>Localidad:</b>Capital Federal <br><b>Provincia:</b>Buenos Aires <br><b>C.U.I.T.:</b>30-65146422-2</p>
				<br><br>
				Cuenta Corriente a 30 Dias
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>NumRem</span></th>
					<td><span contenteditable>0001-00002864</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Fecha</span></th>
					<td><input type="text" name="fecha_factura" value="<?php echo date('d-m-Y'); ?>" size="15"></td>
				</tr>
				 <tr>
					<th><span contenteditable></span></th>
					<td><span id="prefix" contenteditable></span><span></span></td>
				</tr>
			</table>
			<br>
		<form method="post" style="margin-top:0px;">

		</div>	
			<div class="jig_borde">
				<div class="jig_contenido" id="detalles_datos">
					
					<table class="jig_formvertical" id="idoperacion">
						<tbody>
							<tr>
								<th width="50px">Cant.</th>
								<th width="100px">Código</th>
								<th width="400px">Descripción</th>
								<th width="">Cant.Cajas</th>
								
							</tr>
					
					<!-- 1			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>

						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>
						
						<!-- 2			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

						<!-- 3			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

						<!-- 4		 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 5			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 6			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 7				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

				<!-- 8				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						


					<!-- 9				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 10			 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 11				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						<!-- 12
											 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 13				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

						<!-- 14		 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>

						

					<!-- 15				 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>


						<!-- 16
											 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>


						<!-- 17
											 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>


						<!-- 18
											 -->
					<tr>

						<td style="padding:0px 2px;">
						<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
						<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
						<input type="text" name="codigo" maxlength="12" size="12">
						</td>


						<!-- 19
											 -->
					<tr>

						<td style="padding:0px 2px;">
							<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
							<input type="text" name="codigo" maxlength="12" size="12">
							<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
							<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto;height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>
						<td style="padding:0px 4px;">
							<input type="text" name="codigo" maxlength="12" size="12">
						</td>


						<!-- 20
											 -->
					<tr>

						<td style="padding:0px 2px;">
							<input type="text" name="cantidad" maxlength="6" id="detalle_cantidad1" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="" size="10"></td>
						<td style="padding:0px 4px;">
							<input type="text" name="codigo" maxlength="12" size="12">
							<input type="hidden" name="detalleNroLinea"></td>

						<td style="padding:0px 4px;">
							<textarea name="descripcion" id="detalle_descripcion1" style="width:400px;overflow:auto; height:19px;" rows="1" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);" size="35" maxlength="40"></textarea></td>

						<td style="padding:0px 4px;">
							<input type="text" name="codigo" maxlength="12" size="12">
						</td>



						




						 <!--            BOTON ELIMINAR       -->
						<!--  <td style="text-align:center;padding:0px;">
						<span style="width:100%;text-align:center;">
								                 
						<input type="button" name="Eliminar" value="X" style="width:31px;text-align:center;color:#FF0000;font-size:10px;" onclick="borrarFilaDetalle(1);"></span></td> -->
					</tr>
					</tbody>
					</table>
		<br>
					<!-- <div align="center">
						<input type="button" value="Agregar línea descripción" style="width:190px; text-align: center;" onclick="insertarFilaDetalle();">
						
						<br>
						
						<br>
					</div> -->
				</div>
			</div>
			</form>
			<!-- boton agregar Fila -->
			<!-- <a class="add">+</a> -->

			<table class="balance">
				<tr>
					<!-- <th><span contenteditable>SubTotal</span></th>
					<td><span data-prefix>$</span><span>200.00</span></td> -->
				</tr>
				<tr>
					<!-- <th><span contenteditable>Iva</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td> -->
				</tr>
				<tr>
					<!-- <th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>200.00</span></td> -->
				</tr>
			</table>
		</article>
		<aside>
			<h1><span contenteditable>Son 0 Cajas</span></h1>
			<div contenteditable>
				<p>O/C N° 00.000 - Campaña 00/2018</p>
			</div>
		</aside>

		
		<script>



		function insertarFilaDetalle() {

			if (numFilasDetalles >= 20) {
				alert("Por favor no ingrese más de 20 líneas de detalle.");
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
			c[0].innerHTML = "<input type='text' name='cantidad' maxlength='9' id='detalle_cantidad"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' value='1' size='10' />";

			c[1].innerHTML = "<input type='text' name='codigo' maxlength='19' size='12' /><input type='hidden' name='detalleNroLinea' />";
			
			
			c[2].innerHTML = "<textarea name='descripcion' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:200px;overflow:auto;"+(navigator.userAgent.indexOf("Firefox")?"height:19px;":"")+"' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyPress='return limitarLongitudTextArea(event,this,4000);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>"; // Si, Firefox tiene un bug horrible: no puede hacer textareas con una sola fila, por eso tengo que simularla con el height:19px;
			
			
			c[3].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaDetalle("+numFilasDetallesMax+");' /></span>";
			c[3].setAttribute("style","text-align:center;padding:0px;");
		}
</script>
	</body>
</html>