<?php


/* PARTE 1: AL INICIO SE EXTRAEN TODAS LAS FILAS */
//Necesitamos establecer una conexión con la base de datos.
$mysql_usuario = "root";
$mysql_password = "root";
$mysql_host = "localhost";
$mysql_database = "edilu1";

//Datos de conexión
$conexion = mysql_connect($mysql_host, $mysql_usuario, $mysql_password, true);

//Seleccionar la base datos y la conexión y capturar posibles errores con die
mysql_select_db($mysql_database, $conexion) || die('No pudo conectarse: '.mysql_error());

//Preparar la consulta para extraer todos los pedidos
$consulta = "SELECT * FROM pedidos";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//Extraer todas la filas y almacenarlas en una tabla
$table = "<table id='lookup' class='table table-bordered table-hover' border='1' cellpadding='10'>\n";
$table .= "<tr><th>ID</th><th>Pedido</th><th>Fecha</th><th>Empresa</th><th>Codigo</th><th>Descripcion</th><th>Cantidad</th><th>Precio</th><th>Eliminar</th><th></th></tr>\n";
while($fila = mysql_fetch_assoc($resultado)){
   $table .= "<tr>
                  <td>".$fila["id"]."</td>
                  <td>".$fila["pedido"]."</td>
                  <td>".$fila["fecha"]."</td>
                  <td>".$fila["empresa"]."</td>
                  <td>".$fila["Codigo"]."</td>
                  <td>".$fila["Descripcion"]."</td>
                  <td>".$fila["Cantidad"]."</td>
                  <td>".$fila["Precio"]."</td>
                  <td><form method='post' action=''> \n
                  <input type='hidden' name='id' value='".$fila["id"]."'>
                  <input type='submit' value='Eliminar'>
                  </form></td>
               </tr>\n";
       }
   $table .= "</table>\n"; 


/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

if (isset($_POST["id"]))
{
//Se almacena en una variable el id del registro a eliminar
$id = $_POST["id"];

//Preparar la consulta
$consulta = "DELETE FROM pedidos WHERE id=$id";

//Ejecutar la consulta
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

//redirigir nuevamente a la página para ver el resultado
header("location: vista_pedidos.php");
}
  
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Eliminar registros de una tabla Clientes</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <link rel="stylesheet" href="estilos.css">
   <link rel="stylesheet" href="estiloForm.css">
   <link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    
   <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
   <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
   <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

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
      width: 70%;
      margin:20px;
      margin-left: 80px;
      text-align: center;
      font-size: 25px;
      border-color: #030303;
      font-family: Arial bold;
   }

   </style>

</head>
<body>

<?php include 'menu.php'; ?>

<br>
<br>
<?php include 'reloj.php'; ?>
<br>
<br>
<br>

   <div align="center">
      <img src="img/Pedidos.jpg" alt="" width="400px">
   </div>
   
   <br>
   <br>
   <br>
   <br>
   <br>
   <div align="center">
<?php
/* Mostrar la tabla con los registros */
echo $table; 

?>
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
<br>      
     
<div align="center">
<img src="img/contratapa.jpg" alt="" width="650px">
      
</div>


  
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>
</body>
</html>

<?php 
/* Cerrar la conexión */
mysql_close($conexion); 
?>