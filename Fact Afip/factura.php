<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generar Factura</title>


<style type="text/css">
		
		<div class="row">
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  <div class="col-md-1">.col-md-1</div>
  </div>

  nav {
    top:-20px; /*Le damos una separación superior*/
    position: absolute; /*Convertimos el contenedor en posición absoluta*/
    left:0; /*Con left:0; y right:0; centramos el contenedor*/
    right:0;
 
    margin:20px auto;
    max-width:1000px;
    width:90%;
}
* {
	margin:0;
	padding:0;
}

body{
	background-color: #630A0A;
	color:#fff;
}
 
/*EN EL VIDEO HAY UN ERROR POR EL CUAL NO SE VISUALIZA EN GOOGLE CHROME,
EL CÓDIGO A CONTINUACIÓN YA ESTA CORREGIDO*/
 
header {
	margin-top:10px;
    width: 100%;
    overflow: hidden;
    height: 150px;
    position: relative;
}
 
nav {
    top:-20px;
    position: absolute;
    left:0;
    right:0;
	margin:20px auto;
	max-width:1000px;
	width:90%;
}
 
nav ul {
	list-style:none;
}
 
nav > ul {
	display:table;
	/*Quitamos el overflow hidden que estaba aqui*/
	width:100%;
	background:#000;
	position:relative;
}
 
nav > ul li {
	display:table-cell;
}
 
/*Sub-menu*/
nav > ul > li:hover > ul {
	display:block;
	height:100%;
}
 
nav > ul > li > ul {
	display:block;
	position:absolute;
	background:#000;
	left:0;
	right:0;
	overflow:hidden;
	height:0%;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}
 
nav > ul li a {
	color:#fff;
	display:block;
	line-height:20px;
	padding:20px;
	position: relative;
	text-align:center;
	text-decoration:none;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}
 
nav > ul > li > ul > li a:hover {
	background:#5da5a2;
}
 
nav > ul > li > a span {
	background:#174459;
	display:block;
	height:100%;
	width:100%;
	left:0;
	position:absolute;
	top:-55px;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-ms-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}
 
nav > ul > li > a span .icon {
	display:block;
	line-height:60px;
}
 
nav > ul > li > a:hover > span {
	top:0;
}
 
/*Colores*/
nav ul li a .primero {
	background:#0e5061;
}
 
nav ul li a .segundo {
	background:#5da5a2;
}
 
nav ul li a .tercero {
	background:#f25724;
}
 
nav ul li a .cuarto {
	background:#174459;
}
 
nav ul li a .quinto {
	background:#37a4d9;
}

