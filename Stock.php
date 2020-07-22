<?php require('cn.php');

	$tamagno_paginas=3;

	$pagina = 1;

	$pagina_desde = ($pagina-1)*$tamagno_paginas;

	$vista="SELECT * FROM Stock /*limit 0,3*/";

	$resultado=$conexion->query($vista);

	$num_filas=$resultado->rowCount();

	$total_paginas = ceil($num_filas/$tamagno_paginas);
	echo "Numero de registros de la consulta: " . $num_filas . "<br>"; 

	echo "Mostramos " . $tamagno_paginas . "Registros por pagina  <br> ";
	echo "Mostrando la pagina " . $pagina . "de " . $total_paginas . " <br> ";
	$resultado->closeCursor();
	$vista_limite= "SELECT * FROM Stock limit $pagina_desde,$tamagno_paginas";

 ?>


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Stock</title>


	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">




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
		width: 70%;
		font-size: 25px;
		border-color: #030303;
		font-family: Arial bold;
	}

	h1{
		font-family: helvetica, monospace;
		font-size: 1.5em;
	}
	.container-3{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
 
.container-3 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #fff;
}
.container-3 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-3 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-3 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-3 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-3 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
 
   -webkit-transition: all .55s ease;
  -moz-transition: all .55s ease;
  -ms-transition: all .55s ease;
  -o-transition: all .55s ease;
  transition: all .55s ease;
}
.container-3 input#search:focus, .container-3 input#search:active{
    outline:none; 
}
 
.container-3:hover .icon{
  margin-top: 16px;
  color: #93a2ad;
 
  -webkit-transform:scale(1.5); /* Safari and Chrome */
  -moz-transform:scale(1.5); /* Firefox */
  -ms-transform:scale(1.5); /* IE 9 */
  -o-transform:scale(1.5); /* Opera */
   transform:scale(1.5);
  }


	</style>


	<script>
		function modificar(Codigo){

			alert(Codigo);
			/*window.location="http://localhost/Inventario/modificar.php"+codigo;*/
		}
	</script>




</head>
<body>

<?php include("menu.php"); ?>

	<div align="center">
		<h1><u><b>Gestion de Stock</b></u></h1>
	
<br>

		<?php include 'reloj.php'; ?>
  	</div>
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
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="content">

			<div align="center">


			<form action="ProcesarStock.php" name="Stock" method="post" class="form-horizontal row-fluid">
			<h1><b><u>Gestion de Stock</u></b></h1>
				
				<div class="control-group">
				<label for="" class="control-label">Codigo</label>
				<div class="controls">
				<input type="numero" id="nombres" class="form-control span8 tip" name="Codigo" placeholder="Codigo" size="20" required="Codigo por favor" />
				</div>
				</div>
				<br>
					<br>
				<div class="control-group">	
				<label for="" class="control-label">Descripcion</label>
				<div class="controls">
				<input type="text" id="nombres" class="form-control span8 tip" name="Descripcion" placeholder="Descripcion" size="50" required="Descripcion por favor" />
				</div>
				</div><br>
					<br>
				<div class="control-group">	
				<label for="" class="control-label">Precio</label>
				<div class="controls">
				<input type="numero" id="nombres" class="form-control span8 tip" name="Precio" placeholder="Precio" size="10" required="El Precio por favor.." />
				</div>
				</div><br>
					<br>
				<div class="control-group">	
				<label for="" class="control-label">Empresa</label>
				<div class="controls">
				<input type="text" id="nombres" class="form-control span8 tip" name="Empresa" placeholder="Empresa" size="50" required="Que empresa es?" />
				</div>
				</div>
				<br>
					<br>
				
			</form>
			</div>
		</div>
		</div>
		</div>
		</div>

	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>
	
	</pre>
	<pre>
		
	</pre>
	<pre>
		
	</pre>
	<form action="" method="post">
		<div align="center" class="box">
		  <div class="container-3">
		      <span class="icon"><i class="fa fa-search"></i></span>
		      <input type="search" id="search" placeholder="Buscar" />
		  </div>
		</div>
	</form>
	<br>
	<br>
	<br>	
	<div id="cuadro" align="center" >
		<table id="lookup" class="table table-bordered table-hover" width="85%" border='1' cellpadding='10'>
			<thead>

				<tr class="centro">
					
					<td><b>Codigo</b></td>
					<td><b>Descripcion</b></td>
					<td><b>Precio</b></td>
					<td><b>Empresa</b></td>
					<td><b>Modificar</b></td>
					<td><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['Codigo']?></td>
						<td><?php echo $row['Descripcion']?></td>
						<td><?php echo $row['Precio']?></td>
						<td><?php echo $row['Empresa']?></td>
						<td><a href="modificarStock.php?id=<?php echo $row['id']; ?> ">Modificar</a></td>
						<td><a href="eliminar_stock.php">Eliminar</a></td>
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
	<br>
	<div align="center">

		<img src="img/fotoPortada.jpg" alt="" width="400px">


	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	
</body>
</html> 