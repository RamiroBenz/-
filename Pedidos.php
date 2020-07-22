
<?php require('cn.php');
	$vista="SELECT * FROM Pedidos";

	$resultado=$conexion->query($vista);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pedidos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">

<style type="text/css">
		
	

	/* form .formulario #Boton .Boton {
		font-family: verdana;
		font-size: 30px;
		width: 550px;
		background: rgba(0,0,0,0.4);
		margin: 50px;
		
		float: left;
		font-color: #080808;
		padding:10px 20px;
		box-sizing: border-box;
		margin-top: 20px;
		border-color: white;
	}
	 */
	

	/*solo para botones*/

	/* div .formulario {
		margin: 50px;
	
	}
	
	input {
		font-family: bold;
		width: 100%;
		margin-bottom: 20px;
		padding: 7px;
		box-sizing: border-box;
		font-size: 37px;
		border-radius: 5px;
	
	}
	 */
	footer {
		background-color: #AB9999;

	} 
/* 	h1{
	text-align: center;
	
	margin-bottom: 20px;
} */
	/* .button{
		width: 80%;
		font-size: 30px;
	}
	 */
		h1 {
			color:#030303;
		}

	table{
		
		font-size: 25px;
		border-color: #030303;
		font-family: Arial bold;
	}

	body tbody table {
		width: 190px;
	}


	</style>
</head>
<body>

	<?php include('menu.php'); ?>
	
	<br><br>
	<div align="center">
	<?php include 'reloj.php'; ?>
	<br>
	<br>
	<br>
		<img src="img/Pedidos.jpg" alt="" width="400px">
	</div>
	<pre>
	<div align="center">	
	<br>

	<br>
	<br>
	<br>
	<br>

	
		<h1><u>Pedidos</u></h1>
	</div>
<br>
<br>
<br>
<br>

	<div id="formulario" align="center" margin="50px">

	<form action="ProcesarPedidos.php" name="Pedidos" method="post" class="formulario">

		<h1 class="formulario__titulo">Pedidos</h1>
		<br>
		<br>

		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Num.Ped" placeholder="Num.Ped"  /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="text" class="formulario__input" name="Fecha" placeholder="Fecha" /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Empresa" placeholder="Empresa" /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="text" class="formulario__input" name="Codigo" placeholder="Codigo" />		<br>

		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Descripcion" placeholder="Descripcion" /><br>

		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Cantidad" placeholder="Cantidad" /><br>

		<label for="" class="formulario__label">Precio</label>
		<input type="numero" class="formulario__input" name="Precio" placeholder="Precio" /><br>
			
		<input type="submit" value="Guardar" class="formulario__submit" /><br>

	</form>
		
	</div>

	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>

	<div id="cuadro" align="center">
	<table id="lookup" class="table table-bordered table-hover" width="80%" border="2px" align="center">
		<thead>
			<tr class="centro">

				<td><b>Pedido</b></td>
				<td><b>Fecha</b></td>
				<td><b>Empresa</b></td>
				<td><b>Codigo</b></td>
				<td><b>Descripcion</b></td>
				<td><b>Cantidad</b></td>
				<td><b>Precio</b></td>
				<td><b>Modificar</b></td>
				<td><b>Eliminar</b></td>
			</tr>
			<tbody>
				<?php while($row=$resultado->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['pedido']?></td>
					<td><?php echo $row['fecha']?></td>
					<td><?php echo $row['empresa']?></td>
					<td><?php echo $row['Codigo']?></td>
					<td><?php echo $row['Descripcion']?></td>
					<td><?php echo $row['Cantidad']?></td>
					<td><?php echo $row['Precio']?></td>
					<td><a href="modificarPed.php?id=<?php echo $row['id']; ?> ">Modificar</a></td>
						<td><a href="vista_pedidos.php">Eliminar</a></td>
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
	<pre>
		
	</pre>

	<pre>
		
	</pre>
	<pre>
		
	</pre>

		
<div align="center">
<img src="img/contratapa.jpg" alt="" width="650px">
		
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