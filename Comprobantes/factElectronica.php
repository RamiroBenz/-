<?php 
include 'cn.php'; 

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como números telefónicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<title>Factura</title>
		<!-- <link type="text/css" href="css/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" /> -->
		<link type="text/css" href="css/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet" />

		<!-- <link type="text/css" href="css/blitzer_jig/jquery-ui-1.8.15.custom.css" rel="stylesheet" /> -->

		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet" />
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.notice.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.jBreadCrumb.css" rel="stylesheet" />
		<link type="text/css" href="css/validationEngine.jquery.css" rel="stylesheet" />
	<!--[if !IE]><!-->
		<link type="text/css" href="css/jig_old.css" rel="stylesheet" />
		<link type="text/css" href="css/jig.css?v=20151216" rel="stylesheet" />
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

	.fecha{
		text-align: center;
		font-size: 18px;
		font-family: monospace bold;
	}

	.form {
		height: 600px;
		font-size: 18px;
	}
	.jig_formsmall{
		font-size: 18px;
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

	.numero


</style>

<?php 




 ?>
<!-- Head específico (fin) -->
	</head>
	<body>
	
		<div id="encabezado" style=" padding-top: 150px; display: flex;">
			
			

			<table id="encabezado_usuario_container">
				<tr>
					<td>
						<table id="encabezado_usuario1">
						
							
							<tr align="right" style="padding-right: 100px; width: 90%; padding-top: 80px;">
							<th class="fecha"><span></span></th>
							<td><input type="date" name="fecha"></td>
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
							<td><select name="" id="">
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
							<td><select name="" id="">
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
		<div id="contenido">



		<!-- Contenido (inicio) -->



		<style type="text/css" media="all">
		/* #advertencia_impresion {
			display:none;
		} */
		</style>

		<style>
			@media Print{
				.boton{
					display: none;
				}

				
			}
		</style>

		<!-- <style type="text/css" media="print">
		/* #advertencia_impresion {
			display:block;
		} */
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
		#contenido {
			display: block;
		}
		.form {
			display: block;
		}
		</style> -->


<script type="text/javascript">
var htmlUnidadesMedida = "<option value='1' style='padding-left:10px;'> kilogramos</option><option value='2' style='padding-left:10px;'> metros</option><option value='3' style='padding-left:10px;'> metros cuadrados</option><option value='4' style='padding-left:10px;'> metros cúbicos</option><option value='5' style='padding-left:10px;'> litros</option><option value='6' style='padding-left:10px;'> 1000 kWh</option><option value='7' style='padding-left:10px;'> unidades</option><option value='8' style='padding-left:10px;'> pares</option><option value='9' style='padding-left:10px;'> docenas</option><option value='10' style='padding-left:10px;'> quilates</option><option value='11' style='padding-left:10px;'> millares</option><option value='14' style='padding-left:10px;'> gramos</option><option value='15' style='padding-left:10px;'> milimetros</option><option value='16' style='padding-left:10px;'> mm cúbicos</option><option value='17' style='padding-left:10px;'> kilómetros</option><option value='18' style='padding-left:10px;'> hectolitros</option><option value='20' style='padding-left:10px;'> centímetros</option><option value='25' style='padding-left:10px;'> jgo. pqt. mazo naipes</option><option value='27' style='padding-left:10px;'> cm cúbicos</option><option value='29' style='padding-left:10px;'> toneladas</option><option value='30' style='padding-left:10px;'> dam cúbicos</option><option value='31' style='padding-left:10px;'> hm cúbicos</option><option value='32' style='padding-left:10px;'> km cúbicos</option><option value='33' style='padding-left:10px;'> microgramos</option><option value='34' style='padding-left:10px;'> nanogramos</option><option value='35' style='padding-left:10px;'> picogramos</option><option value='41' style='padding-left:10px;'> miligramos</option><option value='47' style='padding-left:10px;'> mililitros</option><option value='48' style='padding-left:10px;'> curie</option><option value='49' style='padding-left:10px;'> milicurie</option><option value='50' style='padding-left:10px;'> microcurie</option><option value='51' style='padding-left:10px;'> uiacthor</option><option value='52' style='padding-left:10px;'> muiacthor</option><option value='53' style='padding-left:10px;'> kg base</option><option value='54' style='padding-left:10px;'> gruesa</option><option value='61' style='padding-left:10px;'> kg bruto</option><option value='62' style='padding-left:10px;'> uiactant</option><option value='63' style='padding-left:10px;'> muiactant</option><option value='64' style='padding-left:10px;'> uiactig</option><option value='65' style='padding-left:10px;'> muiactig</option><option value='66' style='padding-left:10px;'> kg activo</option><option value='67' style='padding-left:10px;'> gramo activo</option><option value='68' style='padding-left:10px;'> gramo base</option><option value='96' style='padding-left:10px;'> packs</option><option value='98' style='padding-left:10px;'> otras unidades</option>";
var codBonosA = "";

