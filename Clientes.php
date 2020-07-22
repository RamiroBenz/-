<?php require('cn.php');

	$vista = "SELECT * FROM Clientes";

	$resultado=$conexion->query($vista);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

	<title>Clientes</title>

<style type="text/css">
	
	input{
		margin: 50px;
	}

	/*solo para botones*/

	div #formulario {
		background-color: #8F8686;
	}
	label{
		font-size: 25px;
		font-family: bold;
	}

	form #Boton .Boton{
		padding: 20px;
		font-family: Arial bold;
		padding: 5px 50px;
		color:white;
		font-size: 25px;
		border:10px;
		border-radius: 5px;

	}

	footer {
		background-color: #AB9999;

	} 

	#cuadro .cuadro{
		border-color: black;
		border-radius: 15px;
		padding-right: 50px;
	}


	
	table{
		width: 100%;
		font-size: 25px;
		border-color: #030303;
		font-family: Arial bold;
	}

	h1{
		font-family: helvetica, monospace;
		font-size: 1.4em;
	}
	


	</style>
</head>
<body>

<?php include ("menu.php"); ?>
	<pre>
		
	</pre>

	<div align="center">
	<?php include 'reloj.php';
 ?>
		  <br>
		<br>
		<br>
	<img src="img/Clientes.jpg" alt="" width="400px">
	<br>
	<br>
	<br>
		
	
		<h1><u>Clientes</u></h1>
		<br>
		<br>
		
	</div>	
	
<br>
<br>
<br>
<br>

	<div id="formulario" align="center">

	<form action="ProcesarClientes.php" class="formulario">
	  <h1 class="formulario__titulo">Clientes</h1>
	  <br>
	  <br>
	  
	  <input type="text" class="formulario__input">
	  <label for="" class="formulario__label">Empresa</label>
	  <input type="text" class="formulario__input">

	  <label for="" class="formulario__label">Direccion</label>
	  <input type="text" class="formulario__input">

	  <label for="" class="formulario__label">Localidad</label>
	  <input type="text" class="formulario__input">
	  
	  <label for="" class="formulario__label">Telefono</label>
	  <input type="text" class="formulario__input">
	  
	  <label for="" class="formulario__label">C.U.I.T.</label>
	  <input type="submit" class="formulario__submit">
	
	</form>
		
	</div>

	<pre>
		
	</pre>
	<div id="cuadro" align="center">
	<h2><b><u>Lista de Clientes</u></b></h2>
	<br>
	<br>
	<br>
		<table id="lookup" class="table table-bordered table-hover" width="80%" border='1' cellpadding='10'>
			<thead>
				<tr class="centro">
					<td><b>ID</b></td>
					<td><b>Empresa</b></td>
					<td><b>Direccion</b></td>
					<td><b>Localidad</b></td>
					<td><b>Telefono</b></td>
					<td><b>C.U.I.T.</b></td>
					<td><b>Modificar</b></td>
					<td><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['Empresa']?></td>
						<td><?php echo $row['Direccion']?></td>
						<td><?php echo $row['Localidad']?></td>
						<td><?php echo $row['Telefono']?></td>
						<td><?php echo $row['cuit']?></td>
						<td><a href="modificarCliente.php?id=<?php echo $row['id']; ?> ">Modificar</a></td>
							<td><a href="vista_clientes.php">Eliminar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</thead>
		</table>
	</div>	


	<pre>
		
	</pre>


	<pre>
		
	</pre>
	<div align="center">
		<img src="img/Pijamas_Verano.jpg" alt="" width="450px">
	</div>
	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>


	<?php include('footer.php'); ?>

	<script>
	
	var inputs = document.getElementsByClassName('formulario__input');
	for (var i = 0; i < inputs.length; i++) {
	  inputs[i].addEventListener('keyup', function(){
	    if(this.value.length>=1) {
	      this.nextElementSibling.classList.add('fijar');
	    } else {
	      this.nextElementSibling.classList.remove('fijar');
	    }
	  });
	}


</script>
	
</body>
</html> 