header {
    margin-top:10px; /*Simplemente agregamos un margen*/
    width: 100%;
    height: 150px; /*Le damos un alto fijo al menu*/
    overflow: hidden; /*Agregamos un overflow hidden para que no se muestren elementos que sobrepasen los 150px de alto*/
    position: relative; /*Convertimos el menu en posición relativa porque mas adelante en el header > nav pondremos una posición absoluta*/
}
/* Para que se pueda achicar la pantalla en modo celular, tablet y se agrande como pc*/
@media screean and(max-width: 800px){
	header nav{
		width: 80%;
		height: 100%;
		left: -100%;
		margin: 0;
		position: fixed;

	}

	input{
		margin: 50px;
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
	


	</style>


	<script type="text/javascript">
 
$(function Agregar(){
	// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
	var Codigo=document.getElementById("Codigo").value;
	var Codigo=document.getElementById("Descripcion").value;
	var Codigo=document.getElementById("Cantoidad").value;
	var Codigo=document.getElementById("Precio").value;
	var Codigo=document.getElementById("SubTotal").value;
	

	//Creamos un objeto tr
	var TR = document.createElement("tr");
	

	//Creamos 4 elementos donde iran los datos y uno cuarto donde ira e boton eliminar
	var TD1 = document.createElement("td");
	var TD2 = document.createElement("td");
	var TD3 = document.createElement("td");
	var TD4 = document.createElement("td");
	var TD5 = document.createElement("td");
	var TD6 = document.createElement("td");

	//Asignamos los valores a nuestro TD por medio del atributo 

	TD1.innerHTML = Codigo;
	TD2.innerHTML = Descripcion;
 	TD3.innerHTML = Cantidad;
	TD4.innerHTML = Precio;
	TD5.innerHTML = SubTotal;

	//Ahora comntinuamos asignando el contenido de html a nuestro td numero 6
	TD6.innerHTML = "<input type='button' value='Eliminar' onClick= 'Elimina(this)' />"

	//Ahora proseguimos a agregar los hijos TD al padre TR
	TR.appendChild(TD1);
	TR.appendChild(TD2);
	TR.appendChild(TD3);
	TR.appendChild(TD4);
	TR.appendChild(TD5);
	TR.appendChild(TD6);	


	//Por Ultimo asignamos nuestro TR a la tabla con id
	document.getElementById("tablaProductos").appendChild(TR);

	//Limpiamos nuestros inputs para agregar mas datos , y ponemos el foco nuevamente
	document.getElementById("Codigo").value="";
	document.getElementById("Descripcion").value="";
	document.getElementById("Cantidad").value="";
	document.getElementById("Precio").value="";
	document.getElementById("SubTotal").value="";

	document.getElementById("Codigo").focus();	
});
	// Evento que selecciona la fila y la elimina 
	function Eliminar(NodoBoton){
		var TR = NodoBoton.parentNode.parentNode;
		document.getElementById("tablaProductos").removeChild(TR);
	};

 
</script>	







</head>
<body>

<header>
		<nav>
			<ul>
				<li><a href="Index.php"><span class="primero"><i class="icon icon-house"></i></span>Inicio</a></li>
				<li><a href="#"><span class="segundo"><i class="icon icon-tag"></i></span>Ventas</a>
					<ul>
						<li><a href="Stock.php">Stock</a></li>
						<li><a href="Pedidos.php">Pedidos</a></li>
						<li><a href="remitos.php">Remitos</a></li>
						<li><a href="factura.php">Facturas</a></li>
						<li><a href="cliente.php">Clientes</a></li>
					</ul>
				</li>
				<li><a href="#"><span class="tercero"><i class="icon icon-suitcase"></i></span>Compras</a>
					<ul>
						<li><a href="proveedores.php">Proveedores</a></li>
						<li><a href="ped_proveedores.php">Pedidos a Prov..</a></li>
						
					</ul>	


				</li>
				
						
					
				<li><a href="#"><span class="cuarto"><i class="icon icon-text"></i></span>Acerca de</a></li>
				<li><a href="#"><span class="quinto"><i class="icon icon-mail"></i></span>Contacto</a></li>
			</ul>
		</nav>
	</header>

	<div align="center">
		<h1><u>Facturas</u></h1>
	</div>
<br>
<br>
<br>
<br>

	<div id="formulario" align="center">

	<form action="" name="Factura" method="post">
		
			<table id="tabla">
	<!-- Cabecera de la tabla -->
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>SubTotal</th>
			
		</tr>
	</thead>
 
	<!-- Cuerpo de la tabla con los campos -->
	<tbody>
 
		<!-- fila base para clonar y agregar al final -->
		<tr class="fila-base">
			<td><input type="text" class="Codigo" /></td>
			<td><input type="text" class="Descripcion" /></td>
			<td><input type="text" class="Cantidad" /></td>
			<td><input type="text" class="Precio" /></td>
			<td><input type="text" class="SubTotal" /></td>
			
		</tr>
		<!-- fin de código: fila base -->
 
		<!-- Fila de ejemplo -->
		<tr>
			<td><input type="text" class="Codigo" /></td>
			<td><input type="text" class="Descripcion" /></td>
			<td><input type="text" class="Cantidad" /></td>
			<td><input type="text" class="Precio" /></td>
			<td><input type="text" class="SubTotal" /></td>
			
		</tr>
		<!-- fin de código: fila de ejemplo -->
 
	</tbody>
</table>
<!-- Botón para agregar filas -->
<input type="button" id="agregar" value="Agregar" width="40" />

<!-- Botón para agregar filas -->
<input type="button" id="eliminar" value="Eliminar" width="40" />

	</form>
		
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

	<footer><pre>
	<font size="2" /*color="#FFFFFF"*/ face="time new roman"> <p align="center"><b> Nuestro contacto es via telefonica al 4572-3010, via e-mail a <a href="lolamorenalenceria49@gmail.com">"lolamorenalenceria49@gmail.com".</a>></p></b> </font>
	</pre></footer>
	
</body>
</html> 