</script>




<script type="text/javascript" src="scripts/gen_com_datos_operacion.js?v=20160601"></script>

<script type="text/javascript" src="scripts/gen_com_datos_operacion_am.js?v=20160601"></script>

<script type="text/javascript" src="scripts/keep_alive.js?v=20160311"></script>

<!-- <div id="advertencia_impresion"><p><b>Por favor confirme los datos para generar una impresion, no imprima esta pagina.</b></p></div> -->




<!-- 
**************** INICIO DEL FORMULARIO****************** -->

<form class="form" action="procesarFact.php" method="post" style="margin-top:0px; ">

	
	<div class="jig_borde" style="padding-bottom: 20px;">
		<div class="jig_contenido" id="detalles_datos">
			
			<table class="jig_formvertical" id="idoperacion">
				<tr>
					<th>Codigo</th>
					<th>Descripcion</th>
					<th>Cant.</th>
					<!--<th>Cant.Cajas</th>

 					para arriba, Remito; para abajo Factura -->
					<th style="padding:0px;">U. Medida</th>
					<th>Prec. Unitario</th>
					<th>% Bon.</th>
					<th>Importe Bon.</th>
					<th>Subtotal</th>
					<th>Alicuota IVA</th>
					<th>Importe IVA</th>
					<th>Subtotal c/IVA</th>
					<th>Eliminar</th>
				</tr>
			</table>

			<div class="boton">
			<input type="button" value="Agregar linea descripcion" style="width:190px;" onclick="insertarFilaDetalle();" />
			</div>

			<br />
			
			<br />
			
		</div>
	</div>
	<div class='jig_fin_de_pagina'>
	<!-- IE falla sin este comentario -->
	</div>
