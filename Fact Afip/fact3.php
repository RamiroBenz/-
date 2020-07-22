<?php include '../cn.php'; ?>

<html>
	<head>
		<meta charset="utf-8">
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> -->
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<title>Factura 3</title>
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
		<link rel="stylesheet" href="botones.css">



<!-- Head específico (fin) -->
	</head>
	<body>
		<div id="encabezado" align="center" style="background-position:560px -5px;background-repeat:no-repeat;">
			<div id="encabezado_logo_afip">
			<img src="../img/Edilu1.png"></div>

			<div id="encabezado_salir" align="right">
			<a href="index.html" onclick="salirAplicacion('/rcel');" class="button blue"><span class="icon-house"></span>Salir</a></div>
			<br>
			<br>
			<table id="encabezado_usuario_container">
				<tbody><tr>
					<td>
						<table id="encabezado_usuario">
							<tbody><tr><th><b>Usuario<span>:</b></span></th><b>30-70866219-0 - EDILU SRL</b></td></tr>
							
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
			
		</div>
		<br>
		<br>
		
		<div id="contenido">
<!-- Contenido (inicio) -->

<script type="text/javascript">
var gCuitUsuario = "30708662190";
var gEsNotaDeCredito = false;
var gEsNotaDeDebito = false;
</script>
<script type="text/javascript" src="scripts/gen_com_datos_receptor.js?v=20170828"></script>
<script type="text/javascript" src="scripts/gen_com_datos_receptor_am.js?v=20170828"></script>
<div class="jig_titulo_con_subtitulo" align="center"><b>EDILU - GENERACIÓN DE COMPROBANTES - FACTURA A</b></div>
<div class="jig_subtitulo" align="center"><b>DATOS DEL RECEPTOR (PASO 3 DE 5)</b></div>
<br>
<br>
<br>
<div class="jig_paso_proceso"></div>
<form name="datosReceptorForm" action="genComDatosOperacion.php" id="formulario" method="post" style="margin-top:0px;">

	<div class="jig_borde">
		<div class="jig_contenido">
			<table class="jig_form" style="margin-left:auto;margin-right:auto;">
				<tbody><tr>
					<!-- <th>Condición frente al IVA</th>idIVAReceptor-->
					<td>
						<input type="hidden" name="idIVAReceptor" id="idivareceptor" value="1"><!--IVA Responsable Inscripto-->
					</td>
				</tr>
				
				<tr>
					<th>Razón Social</th>
					<td nowrap="nowrap"><div style="position:relative;"><input name="razonSocialReceptor" id="razonsocialreceptor" type="text" style="width:225px;" class="jig_readonly" readonly="readonly"><div id="recuperando_razon" style="display:none;position:absolute;top:3px;left:230px;"><img src="imagenes/progreso.gif" width="16px" height="16px" alt="Recuperando Razón Social..."></div></div></td>
				</tr>
				<tr>
					<th>Domicilio Comercial</th>
					<td>
						<div style="position:relative;">
							<select name="domicilioReceptor" style="width:250px;" id="domicilioreceptor">
							</select>
						<div id="recuperando_domicilio" style="display:none;position:absolute;top:3px;left:255px;">
						<!-- <img src="img/progreso.gif" width="16px" height="16px" alt="Recuperando Apellido y Nombre o Razón Social..."> --></div></div>
					</td>
				</tr>
				<tr>
					<th>CUIT:</th>
					<td>
						<input type="hidden" name="idTipoDocReceptor" id="idtipodocreceptor" value="80">
						<input type="text" name="nroDocReceptor" id="nrodocreceptor" pattern="[0-9]*" onchange="validarCUITReceptor('nrodocreceptor');" maxlength="11" style="width:150px;">
					</td>
				</tr>
				<tr>
					<th>Localidad:</th>
					<td><input name="emailReceptor" id="email" type="text" style="width:200px;" maxlength="50"></td>
				</tr>

				<tr>
					<th>Provincia:</th>
					<td><input name="emailReceptor" id="email" type="text" style="width:200px;" maxlength="50"></td>
				</tr>
			</tbody></table>
			<table class="jig_form" style="margin-left:auto;margin-right:auto;">
