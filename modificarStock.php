<?php 
	

	
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar Stock</title>


	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">

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
		font-size: 35px;
		border-color: #030303;
		font-family: Arial bold;
	}

	</style>



</head>
<body>

<?php include("menu.php"); ?>

	<div align="center">
	<br>
	<br><br>
	<?php include 'reloj.php'; ?>
	<br>
	<br>

		<h1><u><b>Modificar Stock</b></u></h1>
	</div>
<br>
<br>
<br>
<div align="center">
<img src="img/Gestion_de_stock.jpg" alt="" width="500px">
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
	
		$vista= " SELECT * FROM Stock WHERE id='$id'";

		$resultado=$conexion->query($vista);

		$row=$resultado->fetch_assoc();

		 ?>


	<form action="modificarProceso.php?id=<?php echo $row['id']; ?> " name="Stock" method="post" class="formulario">
		
	<h1 class="formulario__titulo"><b><u>Modificar Stock</u></b></h1>
	<br>
		

		
			<br>

		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Codigo" placeholder="Codigo" value=" <?php echo $row['Codigo']; ?> " size="10"/><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="text" class="formulario__input" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']; ?>" size="30" /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']; ?>" size="5" /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="text" class="formulario__input" name="Empresa" placeholder="Empresa" value="<?php echo $row['Empresa']; ?>" size="40" /><br>
			<br>
			
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