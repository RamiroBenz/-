<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Presupuesto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="estiloPre.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<style>
		.empresa {
        font-family: 'Yatra One', bold;
        color: orange;
    }
    .frase {
        font-family: 'Indie Flower', cursive;
        color: #13E73D;
        /*color: light blue;*/
        background-color: #f1f1f1;
        border-color:top 1px blue;
        font-size: 18px;
    }
	</style>
</head>
<body>
<?php include 'menu.php'; ?>
<div id="bg">
  <div class="module">
    <ul> 
      <li class="tab activeTab"><img src="Lola_Morena.jpg" alt="" width="300" class="icon"/></li>
      <li class="tab" ><img src="https://i.imgur.com/ZsRgIDD.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="https://i.imgur.com/34Q50wo.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="https://i.imgur.com/LCCJ06E.png" alt="" class="icon"/></li>
    </ul>
    
    <form class="form" method="post" action="">
      <input type="text" id="tela" placeholder="Metro de Tela" class="textbox" />
      <input type="text" id="elastico" placeholder="Metro de Elastico" class="textbox" />
      <input type="text" id="hilo" placeholder="hilo" class="textbox" />
      <input type="text" id="avios" placeholder="Avios" class="textbox" />

      <input type="button" value="Enviar-->>" class="button" onclick="enviar();" />


    </form>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer2.php'; ?>

<script>
	function enviar(tela,elastico,hilo,avios){
		var tela = parseFloat(document.getElementById("tela").value);
		var elastico = parseFloat(document.getElementById("elastico").value);
		var hilo = parseFloat(document.getElementById("hilo").value);
		var avios = parseFloat(document.getElementById("avios").value);
		resultado = tela+elastico+hilo+avios;

		alert("El resultado es:"+resultado);
	}
</script>
	
</body>
</html>