<div class="inno">
	<div class="jig_borde">
		<div class="jig_contenido" id="resumen_datos">
			<table style="width:100%;">
				<tr>
					<td>
						<table class="jig_formsmall" id="impuestos" style="padding:0;margin:0;text-align:left;">
							<tr>
								<th style='padding:0px;'></th>
								<td style='padding:0px;'>Detalle</td>
								<td style='padding:0px;'>Base<br />Imponible</td>
								<td style='padding:0px;text-align:center;'>Alicuota<br />%</td>
								<td style='padding-left:12px;'>Importe</td>
								<td style='padding:0px;'></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'>
								<input type='hidden' name='impuestoCodigo' value="1" />
								<input type='hidden' name='impuestoDescripcion' value="Per./Ret. de Impuesto a las Ganancias" />Per./Ret. de Imp. a las Ganancias: </th>
								<td style='padding:0px;'>
								<input type="text" name="impuestoDetalle" id="impganancia" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible1' onkeyup='calcularImporteFilaImpuestos(1);' onchange='calcularImporteFilaImpuestos(1);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoAlicuota" id='impuesto_alicuota1' onkeyup='calcularImporteFilaImpuestos(1);' onchange='calcularImporteFilaImpuestos(1);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;' nowrap="nowrap"><span>$</span>
								 <input type="text" name="impuestoMonto" id='impuesto_monto1' onchange='limpiarBIyAFilaImpuestos(1);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'>
								<input type='hidden' name='impuestoCodigo' value="2" />
								<input type='hidden' name='impuestoDescripcion' value="Per./Ret. de IVA" />Per./Ret. de IVA: </th>
								<td style='padding:0px;'>
								<input type="text" name="impuestoDetalle" id="periva" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible2' onkeyup='calcularImporteFilaImpuestos(2);' onchange='calcularImporteFilaImpuestos(2);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoAlicuota" id='impuesto_alicuota2' onkeyup='calcularImporteFilaImpuestos(2);' onchange='calcularImporteFilaImpuestos(2);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span>
								 <input type="text" name="impuestoMonto" id='impuesto_monto2' onchange='limpiarBIyAFilaImpuestos(2);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;' nowrap="nowrap">
								<input type='hidden' name='impuestoCodigo' value="3" />
								<input type='hidden' name='impuestoDescripcion' value="Per./Ret. Ingresos Brutos" />Per./Ret. Ingresos Brutos: </th>
								<td style='padding:0px;'>
								<input type="text" name="impuestoDetalle" id="ingbrutos" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible3' onkeyup='calcularImporteFilaImpuestos(3);' onchange='calcularImporteFilaImpuestos(3);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoAlicuota" id='impuesto_alicuota3' onkeyup='calcularImporteFilaImpuestos(3);' onchange='calcularImporteFilaImpuestos(3);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span>
								 <input type="text" name="impuestoMonto" id='impuesto_monto3' onchange='limpiarBIyAFilaImpuestos(3);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'>
								<input type='hidden' name='impuestoCodigo' value="4" />
								<input type='hidden' name='impuestoDescripcion' value="Impuestos Internos" />Impuestos Internos: </th>
								<td style='padding:0px;'>
								<input type="text" name="impuestoDetalle" id="impinternos" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible4' onkeyup='calcularImporteFilaImpuestos(4);' onchange='calcularImporteFilaImpuestos(4);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoAlicuota" id='impuesto_alicuota4' onkeyup='calcularImporteFilaImpuestos(4);' onchange='calcularImporteFilaImpuestos(4);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span>
								 <input type="text" name="impuestoMonto" id='impuesto_monto4' onchange='limpiarBIyAFilaImpuestos(4);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<th style='padding-right:3px;height:23px;'>
								<input type='hidden' name='impuestoCodigo' value="5" />
								<input type='hidden' name='impuestoDescripcion' value="Impuestos Municipales" />Impuestos Municipales: </th>
								<td style='padding:0px;'>
								<input type="text" name="impuestoDetalle" id="impmunicipales" onkeyup='calcularTotalImpuestos();' style='width:100px;' maxLength='25' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoBaseImponible" id='impuesto_baseimponible5' onkeyup='calcularImporteFilaImpuestos(5);' onchange='calcularImporteFilaImpuestos(5);' style='width:70px;' maxLength='16' /></td>
								<td style='padding:0px;'>
								<input type="text" name="impuestoAlicuota" id='impuesto_alicuota5' onkeyup='calcularImporteFilaImpuestos(5);' onchange='calcularImporteFilaImpuestos(5);' style='width:45px;' maxLength='7' /></td>
								<td style='padding:0px;'><span>$</span>
								 <input type="text" name="impuestoMonto" id='impuesto_monto5' onchange='limpiarBIyAFilaImpuestos(5);' onkeyup='calcularTotalImpuestos();' style="width:70px;" /></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"><span style="font-size:10px;font-weight:bold;display:none;padding:0px;" id="labelotrosimpuestos">Otros:</span></td>
							</tr>
							<tr>
								<th colspan="4" style='padding:0px;'><b>Importe Otros Tributos:</b></th>
								<td nowrap="nowrap" style='padding:0px;'><span>$</span>
								 <input type="text" name="impTotalImpuestos1" id="imptotalimpuestos1" class='jig_readonly' readonly='readonly' style="width:70px;font-weight:bold;text-align:right;" />
							</tr>
							<tr>
								<td colspan="2"></td>
								<td colspan="3" align="center"><br />
								<input type="button" value="Agregar otro Tributo" name="agregarImp" onclick="document.getElementById('labelotrosimpuestos').style.display = 'inline';insertarFilaImpuesto();" style='text-align:center;width:190px;' /></td>
								<td></td>
							</tr>
							
						</table>
					</td>
					<td style="vertical-align:top;height:100%;">
						<table class="jig_formsmall" style="height:100%;margin-left:auto;">
							<tr>
								<td style="vertical-align:top;">
									<table class="jig_formsmall" id="importes">
									
										<tr>
											<th colspan="2" style="padding:0;margin:0;">Importe Neto no Gravado: </th><td nowrap="nowrap"><span>$</span>
											 <input type="text" name="impNetoNoGravado" id="impnetonogravado" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">Importe Exento: </th><td><span>$</span>
											 <input type="text" name="impExento" id="impexento" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">Importe Neto Gravado: </th><td><span>$</span>
											 <input type="text" name="impNetoGravado" id="impnetogravado" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">IVA 27%: </th><td><span>$</span>
											 <input type="text" name="impIVA27" id="impiva27" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">IVA 21%: </th><td><span>$</span>
											 <input type="text" name="impIVA21" id="impiva21" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										<tr>
											<th colspan="2">IVA 10,5%: </th><td><span>$</span>
											 <input type="text" name="impIVA105" id="impiva105" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										
										<tr>
											<th colspan="2">IVA 5%: </th><td><span>$</span>
											 <input type="text" name="impIVA5" id="impiva5" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										
										<tr>
											<th colspan="2">IVA 2,5%: </th><td><span>$</span>
											 <input type="text" name="impIVA2" id="impiva2" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>
										
										<tr>
											<th colspan="2">IVA 0%: </th><td><span>$</span>
											 <input type="text" name="impIVA0" id="impiva0" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" value="0.00" /></td>
										</tr>
										<!--<tr>
											<th colspan="2">Crédito IVA por bonificaciones: </th><td><span>$</span>
											 <input type="text" name="creditoIVA" id="creditoiva" class='jig_readonly' readonly='readonly' style="width:80px;text-align:right;" /></td>
										</tr>-->
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="jig_formsmall" style="float:right;">
										<tr>
											<th><b>Importe Otros Tributos: </b></th><td nowrap="nowrap"><span>$</span> <input type="text" name="impTotalImpuestos2" id="imptotalimpuestos2" class='jig_readonly' readonly='readonly' style="width:80px;font-weight:bold;text-align:right;" /></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="jig_formsmall" style="float:right;">
										<tr>
											<th><b>Importe Total: </b></th><td nowrap="nowrap"><span>$</span>
											 <input type="text" name="impTotal" id="imptotal" class='jig_readonly' readonly='readonly' style="width:80px;font-weight:bold;text-align:right;" /></td>
										</tr>
										
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
	<div class='jig_fin_de_pagina'>
	<!-- IE falla sin este comentario -->
		
	</div>
	
	<div class="jig_borde">
		<div class="jig_contenido" id="otros_datos">
			<table class="jig_formsmall" style="margin-left:auto;margin-right:auto;">
				<tr>
					<td style="text-align:right;">Precision Campo Cantidad</td><td>
						<select style="width:90px;" name="numDecimalesCantidad" id="numdecimalescantidad">
							<option value='2'>&nbsp;2 decimales</option>
							<option value='4'>&nbsp;4 decimales</option>
							<option value='6'>&nbsp;6 decimales</option>
						</select>
					</td>
					<td style="text-align:right;">Campo Precio Unitario</td><td>
						<select style="width:90px;" name="numDecimalesPrecioUnit" id="numdecimalespreciounit">
							<option value='2'>&nbsp;2 decimales</option>
							<option value='4'>&nbsp;4 decimales</option>
							<option value='6'>&nbsp;6 decimales</option>
						</select>
					</td>
					<td style="width:100px;">&nbsp;</td>
				</tr>
			</table>
		</div>
	</div>
	<div class='jig_fin_de_pagina'>
	<!-- IE falla sin este comentario -->
	</div>
	
	<br />

	<div class="boton">
	<input type="button" value="&lt; Volver" onclick="parent.location.href='index.php'"" />&nbsp;<input type="button" value="Imprimir..." onclick="window.print();" style="width:150px;" id="btngenerar" onclick="parent.location.href='procesarFact.php'">
	</div>

	<br />
	<br />
