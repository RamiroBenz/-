<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estiloForm.css">

	<style>
		* {
 		 box-sizing: border-box;
		}
		body {
			/* margin-top: 60px;
			padding-top: 50px; */
		  font-family: sans-serif;

		}

		h1 {
			color:#fff;
		}
		



	</style>

</head>
<body>
<?php include('menu.php'); ?>

<div align="center">
	<h1>Bienvenidos al mundo de Lola Morena...</h1>

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
<div align="center">
	<img src="img/Lola_Morena.jpg" alt="" border="1px">
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
<pre>
	
</pre>

	<form action="" class="formulario">
	  <h1 class="formulario__titulo">Contáctenos</h1>
	  <br>
	  <br>
	  <br>
	  <input type="text" class="formulario__input">
	  <label for="" class="formulario__label">Nombres</label>
	  <input type="text" class="formulario__input">

	  <label for="" class="formulario__label">Correo</label>
	  <input type="text" class="formulario__input">
	  
	  <label for="" class="formulario__label">Teléfono</label>
	  <input type="text" class="formulario__input">
	  
	  <label for="" class="formulario__label">Mensaje</label>
	  <input type="submit" class="formulario__submit">
	
	</form>



<br>
<br>
<br>
<br>
<br>
<br>
<footer>
	


	<h5 align="center">R&B Design Web &copy; 2017</h5>
</footer>

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