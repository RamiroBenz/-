<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>DEMO FACTURAS PDF</title>
    <style>
        body {
            font-family: sans-serif, verdana, arial;
            background-color: #85C1E9;
        } 
        
        table tr td:first-child
        {
            text-align: right;
        }
    </style>
</head>
<body>
<center>
<h3>DEMO DE GENERAR FACTURAS EN FORMATO PDF CON PHP</h3>
<h4>El script creara la factura para que la guardes en tu PC personal, el script elimina automaticamente la factura, de modo que solo pueda tener acceso a la misma el administrador.</h4>

<form method="post" action="facturas/factura1.php">
    <button type="submit">GENERAR FACTURA PDF</button>
    
    <h3>Los datos de la factura demo son los siguientes ...</h3>
    
<table>
 <tr>
    <td>ID de factura:</td>
    <td><input type="text" name="id_factura" value="1" size="5"></td>
 </tr>
 <tr>
    <td>fecha emision de factura:</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
 </tr>
 <tr>
    <td>Nombre Cliente:</td>
    <td><input type="text" name="nombre_tienda" value="" size="50"></td>
 </tr>
 <tr>
    <td>Direccion:</td>
    <td><input type="text" name="direccion_tienda" value="" size="50"></td>
 </tr>
 <tr>
    <td>Localidad:</td>
    <td><input type="text" name="poblacion_tienda" value="" size="25"></td>
 </tr>
 <tr>
    <td>Provincia:</td>
    <td><input type="text" name="provincia_tienda" value="" size="25"></td>
 </tr>
 <tr>
    <td>Codigo Postal:</td>
    <td><input type="text" name="codigo_postal_tienda" value="" size="5"></td>
 </tr>
 <tr>
    <td>Telefono:</td>
    <td><input type="text" name="telefono_tienda" value="" size="15"></td>
 </tr>
 
 <tr>
    <td>Identificacion Fiscal de la tienda:</td>
    <td><input type="text" name="identificacion_fiscal_tienda" value="" size="15"></td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
 <tr>
    <td>Nombre del cliente:</td>
    <td><input type="text" name="nombre_cliente" value="" size="15"></td>
 </tr>
 <tr>
    <td>Apellidos del cliente:</td>
    <td><input type="text" name="apellidos_cliente" value=" " size="15"></td>
 </tr>
 <tr>
    <td>Direccion del cliente:</td>
    <td><input type="text" name="direccion_cliente" value="" size="50"></td>
 </tr>
 <tr>
    <td>Poblacion del cliente:</td>
    <td><input type="text" name="poblacion_cliente" value="" size="25"></td>
 </tr>
 <tr>
    <td>Provincia del cliente:</td>
    <td><input type="text" name="provincia_cliente" value="" size="25"></td>
 </tr>
 <tr>
    <td>Codigo Postal del cliente:</td>
    <td><input type="text" name="codigo_postal_cliente" value="" size="5"></td>
 </tr>
 <tr>
    <td>Identificacion Fiscal del cliente:</td>
    <td><input type="text" name="identificacion_fiscal_cliente" value="" size="15"></td>
 </tr>
</table>

<h3>PRODUCTOS</h3>
<table>
<tr>
    <td>Codigo:</td>
    <td><input type="text" name="Codigo" value="" size="15"></td>
 </tr>
 <br>
 <tr>
    <td>Descripcion:</td>
    <td><input type="text" name="Descripcion" value="" size="55"></td>
 </tr>

 <tr>
    <td>Cantidad:</td>
    <td><input type="text" name="Cantidad" value="" size="8" onclick=""></td>
 </tr>

 <tr>
    <td>Precio:</td>
    <td><input type="text" name="Precio" value="" size="10"></td>
 </tr>

 <tr>
    <td>SubTotal:</td>
    <td><input type="text" name="Subtotal" value="" size="20"></td>
 </tr>
</table>

<table cellpadding="5" border="1">
 <tr>
    <td>Impuestos:</td>
    <td><input type="text" name="IVA" value="21" size="5"> %</td>
 </tr>
 <tr>
    <td>Gastos de envio</td>
    <td><input type="text" name="gastos_de_envio" value="0" size="5"> 0</td>
 </tr>
</table>

<p><mark>Ver codigo fuente para ver simulacion de extraccion de los datos de productos de una base de datos</mark></p>

<table cellpadding="5" border="1">
    <tr><th>Codigo</th><th>Descripcion</th><th>Cantidad</th><th>Precio</th><th>SubTotal</th></tr>
<?php
//Demo de Array de productos simulando extracción de datos de una base de datos.
$array_productos = array
(
"unidades" => array(1, 4, 3), 
"productos" => array("Zapatos", "Camisetas", "Pantalones"),
"precio_unidad" => array(20.30, 15, 50)
);
$x = 0;
while($x <= count($array_productos["unidades"]) - 1)
{
echo 
"
<tr>
<td>".$array_productos["unidades"][$x]."</td>
<td>".$array_productos["productos"][$x]."</td>
<td>".$array_productos["precio_unidad"][$x]." €</td>
</tr>
";
$x++;
}
// A continuación se guardan en variables los datos de los productos, separados por comas
// que luego serán extraídos a través de la función explode a la hora de generar la factura
$unidades = implode(",", $array_productos["unidades"]);
$productos = implode(",", $array_productos["productos"]);
$precio_unidad = implode(",", $array_productos["precio_unidad"]);
// A continuación se guardarán los datos de los productos a través de campos ocultos
?>
</table>

<input type="hidden" name="unidades" value="<?php echo $unidades; ?>">
<input type="hidden" name="productos" value="<?php echo $productos; ?>">
<input type="hidden" name="precio_unidad" value="<?php echo $precio_unidad; ?>">
<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
</form>
<br><br><br><br>
</center>
</body>

</html>
