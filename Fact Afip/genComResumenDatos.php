<?php 
// Hacer una base de datos que se llame comprobantes5 y poner lo que esta abajo en la base de datos de Factura.. y una parecida en la de remitos..
include 'cn.php';

$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$medida = $_POST['medida'];
$precio = $_POST['precio'];
$bon = $_POST['bon'];
$impobon = $_POST['impobon'];
/*$detalleTipoBonificacion = $_POST['detalleTipoBonificacion'];*/
$subtotal1 = $_POST['subtotal1'];
$iva = $_POST['iva'];
$imprteiva=$_POST['importeiva'];
$subtotal2=$_POST['subtotal2'];
$total=$_POST['total'];

//Insertar valores a la base de datos..
$insertar = "INSERT INTO factura (codigo, descripcion, cantidad, medida, precio, bon, impobon, subtotal1, iva, importeiva, subtotal2, total) VALUES ('$detalleCodigoArticulo', '$detalleDescripcion', '$detalleCantidad', '$detalleMedida', '$detallePrecio', '$detallePorcentajeBonificacion', '$detalleImporteBonificacion', '$detalleSubtotal1', '$detalle_tipo_iva1', '$detalleImporteIVA', '$detalleSubtotal2', '$total')";

//EJECUTAR CONSULTA 
$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo 'ha habido un ERROR..';
}else {
	echo 'Factura realizada Exitosamente..';
}

//Cerrar Conexion..
myslqi_close($conexion);


 ?>