</form>

<table style="margin-left:auto;margin-right:auto;">
	<tr><td><div class="jig_separador_botones">
	<!-- IE falla sin este comentario -->
	</div></td></tr>

	<!-- <tr><td>
	<input type="button" value="Menu Principal" onclick="parent.location.href='index.php'" /></td></tr> -->

</table>

<br />


<script type="text/javascript">

insertarFilaDetalle();

</script>

<script type="text/javascript">

	function confirmar()
	{
		if (confirm("Usted esta por generar un nuevo comprobante.\n\n Confirma la Operacion?"))
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


<script type="text/javascript">

	var simboloMoneda = "$";
	var tipoCambio = 1;

	var cuitRepresentada = "null";

</script>

<script>


	function calcularTotalDetalle(fila)
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

</script>


<script>
	

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
	
	c[0].innerHTML = "<input type='text' name='detalleCodigoArticulo' maxlength='19' /><input type='hidden' name='detalleNroLinea' />";
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' />";
	/*if (navigator.userAgent.indexOf("MSIE")>=0)
		c[1].innerHTML = "<textarea name='detalleDescripcion' maxlength='30' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;overflow:visible;' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>";
	else*/
	
	//c[1].innerHTML = "<input type='text' name='detalleDescripcion' maxlength='200' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:120px;' onFocus='ajustarAnchoFocus(this);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);' />";
	
	c[1].innerHTML = "<textarea name='detalleDescripcion' id='detalle_descripcion"+numFilasDetallesMax+"' style='width:200px;overflow:auto;"+(navigator.userAgent.indexOf("Firefox")?"height:19px;":"")+"' rows='1' onFocus='ajustarAnchoFocus(this);' onKeyPress='return limitarLongitudTextArea(event,this,4000);' onKeyUp='ajustarAnchoFocus(this);' onBlur='ajustarAnchoBlur(this);'></textarea>"; // Si, Firefox tiene un bug horrible: no puede hacer textareas con una sola fila, por eso tengo que simularla con el height:19px;
	
	c[2].innerHTML = "<input type='text' name='detalleCantidad' maxlength='19' id='detalle_cantidad"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' value='1' />";
	c[3].innerHTML = "<select type='text' name='detalleMedida' id='detalle_medida"+numFilasDetallesMax+"' style='width:95px;'><option value='7' style='color:#888;'>seleccionar...</option>"+htmlUnidadesMedida+"</select>";
	c[4].innerHTML = "<input type='text' name='detallePrecio' maxlength='19' id='detalle_precio"+numFilasDetallesMax+"' onkeyup='calcularSubtotalDetalle("+numFilasDetallesMax+");' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' />"; //TODO: agregar autocomplete='off' para que los navegadores no guarden el historial de datos numéricos, sólo permitirlo en código y descripción. Por ahora lo dejo para que funcione el history.back() ya que con autocomplete='off' borra el valor al volver a la página
	c[5].innerHTML = "<input type='text' name='detallePorcentajeBonificacion' maxlength='6' id='detalle_porcentaje"+numFilasDetallesMax+"' value='0' onchange='calcularImporteBonificacionDetalle("+numFilasDetallesMax+");' size='3' maxlength='6' />";//TODO: agregar autocomplete='off'
	c[6].innerHTML = "<input type='text' name='detalleImporteBonificacion' maxlength='14' id='detalle_importe_bonificacion"+numFilasDetallesMax+"' onchange='calcularPorcentajeBonificacionDetalle("+numFilasDetallesMax+");' /><input type='hidden' name='detalleTipoBonificacion' id='detalle_tipo_bonificacion"+numFilasDetallesMax+"' value='porcentaje' />";//TODO: agregar autocomplete='off'
	c[7].innerHTML = "<input type='text' name='detalleSubtotal1' id='detalle_subtotal1"+numFilasDetallesMax+"' readonly='readonly' />";
	c[8].innerHTML = "<select name='detalleTipoIVA' id='detalle_tipo_iva"+numFilasDetallesMax+"' onchange='calcularSubtotalDetalle("+numFilasDetallesMax+");' style='width:70px;'> <option value='0' style='color:#888;'>seleccionar...</option><option value='1'>&nbsp;No gravado</option><option value='2'>&nbsp;Exento</option><option value='3'>&nbsp;0%</option><option value='9'>&nbsp;2,5%</option><option value='8'>&nbsp;5%</option><option value='4'>&nbsp;10,5%</option><option value='5' selected='selected'>&nbsp;21%</option><option value='6'>&nbsp;27%</option></select>";
	c[9].innerHTML = "<input type='text' name='detalleImporteIVA' id='detalle_importe_iva"+numFilasDetallesMax+"' readonly='readonly' />";
	c[10].innerHTML = "<input type='text' name='detalleSubtotal2' id='detalle_subtotal2"+numFilasDetallesMax+"' readonly='readonly' />";
	c[11].innerHTML = "<span style='width:100%;text-align:center;'><input type='button' name='Eliminar' value='X' style='width:31px;text-align:center;color:#FF0000;font-size:10px;' onclick='borrarFilaDetalle("+numFilasDetallesMax+");' /></span>";
	c[11].setAttribute("style","text-align:center;padding:0px;");
}


</script>

<!-- Contenido (fin) -->


		</div>
		<br />

		<?php include 'footer.php'; ?>
		
	</body>


</html>