<?php require('cn.php');

	$vista="SELECT * FROM Stock";

	$resultado=$conexion->query($vista);
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Stock</title>


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
		<h1><u><b>Gestion de Stock</b></u></h1>
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

<?php 

$codigo=$_POST['Codigo'];


 ?>

	<div id="formulario" align="center">


	<form action="" name="Stock" method="post" class="formulario">
	<h1 class="formulario__titulo"><b><u>Gestion de Stock</u></b></h1>
	
		<label for="" class="formulario__label"></label>
		<?php echo $_POST['Codigo']; ?><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="text" class="formulario__input" name="Descripcion" placeholder="Descripcion" /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="numero" class="formulario__input" name="Precio" placeholder="Precio" /><br>
			<br>
			
		<label for="" class="formulario__label"></label>
		<input type="text" class="formulario__input" name="Empresa" placeholder="Empresa" /><br>
			<br>
			
		<input type="submit" value="Modificar" class="formulario__submit" /><br>

	</form>

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
	<pre>
		
	</pre>


		<?php 
			include 'cn.php';


			mysql_query("UPDATE Stock 
				set descripcion='$_POST[descripcion]', precio='$_POST[precio]' 
				where codigo='$_POST[codigo]'", $cn) or die(mysql_error());
			echo "Actualizacion correcta..";

		 ?>


	<pre>
		
	</pre>
	<pre>
		
	</pre>

		<img src="img/fotoPortada.jpg" alt="" width="500px">


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

	<?php include('footer.php'); ?>

	<!-- <footer><pre>
	<font size="2" /*color="#FFFFFF"*/ face="time new roman"> <p align="center"><b> Nuestro contacto es via telefonica al 4572-3010, via e-mail a <a href="lolamorenalenceria49@gmail.com">		"lolamorenalenceria49@gmail.com".</a>></p></b> </font>
	</pre></footer> -->


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