<!-- Condiciones de Venta - INICIO -->
<br>
<br>
<br>
				<tbody><tr>
					<td colspan="2" align="left" class="jig_subtitulo_seccion" id="tituloformadepago"> <b>Condiciones de Venta</b><div class="jig_separador"><!-- IE falla sin este comentario --></div></td>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePago" id="formadepago1" value="1"><label for="formadepago1">Contado</label>
					</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePagoTarjeta" id="formadepago2" value="69" onclick="ocultarMostrarDatosTarjeta(this.checked,'divtarjetadebito','tablatarjetadebito');"><label for="formadepago2">Tarjeta de Débito</label>
						<div style="display:none;margin-left:20px;" id="divtarjetadebito">
							<table class="jig_form" id="tablatarjetadebito">
								<tbody><tr>
									<td style="font-size:10px;font-weight:normal;color:#259;">Tipo</td>
									<td style="font-size:10px;font-weight:normal;color:#259;">Número</td>
								</tr>
							</tbody></table>
							<div style="float:right;margin-right:38px;"><input type="button" value="Agregar" onclick="insertarFilaTarjetaDebito();" style="width:100px;"></div>
						</div>
					</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePagoTarjeta" id="formadepago3" value="68" onclick="ocultarMostrarDatosTarjeta(this.checked,'divtarjetacredito','tablatarjetacredito');"><label for="formadepago3">Tarjeta de Crédito</label>
						<div style="display:none;margin-left:20px;" id="divtarjetacredito">
							<table class="jig_form" id="tablatarjetacredito">
								<tbody><tr>
									<td style="font-size:10px;font-weight:normal;color:#259;">Tipo</td>
									<td style="font-size:10px;font-weight:normal;color:#259;">Número</td>
								</tr>
							</tbody></table>
							<div style="float:right;margin-right:38px;"><input type="button" value="Agregar" onclick="insertarFilaTarjetaCredito();" style="width:100px;"></div>
						</div>
					</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePago" id="formadepago4" value="96"><label for="formadepago4">Cuenta Corriente</label>
					</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePago" id="formadepago5" value="97"><label for="formadepago5">Cheque</label>
					</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePago" id="formadepago6" value="98"><!-- VER CUAL ES EL CODIGO!!!!! --><label for="formadepago6">Ticket</label>
					</th>
				</tr>
				<tr>
					<th colspan="2" style="text-align:left;padding-left:15px;">
						<input type="checkbox" name="formaDePago" id="formadepago7" value="99"><!-- CAMBIAR POR UN COMBO? --><label for="formadepago7">Otra </label><!--input name="otrosDesc" id="otrosdesc" disabled="disabled" class="jig_readonly" -->
					</th>
				</tr>
<!-- Condiciones de Venta - FIN -->


<!-- Compradores Múltiples - INICIO -->
				<tr>
					<!-- <td colspan="2" align="left" class="jig_subtitulo_seccion" id="titulocompradoresmultiples">Compradores<div class="jig_separador">IE falla sin este comentario</div></td> -->
				</tr>
				<tr>
					<!-- <td colspan="2" style="text-align:left;padding-left:15px;">
						¿El comprobante se emite a más de un comprador?<select name="selectCompradoresMultiples" id="selectCompradoresMultiples" onchange="mostrarOcultarCompradoresMultiples();" style="margin-left:10px;"><option value="N">No</option><option value="S">Sí</option></select>
					</td> -->
				</tr>
				<tr>
					<td colspan="2" style="text-align:left;padding-left:15px;">
						<div id="divCompradoresMultiples" style="display:none;">
							<table id="tablaCompradoresMultiples">
								<tbody><tr>
									<td style="font-size:10px;font-weight:normal;color:#259;">Tipo Doc.</td>
									<td style="font-size:10px;font-weight:normal;color:#259;">Número</td>
									<td style="font-size:10px;font-weight:normal;color:#259;">% Titularidad</td>
								</tr>
							</tbody></table>
							<div style="margin-left:140px;"><input type="button" value="Agregar" onclick="insertarFilaComprador();" style="width:100px;"></div>
						</div>
					</td>
				</tr>
