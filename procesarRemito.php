<?php 
require 'cn.php';

$vista="SELECT * FROM remito";

$resultado=$conexion->query($vista);


$numRem = $_POST['numRem'];
$fecha = $_POST['fecha'];

$cliente = $_POST['Cliente'];
$direccion = $_POST['Direccion'];
$localidad = $_POST['Localidad'];
$provincia = $_POST['Provincia'];
$iva = $_POST['iva'];
$cuit = $_POST['cuit'];

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];

?>

 <html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
		<!-- Para evitar que el iPad interprete CUITs y CUILs como numeros telefonicos: -->
		<meta name="format-detection" content="telephone=no">
		<!-- Para no desperdiciar espacio en los costados en iPad/iPhone/Android: -->
		<meta name="viewport" content="width=800">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

			<title>procesarRemito</title>
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
		background-color:  #fff;
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
		<div id="encabezado" style=" padding-top: 150px; display: flex;">
			
			

			<table id="encabezado_usuario_container">
				<tr>
					<td>
						<table id="encabezado_usuario1">
						
							
							<tr align="right" style="padding-right: 100px; width: 90%; padding-top: 80px;">
							
							<td><?php echo $row['fecha'];  ?></td>
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
							<td>
							<?php echo $row['Cliente'];  ?>
								
														</td>
							<tr align="left" style="padding-right: 100px; width: 70%; padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
							
								<td>
								
								
								 
								<?php echo $row['Direccion'];  ?>
									
								</td>
							</tr>

							<tr align="left" style="padding-right: 100px; width: 70%; padding-top: 30px; padding-left: 20px; padding-bottom: 30px;">
							
								<td>
								<?php echo $row['iva'];  ?>
								</td>
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
							
							<td>
							<?php echo $row['Localidad']; ?>
							</td>
							</tr>
							<tr align="right" style="padding-left: 100px; width: 70%; padding-top: 30px; padding-bottom: 30px;">
							
							<td>
								 <?php echo $row['Provincia'] ?> 
								
							</td>
							</tr>
							<tr align="right" style="padding-left: 100px; width: 70%; padding-top: 30px; padding-bottom: 30px;">
							
								<td>
								
								<?php echo $row['cuit']; ?>
								</td>
							</tr>
							
						</table>
					</td>
				</tr>
			</table>
			
			
			
		</div>
		<div id="cuadro" align="center" >
	<table width="70%" border="2px">
		<thead>
			<tr class="centro">
				<td><b>Cantidad</b></td>
				<td><b>Codigo</b></td>
				<td><b>Descripcion</b></td>
				<td><b>CantCajas</b></td>
			</tr>

			<tbody>
				<?php while($row=$resultado->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['Cantidad'] ?></td>
					<td><?php echo $row['Codigo'] ?></td>
					<td><?php echo $row['Descripcion'] ?></td>
					<td><?php echo $row['cantCajas'] ?></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</thead>
	</table>
	</div>
	</body>


	</html>	