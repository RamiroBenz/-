<?php include 'cn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sueldo</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">

	<style type="text/css">
		
	h1{
		color:#030303;
	}

	input{
		margin: 10px;
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

	td{
		font-size: 25px;
	}
	.formulario_label {
		  padding-left: 15px;
		  position: absolute;
		  
		  color: #030303;
		  transition: all 0.2s;
		}

	</style>

</head>
<body>
<?php include 'menu.php'; ?>
<br>
<br>
<br>
<br>
<br>
<div align="center">
	<form action="crear.php" method="post" id="formulario">
	<br>
		<h1>Calcular el sueldo de cada empleado..</h1>
		<br><br>
		<label for="" class="formulario_label">Nombre</label>
		<?php 
				$query= "SELECT id, nombre FROM empleados";
	 			$resultado = $conexion->query($query);

		?>
		<select name="nombre" id="" class="formulario__input">
			<option value="">Seleccionar..</option>
			<?php while($row= $resultado->fetch_assoc()){?>
			<option value="<?php  echo $row['id'];  ?>"><?php echo $row['nombre']; ?></option>
			<?php } ?>
		</select>
		
		<label for="" class="formulario_label">Horas</label>
		<input type="text" name="horas" placeholder="Total de Horas" class="formulario__input">
		<br>

		<label for="" class="formulario_label">Precio</label>
		<input type="text" name="precio" placeholder="Total de Horas" class="formulario__input">
		<br>
		
		<br>
		<br>
		<input type="submit" value="Calcular" class="formulario__submit" onclick="">
		<br><br>
	</form>
	</div>



<br>
<br>
<br>
<br>
<br>

<div align="center">
	<img src="img/Empleados.jpg" alt="" width="500">
</div>
<br>
<br>
<br>

	<?php include 'footer.php'; ?>
	
</body>
</html>