<!-- Compradores Múltiples - FIN -->



				<tr>
					<!-- <td colspan="2" align="left" class="jig_subtitulo_seccion">Comprobantes Asociados<div class="jig_separador">IE falla sin este comentario</div></td> -->
				</tr>
				<tr>
					<td colspan="2" style="padding-left:50px;">
						<table class="jig_form" id="tablacmpasoc">
							<tbody>
								<tr>
									<td nowrap="nowrap" style="font-size:9px;color:#259;" id="titulo_pto_vta_factura">Tipo de Comprobante</td>
									<td nowrap="nowrap" style="font-size:9px;color:#259;" id="titulo_pto_vta_factura">Pto. Vta.</td>
									<th style="padding:0px;"></th>
									<td nowrap="nowrap" style="font-size:9px;color:#259;" id="titulo_nro_factura">Comprobante</td>
									<td nowrap="nowrap" style="font-size:9px;color:#259;display:none;" id="titulo_cuit_emisor">CUIT Emisor</td>
								</tr>
								<tr>
									<th style="width:75px;">
										<select name="cmpAsociadoTipo" style="width:130px;" onchange="mostrarCuitEmisorSiCorresponde(this);">
								
											<option value="91">Remito</option>
										
										</select>
									</th>
									<td nowrap="nowrap">
									<input name="cmpAsociadoPtoVta" type="text" maxlength="4" style="width:38px;" onkeyup="filtrarNoNumericos(this);" onchange="controlarLongitudComprobanteAsociado(this,'Punto de Venta');"></td>
									<th style="padding:0px;">-</th>
									<td nowrap="nowrap"><input name="cmpAsociadoNro" type="text" maxlength="8" style="width:70px;" onkeyup="filtrarNoNumericos(this);" onchange="controlarLongitudComprobanteAsociado(this,'Nro. de Comprobante');"></td>
									<td nowrap="nowrap"><input name="cmpAsociadoCuitEmisor" type="text" maxlength="11" style="width:85px;display:none" onkeyup="filtrarNoNumericos(this);" onchange="controlarLongitudComprobanteAsociado(this,'CUIT Emisor');" placeholder="CUIT Emisor" title="CUIT Emisor (sólo si es distinto al del comprobante FACTURA A que está cargando)"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left:290px;">
						<input type="button" value="+" onclick="insertarFila('tablacmpasoc');" style="width:25px;text-align:center;margin-top:-2px;"><input type="button" value="-" onclick="borrarFila('tablacmpasoc');" style="width:25px;text-align:center;margin-top:-2px;">
					</td>
				</tr>


				<tr>
					<!-- <td colspan="2" align="left" class="jig_subtitulo_seccion" id="tituloformadepago">Datos Adicionales del Comprobante<div class="jig_separador">IE falla sin este comentario</div></td> -->
				</tr>
				<tr>
					<!-- <td nowrap="nowrap" style="font-size:11px;color:#136;padding-left:30px;" id="titulo_valor"><a style="cursor:pointer" onclick="ocularMostrarDatosAd('divdatosadicionales');">» Datos a completar únicamente por empresas alcanzadas por algún régimen especial «</a></td> -->
				</tr>
				<tr>
					<td>
						<div style="display:none;margin-left:20px;" id="divdatosadicionales">
							<table>
								<tbody><tr>
									<td colspan="2" style="padding-left:10px;">
										<table class="jig_form" id="datosadicionales">
											<tbody>
												<tr>
													<td nowrap="nowrap" style="font-size:9px;color:#259;" align="center" id="titulo_tipo">Tipo de Dato Adicional</td>
													<th style="padding:0px;"></th>
													<td nowrap="nowrap" align="center" id="titulo_valor">
														<div id="dato_adicional_ep_tit" style="font-size:9px;color:#259;">Valor</div>
														<div id="dato_adicional_rg3668_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Motivo Excep.</span>
															<span style="padding-left:50px;font-size:9px;color:#259;">Tipo Doc.</span>
															<span style="padding-left:60px;font-size:9px;color:#259;">Nro. Doc.</span>
															<span style="padding-left:60px;font-size:9px;color:#259;">Caracter Firmante</span>
														</div>
														
														<!-- RG 3749  -->
														<div id="dato_adicional_rg3749_epp_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Comprendida</span>
															<span style="padding-left:50px;font-size:9px;color:#259;">Tipo Doc.</span>
															<span style="padding-left:60px;font-size:9px;color:#259;">Nro. Doc.</span>
														</div>
														<div id="dato_adicional_rg3749_bin_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Comprendida</span>
														</div>
														
														<div id="dato_adicional_rg3749_ltit_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Comprendida</span>
														</div>
														
														<!-- RG 3779
														<div id="dato_adicional_rg3779_rm_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Comprendida</span>
														</div>
														<div id="dato_adicional_rg3779_ap_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Comprendida</span>
														</div>
														<div id="dato_adicional_rg3779_am_tit" style="display:none;">
															<span style="font-size:9px;color:#259;">Comprendida</span>
														</div>
														-->
														<!--Cta Vta Liq Prod (16) y Alquileres (17,18)-->
														<!--
														<div id="dato_adicional_id_16_tit" style="display:none;">
															<span style="padding-left:50px;font-size:9px;color:#259;">CUIT</span>
															<span style="padding-left:60px;font-size:9px;color:#259;">Apellido y Nombre / Razón Social</span>
														</div>
														-->
														<div id="dato_adicional_rg4004_1_tit" style="display:none;">
															<span style="padding-left:50px;font-size:9px;color:#259;">Tipo de Facturación</span>
														</div>
														<div id="dato_adicional_rg4004_2_tit" style="display:none;">
															<span style="padding-left:50px;font-size:9px;color:#259;">CUIT</span>
															<span style="padding-left:60px;font-size:9px;color:#259;">Apellido y Nombre / Razón Social</span>
														</div>
													</td>
												</tr>
												<tr>
													<td nowrap="nowrap">
													<select name="datoAdicionalTipo" id="datoadicionaltipo" onchange="mostrardescripcionadicional(this.value);buscarDatoAdicionalValor(this);">
														<option value="0" selected="selected" style="color:#888;">Seleccionar...</option>
														<option value="2">Empresas Promovidas</option>
													
														<option value="5">RG 3668</option>
														<option value="10">RG 3749 - Educación pública de gestión privada</option>
														<!-- <option value='11'>RG 3749 - Bienes Inmuebles</option> -->
														<option value="12">RG 3749 - Loc. Temp. Inmuebles Turísticos</option>
														<!--
														<option value='13'>RG 3779 - Representantes de Modelos</option>
														<option value='14'>RG 3779 - Agencias de Publicidad</option>
														<option value='15'>RG 3779 - P.F. que Desarrollan Actividades de Modelaje</option>
														<option value='16'>Comprobantes Cta. de Vta. y Liq. Prod.</option>
														-->
													
													</select>
													</td>
													<th style="padding:0px;">-</th>
													<td nowrap="nowrap">
														<div style="position:relative;display:none;" id="dato_adicional_ep">
															<select name="datoAdicionalValor" id="datoadicionalvalor" style="width:300px;" disabled="disabled">
																<option value="0" selected="selected" style="color:#888;">Seleccionar primero un Tipo de Dato</option> 
															</select>
															<div id="recuperando_proyectos" style="display:none;position:absolute;top:3px;left:305px;"><img src="imagenes/progreso.gif" width="16px" height="16px" alt="Recuperando Proyectos..."></div>
														</div>
														<!-- RG 3668 -->
														<div style="position:relative;display:none;" id="dato_adicional_rg3668">
															<select name="datoAdicionalValor" id="da_rg3668_tipo_recep" style="width:100px;" disabled="disabled">
																<option value="0" selected="selected" style="color:#888;">Seleccionar ...</option>
																<option value="1">Locador/Prestador</option> 
																<option value="2">Conferencias/congresos/.../similares</option>
																<option value="3">Oper. Cont. RG 74</option>
																<option value="4">Bienes de Cambio</option>
																<option value="5">Ropa de Utilización excl. en Lug. de trabajo</option>
																<option value="6">Intermediario</option>
															</select>
															<select name="datoAdicionalValor" id="da_rg3668_tipo_doc" style="width:100px;" disabled="disabled">
																<option value="-1" selected="selected" style="color:#888;">Seleccionar ...</option> 
																<option value="80">CUIT</option> 
																<option value="86">CUIL</option> 
																<option value="87">CDI</option> 
																<option value="96">DNI</option>
																<option value="89">LE</option> 
																<option value="90">LC</option> 
																<option value="91">CI Extranjera</option> 
																<option value="94">Pasaporte</option> 
																<option value="00">CI- PFA</option> 
															</select>
															<input name="datoAdicionalValor" id="da_rg3668_nro_doc" style="width:100px;color:#888;" disabled="disabled">
															<select name="datoAdicionalValor" id="da_rg3668_caracter_frimante" style="width:100px;" disabled="disabled">
																<option value="0" selected="selected" style="color:#888;">Seleccionar primero un Tipo de Dato</option>
																<option value="1">Titular</option>
																<option value="2">Director o Presidente</option>
																<option value="3">Apoderado</option>
																<option value="4">Empleado</option>
															</select>
														</div>
														<!-- RG 3749 1) ID = 10 -->
														<div style="position:relative;display:none;" id="dato_adicional_rg3749_epp">
															<select name="datoAdicionalValor" id="da_rg3749_epp_vinculda" onchange="habilitarDesabilitarRG3749(this);" style="width:100px;" disabled="disabled">
																<option value="-1" selected="selected" style="color:#888;">Seleccionar ...</option>
																<option value="1">Actividad Comprendida</option> 
																<option value="0">Actividad No Comprendida</option>
															</select>
															<select name="datoAdicionalValor" id="da_rg3749_epp_tipo_doc" style="width:100px;" disabled="disabled">
																<option value="-1" selected="selected" style="color:#888;">Seleccionar ...</option> 
																<option value="80">CUIT</option> 
																<option value="86">CUIL</option> 
																<option value="87">CDI</option> 
																<option value="96">DNI</option>
																<option value="89">LE</option> 
																<option value="90">LC</option> 
																<option value="91">CI Extranjera</option> 
																<option value="94">Pasaporte</option> 
																<option value="00">CI- PFA</option> 
															</select>
															<input name="datoAdicionalValor" id="da_rg3749_epp_nro_doc" style="width:100px;" disabled="disabled">
														</div>
														<!-- RG 3749 2) ID = 11 -->
														<!--
														<div style="position:relative;display:none;" id="dato_adicional_rg3749_bin">
															<select name="datoAdicionalValor" id="da_rg3749_bin_vinculada" style="width:250px;" disabled="disabled">
																<option value='-1' selected='selected' style='color:#888;'>Seleccionar ...</option>
																<option value='1'>Actividad Comprendida</option>
																<option value='0'>Actividad No Comprendida</option> 
															</select>
														</div>
														-->
														<!-- RG 3749 3) ID = 12  -->
														<div style="position:relative;display:none;" id="dato_adicional_rg3749_ltit">
															<select name="datoAdicionalValor" id="da_rg3749_ltit_vinculada" style="width:250px;" disabled="disabled">
																<option value="-1" selected="selected" style="color:#888;">Seleccionar ...</option>
																<option value="1">Actividad Comprendida</option> 
																<option value="0">Actividad No Comprendida</option>
															</select>
														</div>
														<!-- RG 3779 - ID = 13 -->
														<!--
														<div style="position:relative;display:none;" id="dato_adicional_rg3779_rm">
															<select name="datoAdicionalValor" id="da_rg3779_rm_vinculada" style="width:250px;" disabled="disabled">
																<option value='-1' selected='selected' style='color:#888;'>Seleccionar ...</option>
																<option value='1'>Actividad Comprendida</option>
																<option value='0'>Actividad No Comprendida</option> 
															</select>
														</div>
														-->
														<!-- RG 3779 - ID = 14 -->
														<!--
														<div style="position:relative;display:none;" id="dato_adicional_rg3779_ap">
															<select name="datoAdicionalValor" id="da_rg3779_ap_vinculada" style="width:250px;" disabled="disabled">
																<option value='-1' selected='selected' style='color:#888;'>Seleccionar ...</option>
																<option value='1'>Actividad Comprendida</option>
																<option value='0'>Actividad No Comprendida</option> 
															</select>
														</div>
														-->
														<!-- RG 3779 - ID = 15 -->
														<!--
														<div style="position:relative;display:none;" id="dato_adicional_rg3779_am">
															<select name="datoAdicionalValor" id="da_rg3779_am_vinculada" style="width:250px;" disabled="disabled">
																<option value='-1' selected='selected' style='color:#888;'>Seleccionar ...</option>
																<option value='1'>Actividad Comprendida</option>
																<option value='0'>Actividad No Comprendida</option> 
															</select>
														</div>
														-->
														<!-- Líquido Producto ID = 16 -->
														<!--
														<div style="position:relative;display:none;" id="div_da_valor_id_16">
															<input name="datoAdicionalValor" id="da_id_16_cuit" style="width:100px;" disabled="disabled">
															<input name="datoAdicionalValor" id="da_id_16_razon_soc" style="width:100px;" disabled="disabled">
														</div>
														-->
														<!--
														<div style="position:relative;display:none;" id="div_da_valor_rg4004_1">
															<input name="datoAdicionalValor" id="da_rg4004_1_cuit" style="width:100px;" disabled="disabled">
															<input name="datoAdicionalValor" id="da_rg4004_1_razon_soc" style="width:100px;" disabled="disabled">
														</div>
														-->
													</td>
												</tr>
												<tr>
													<td style="padding:0px;"></td>
													<td style="padding:0px;"></td>
													<td nowrap="nowrap" align="center"><span id="descripcionadicional"></span> </td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody></table>
						</div>
					</td>
				</tr>

			</tbody></table>
		</div>
	</div>
	<br>
	<div align="center">
		<input type="button" value="< Volver" "><a href="fact2.html"></a> &nbsp;<input type="button" value="Continuar >" "><a href="fact4.html"></a>
		<br><br>
	</div>
