<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Obtencion de Proveedores</title>
	<style>
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


	</style>
</head>
<body>
<h1>Formulario de Stock<small>Obtencion de datos</small></h1>
<?php 
include 'cn.php';


	//Conexion a la base de datos
//$con = mysql_connect("localhost", "root", "root", "edilu1")
//if (mysqli_connect_errno()){
//	echo "No se pudo conectar al a base de datos Edilu1" . mysqli_connect_errno();


//}



//Obtiene valores del formulario
$empresa = mysqli_real_escape_string($conexion, $_POST["Empresa"]);
$dir = mysqli_real_escape_string($conexion, $_POST["Direccion"]);
$loc = mysqli_real_escape_string($conexion, $_POST["Localidad"]);
$tel = mysqli_real_escape_string($conexion, $_POST["Telefono"]);
$cuit = mysqli_real_escape_string($conexion, $_POST["cuit"]);

//Consulta para insertar
$sql = "INSERT INTO Proveedores (Empresa, Direccion, Localidad, Telefono, cuit)
VALUES ('$emp', '$dir', '$loc', '$tel', 'cuit')";
//Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);
if (!$resultado) {
	echo 'Error al registrar el Proveedor';
}else{

	echo "Registro guardado Exitosamente..";
}
//cerrar conecxion
mysqli_close($conexion);

 ?>
	
</body>
</html>