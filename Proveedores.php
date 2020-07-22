<?php require('cn.php');
	$vista="SELECT * FROM Proveedores";

	$resultado=$conexion->query($vista);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proveedores</title>

	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

<style type="text/css">
		
	h1{
		font-family: helvetica, monospace;
		font-size: 1.4em;
	}

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

	<?php include('menu.php'); ?>
	<br>
	<br>
	<br>
	<div align="center">
	<?php 	include 'reloj.php'; ?>
	<br><br>
	</div>
		<div align="center">
		<h1><b><u>Lista de Proveedores</u></b></h1>
	
	<br>
	<br>
	<br>

	
	<img src="img/Proveedores.png" alt="" width="400px">	
	</div>

	</pre>
	<pre>
		
	</pre>

	
<br>
<br>
<br>
<br>

	

	

	<form action="ProcesarProveedores.php" name="Proveedores" method="post" class="formulario">
	  <h1 class="formulario__titulo">Proveedor</h1>
	  <br>
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
		
	<br>
	<br>
	<br>
	<br>


	<pre>
		
	</pre>
	<div id="cuadro" align="center">
	<h2><b><u>Lista de Proovedores</u></b></h2>
	<br>
	<br>
	<table id="lookup" class="table table-bordered table-hover" width="80%" border="2px">
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
					<td><a href="modificarProv.php?id=<?php echo $row['id']; ?> ">Modificar</a></td>
						<td><a href="vista_Prov.php">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</thead>
	</table>
	</div>	

<br>
<br>
<br>
<br>

	<pre>
		
	</pre>


	<pre>
		
	</pre>
	<div align="center">
		<img src="img/Remera Lola.jpg" alt="">

	</div>

	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>

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

	<?php include('footer.php'); ?>
	
</body>
</html> 