</form>
<table style="margin-left:auto;margin-right:auto;">
	<tbody><tr><td><div class="jig_separador_botones"><!-- IE falla sin este comentario --></div></td></tr>
	<tr><td><input type="button" value="Menú Principal" onclick="parent.location.href='index.html'"></td></tr>
</tbody></table>
<br>
<script type="text/javascript">
function insertarFila(tabla)
{
	var tbl = document.getElementById(tabla).tBodies[0];
	if (tbl.rows.length <= 6) { // La primera fila son los títulos
		var filaDuplicada = tbl.rows[1].cloneNode(true);
		tbl.appendChild(filaDuplicada);
		tbl.rows[tbl.rows.length-1].cells[1].firstChild.value = "";
		tbl.rows[tbl.rows.length-1].cells[3].firstChild.value = "";
		tbl.rows[tbl.rows.length-1].cells[4].firstChild.value = "";
		tbl.rows[tbl.rows.length-1].cells[4].firstChild.style.display = "none";
	} else {
		alert("Se puede ingresar un máximo de seis Comprobantes Asociados");
	}
}

function insertarFilaDA(idTabla)
{
	var tbl = document.getElementById(idTabla).tBodies[0];
	var filaDuplicada = tbl.rows[1].cloneNode(true);
	tbl.appendChild(filaDuplicada);
	var celdasFilaDuplicada = tbl.rows[tbl.rows.length-1].cells;
	for (var numCelda = 0; numCelda < celdasFilaDuplicada.length; numCelda++) {
		celdasFilaDuplicada[numCelda].firstChild.value = "";
	}
}

</script>
<!-- Contenido (fin) -->
		</div>
		<br>

		<div id="pie" align="center">
			<table>
				<tbody>
					<tr>
						<td><b><?php echo date("d-m-y ") ?></b></td>

							<td style="text-align:right;">
								<b>Autenticado por: R&B Design Web &copy; 2017</b>
							</td>
						</tr>
				</tbody>
			</table>
		</div>
	


</body>

</html>