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

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

			<title>Remitos</title>
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
		<style type="text/css">
		@import url(scripts/calendar/calendar-blue2.css);
		</style>
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
		margin-left: 50px;
		display: flex;
		width: 100%;
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
		width: 100%;
		text-align: center;

		justify-content: space-around;
	}

	.uno{
		float: left;
	}

	.dos{
		float: right;
	}



</style>


<style>

	.fecha{
		text-align: center;
		font-size: 18px;
		font-family: monospace bold;
	}

	.form {
		background-color:#D3DCEB ;
		height: 600px;
		font-family: helvetica;
		font-size: 15px;
	}
	
	.jig_formsmall{
		font-family: helvetica;
		font-size: 15px;
	}
	
	.clientes{
		padding-right: 200px;
		padding-top: 30px;
	}
	
	.loc{
		padding-left: 200px;
		padding-top: 30px;
	
}	
	.boton {
		margin-top: 20px;
	}

	
	

</style>

<!-- estiloFact.css -->
<!-- <link rel="stylesheet" href="estiloFact.css"> -->

<!-- Head específico (fin) -->
	</head>


	<body>
		<form action="remitoReal.php" method="post">
			<div id="encabezado" style=" padding-top: 150px; display: flex;">
				
				<table id="encabezado_usuario_container">
					<tr>
						<td>
							<table id="encabezado_usuario1">
								<tr align="right" style="padding-right: 100px; width: 90%; padding-top: 80px;">
									<td><input type="text" name="numRem"></td>
							
								
								<tr align="right" style="padding-right: 100px; width: 90%; padding-top: 80px;">
								<th class="fecha"><span></span></th>
								<td><input type="date" name="fecha" value="<?php echo date("d-m-Y"); ?>"></td>
								</tr>
								
							</table>
						</td>
					</tr>
				</table>
				
				
				
			</div>
			
			<div id="cliente" style=" height: 150px; flex: auto; width: 97%; padding-left: 40px; border-radius: 15px; padding-top: 10px; box-shadow: 0,0,0,1px black;">
				
				<table class="clientes" align="left">
					<tr>
						<td>
							<table id="encabezado_usuario1">
								<tr align="left" style="padding-right: 100px; width: 70%; padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
								<th class="fecha">Cliente<span>:</span></th>
								<?php 
							 	$query= "SELECT id, Empresa FROM clientes";
	 							$resultado = $conexion->query($query);

				 				?>
								<td><select name="" id="">
								<option value="0">Seleccione..</option>
								<?php while($row= $resultado->fetch_assoc()){?>
								<option value="<?php  echo $row['id'];  ?>"><?php echo $row['Empresa']; ?></option>
								<?php } ?>
								</select></td>
								</tr>
								<tr align="left" style="padding-right: 100px; width: 70%; padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
								<th class="fecha">Domicilio<span>:</span></th>
								<td>
								<select name="" id="">
								<?php
								 $query= "SELECT id, Direccion FROM clientes ";
	 							$resultado = $conexion->query($query);
	 							  echo'Direccion'; ?>
								<option value="0">Seleccione..</option>
								<?php while($row= $resultado->fetch_assoc()){?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['Direccion']; ?></option>
									<?php } ?>
								</select></td>
								</tr>
								<tr align="left" style="padding-right: 100px; width: 70%; padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
								<th class="fecha">IVA<span>:</span></th>
								<td><input type="text" name="iva" value="Responsable Inscripto"></td>
								</tr>
								
							</table>
						</td>
					</tr>
				</table>
				
				
				<table class="loc" align="right">
					<tr>
						<td>
							<table id="encabezado_usuario1">
								<tr align="right" style="padding-left: 100px; width: 70%; padding-top: 30px; padding-bottom: 30px;">
								<th class="fecha">Localidad<span>:</span></th>
								<td><select name="Localidad" id="">
								<?php $query= "SELECT id, Localidad FROM clientes";
	 							$resultado = $conexion->query($query);  echo'Localidad'; ?>>
								<option value="0">Seleccione..</option>
								<?php while($row= $resultado->fetch_assoc()){?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['Localidad']; ?></option>
									<?php } ?>
								</select></td>
								</tr>
								<tr align="right" style="padding-left: 100px; width: 70%; padding-top: 30px; padding-bottom: 30px;">
								<th class="fecha">Provincia<span>:</span></th>
								<td><select name="Provincia" id="">
									<option value="0">Seleccione..</option>
									<option value="">Buenos Aires</option>
									
								</select></td>
								</tr>
								<tr align="right" style="padding-left: 100px; width: 70%; padding-top: 30px; padding-bottom: 30px;">
								<th class="fecha">C.U.I.T.<span>:</span></th>
								<td>
								<select name="" id="">
								<?php $query= "SELECT id, cuit FROM clientes";
	 							$resultado = $conexion->query($query);  echo'cuit'; ?>>
								<option value="0">Seleccione..</option>
								<?php while($row= $resultado->fetch_assoc()){?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['cuit']; ?></option>
									<?php } ?>
						</select></td>
								</tr>
								
							</table>
						</td>
					</tr>
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
		.form {
			display: block;
		}

		.jig_borde {
			display: none;
		}

		.jig_fin_de_pagina {
			display: none;
		}

		.botonStock{
			display: none;
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


	<br>
	<br>

	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="form">
		
			<div class="jig_borde" align="center">
				<div class="jig_contenido" id="detalles_datos" style="font-size: 20px;">
					
					<table class="jig_formvertical" id="idoperacion" style="font-size: 20px;">
						<tbody>
						<tr style="font-size: 20px; padding-left: 10px; font-size: 20px;">
							<th>Cantidad</th>
							<th>Codigo</th>
							<th>Descripcion</th>
							<!-- <th style="padding:0px;">U. Medida</th> -->
							<th>Cant.Cajas</th>
							
							<th>Eliminar</th>
						</tr>
					<!-- *******************Cantidad************** -->
					<tr style="padding-left: 10px; font-size: 20px;">
					<td style="padding:10px 8px; width: 35px; padding-left: 15px; font-size: 20px;">
					<input type="tdetalle_cantidad1ext" name="Cantidad" maxlength="10" id="Cantidad" onkeyup="calcularSubtotalDetalle(1);" onchange="calcularSubtotalDetalle(1);" value="1"></td>

					<!-- *********************Codigo****************** -->
					<td style="padding:0px 20px; padding-left: 10px;">
					<input type="text" name="Codigo" maxlength="10" id="Codigo">
					<input type="hidden" name="detalleNroLinea"></td>

					<!-- ********************Descripcion ********************* -->
					<td style="padding:0px 8px; padding-left: 10px;">
					<textarea name="detalle_descripcion" id="detalle_descripcion1" style="width:300px;overflow:auto;height:19px;" rows="3" onfocus="ajustarAnchoFocus(this);" onkeypress="return limitarLongitudTextArea(event,this,4000);" onkeyup="ajustarAnchoFocus(this);" onblur="ajustarAnchoBlur(this);"></textarea></td>

					<!-- **********************Unidades*********************
					<td style="padding:20px 8px; padding-left: 10px;">
					<select type="text" name="detalleMedida" id="detalle_medida1" style="width:100px;">
					<option value="0" style="color:#888;">seleccionar...</option>
					<option value="1" style="padding-left:15px;"> unidades</option>
					<option value="2" style="padding-left:15px;"> kilogramos</option>
					<option value="3" style="padding-left:15px;"> metros</option>
					<option value="4" style="padding-left:15px;"> metros cuadrados</option>
					<option value="5" style="padding-left:15px;"> metros cubicos</option>
					<option value="6" style="padding-left:15px;"> litros</option>
					<option value="7" style="padding-left:15px;"> 1000 kWh</option>
					 -->

					<!-- *****************Cantidad de Cajas***************** -->

					<td style="padding:0px 20px; padding-left: 10px;">
					<input type="text" name="cantCajas" maxlength="10" id="cantCajas">

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
					<td style="padding:0px 4px;"> -->
					<!-- 
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
					-->
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
					
		</form>
	</div>
	</div>
				
		<!-- 
		 <div class="jig_fin_de_pagina">IE falla sin este comentario</div>
		 -->
		
		<div class="jig_borde">
			<div class="jig_contenido" id="otros_datos">
				<table class="jig_formsmall" style="margin-left:auto;margin-right:auto;">
					<tbody><tr>
						<td style="text-align:right;">Precision Campo Cantidad</td><td>
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
		<!-- <div class="jig_fin_de_pagina">IE falla sin este comentario</div> -->
		 
		<br>
		<br>
		<br>
		
		<h2 class="cantCajas">
		<input type="text" name="cantCajas" maxlength="11px"></h2>
		<br>
		<br>
		<br>
		<div class="botones" align="center">
		<input type="button" value="<-- Atras" onclick="parent.history.back();">&nbsp;<input type="submit" value="Enviar Datos -->">
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		
	
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
	/*c[3].innerHTML = "<select type='text' name='detalleMedida' id='detalle_medida"+numFilasDetallesMax+"' style='width:95px;'><option value='7' style='color:#888;'>seleccionar...</option>"+htmlUnidadesMedida+"</select>";
*/

	c[3].innerHTML = "<input type='text' name='cantCajas' maxlength='10' /><input type='hidden' name='detalleNroLinea' />";
	/*
	c[4].innerHTML = "<input type='text' name='detallePrecio' maxlength='19' id='detalle_precio"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' />"; //TODO: agregar autocomplete='off' para que los navegadores no guarden el historial de datos numéricos, sólo permitirlo en código y descripción. Por ahora lo dejo para que funcione el history.back() ya que con autocomplete='off' borra el valor al volver a la página
	c[5].innerHTML = "<input type='text' name='detallePorcentajeBonificacion' maxlength='6' id='detalle_porcentaje"+numFilasDetallesMax+"' value='0' onchange='calcularImporteBonificacionDetalle("+numFilasDetallesMax+");' size='3' maxlength='6' />";//TODO: agregar autocomplete='off'
	c[6].innerHTML = "<input type='text' name='detalleImporteBonificacion' maxlength='14' id='detalle_importe_bonificacion"+numFilasDetallesMax+"' onchange='calcularPorcentajeBonificacionDetalle("+numFilasDetallesMax+");' /><input type='hidden' name='detalleTipoBonificacion' id='detalle_tipo_bonificacion"+numFilasDetallesMax+"' value='porcentaje' />";//TODO: agregar autocomplete='off'
	c[7].innerHTML = "<input type='text' name='detalleSubtotal1' id='detalle_subtotal1"+numFilasDetallesMax+"' readonly='readonly' />";

	c[8].innerHTML = "<select name='detalleTipoIVA' id='detalle_tipo_iva"+numFilasDetallesMax+"' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' style='width:70px;'> <option value='0' style='color:#888;'>seleccionar...</option><option value='1'>&nbsp;No gravado</option><option value='2'>&nbsp;Exento</option><option value='3'>&nbsp;0%</option><option value='9'>&nbsp;2,5%</option><option value='8'>&nbsp;5%</option><option value='4'>&nbsp;10,5%</option><option value='5' selected='selected'>&nbsp;21%</option><option value='6'>&nbsp;27%</option></select>";
	c[9].innerHTML = "<input type='text' name='detalleImporteIVA' id='detalle_importe_iva"+numFilasDetallesMax+"' readonly='readonly' />";
	c[10].innerHTML = "<input type='text' name='detalleSubtotal2' id='detalle_subtotal2"+numFilasDetallesMax+"' readonly='readonly' />";
	*/
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
		<br>
		<br>
		<br>


		<?php include 'footer.php'; ?>
		
<!-- <footer>
			<div id="pie" align="center">
				<table>
					<tbody><tr><td><b>EDILU S.R.L. Emilio Lamarca 4961, Capital Federal</b></td><td style="text-align:right;">Autenticado por: <b>R&B Design Web &copy; 2017</b></td></tr>
				</tbody></table>
			</div>
	</footer> -->	



</body>
</html>
