<?php 
	

	
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Pedidos..</title>


	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

	<style type="text/css">
		
	h1{
		color:#030303;
	}

	input{
		margin: 30px;
	}

	/*solo para botones*/

	div #formulario {
		background-color: #8F8686;
	}

	input #boton{
		padding: 5px 50px;
		color:white;
		font-size: 1em;
		border:0px;
		border-radius: 5px;

	}

	footer {
		background-color: #AB9999;

	} 
	
	table{
		width: 100%;
		font-size: 20px;
		border-color: #030303;
		font-family: Arial bold;
	}

	</style>



</head>
<body>

<?php include("menu.php"); ?>
<br><br>
<?php include 'reloj.php'; ?>
	<div align="center">
	
	<br>
		<h1><u><b>Modificar Pedidos</b></u></h1>
	</div>
<br>
<br>
<br>
<div align="center">
<img src="img/Pedidos.jpg" alt="" width="500px">
</div>
<br>
<pre>
	
</pre>
<pre>
	
</pre>
<pre>
	
</pre>
<pre>
	
</pre>

	<div id="formulario" align="center">
	<?php require('cn.php');
	
		$id = $_REQUEST['id'];
	
		$vista= " SELECT * FROM Pedidos WHERE id='$id'";

		$resultado=$conexion->query($vista);

		$row=$resultado->fetch_assoc();

		 ?>


	<form action="modificarProcesoPed.php?id=<?php echo $row['id']; ?> " name="Clientes" method="post" class="formulario">
		
	<h1 class="formulario__titulo"><b><u>Modificar Pedidos</u></b></h1>
	<br>
		

		
			<br>

			<label for="" class="formulario__label">Numero Ped.</label>
		<input type="numero" class="formulario__input" name="Num.Ped" placeholder="Num.Ped" value=" <?php echo $row['pedido']; ?> " /><br>
			<br>
			
		<label for="" class="formulario__label">Fecha</label>
		<input type="text" class="formulario__input" name="Fecha" placeholder="Fecha" value=" <?php echo $row['fecha']; ?> " /><br>
			<br>
			
		<label for="" class="formulario__label">Empresa</label>
		<input type="numero" class="formulario__input" name="Empresa" placeholder="Empresa" value=" <?php echo $row['empresa']; ?> " /><br>
			<br>
			
		<label for="" class="formulario__label">Codigo</label>
		<input type="text" class="formulario__input" name="Codigo" placeholder="Codigo" value=" <?php echo $row['Codigo']; ?> " />		<br>

		<label for="" class="formulario__label">Descripcion</label>
		<input type="numero" class="formulario__input" name="Descripcion" placeholder="Descripcion" value=" <?php echo $row['Descripcion']; ?> " /><br>

		<label for="" class="formulario__label">Cantidad</label>
		<input type="numero" class="formulario__input" name="Cantidad" placeholder="Cantidad" value=" <?php echo $row['Cantidad']; ?> " /><br>

		<label for="" class="formulario__label">Precio</label>
		<input type="numero" class="formulario__input" name="Precio" placeholder="Precio" value=" <?php echo $row['Precio']; ?> " /><br>
			


		<input type="submit" value="Guardar" class="formulario__submit" /><br>
		<br>

	</form>

	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<label for="" class="formulario__label"></label>
	<input type="text" class="formulario__input" placeholder="Buscar" />
		<br>
			
			<input type="submit" class="formulario__submit" value="Buscar..">
	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>
</body>
</html>