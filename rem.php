<?php include 'cnComp.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta charset="utf-8">
    <title>Remito</title>
    <style>

        body {
            font-family: sans-serif, verdana, arial;
        } 
        
        table tr td:first-child
        {
            text-align: right;
        }

    </style>

    
</head>
<body>
<center>
<h3>DEMO DE GENERAR REMITO EN FORMATO PDF CON PHP</h3>
<h4>El script creará la factura para que la guardes en tu PC personal, el script elimina automáticamente la factura, de modo que sólo pueda tener acceso a la misma el administrador.</h4>

<form method="post" action="facturas/facturas.php">
    <button type="submit">GENERAR Comprobante PDF</button>
    
    <h3>Los datos de la factura demo son los siguientes ...</h3>
    
<table>
 <tr>
    <td>numRem:</td>
    <td><input type="text" name="id_factura" value="1" size="5"></td>
 </tr>
 <tr>
    <td>FECHA:</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
 </tr>
<div class="der" align="left">
 <tr>
    <td>Edilu S.R.L.: Fabrica de Lenceria y Confecciones en General</td>
    <!-- <td><input type="text" name="nombre_tienda" value="Nombre de la tienda S.L" size="50"></td> -->
 </tr>
 <tr>
    <td>Emilio Lamarca 4961(C1419ASO), Capital Federal</td>
    <!-- <td><input type="text" name="direccion_tienda" value="C/ demostración nº 1" size="50"></td> -->
 </tr>
 <tr>
    <td>Tel./Fax:(54-11)4 572-3010</td>
    <!-- <td><input type="text" name="poblacion_tienda" value="Madrid" size="25"></td> -->
 </tr>
 <tr>
    <td>IVA RESPONSABLE INSCRIPTO</td>
    <!-- <td><input type="text" name="provincia_tienda" value="Madrid" size="25"></td> -->
 </tr>
</div>
 <div class="der" align="right">
 <tr>
    <td>C.U.I.T.: 30-70866219-0</td>
    <!-- <td><input type="text" name="codigo_postal_tienda" value="28080" size="5"></td> -->
 </tr>
 <tr>
    <td>Ing.Brutos: 1132231-04</td>
    <!-- <td><input type="text" name="telefono_tienda" value="900 00 00 00" size="15"></td> -->
 </tr>
 <tr>
    <td>Inicio de Actividades: 03/2004</td>
    <!-- <td><input type="text" name="fax_tienda" value="900 00 00 00" size="15"></td> -->
 </tr>
 </div>
 <!-- <tr>
    <td>Identificacion Fiscal de la tienda:</td>
    <td><input type="text" name="identificacion_fiscal_tienda" value="11223344N" size="15"></td>
 </tr> -->
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
 <tr>
    <!-- <td>Nombre del cliente:</td> -->
    <td><input type="text" name="nombre_cliente" value="Cliente" size="15"></td>
 </tr>
 <!-- <tr>
    <td>Apellidos del cliente:</td>
    <td><input type="text" name="apellidos_cliente" value="García García" size="15"></td>
 </tr> -->
 <tr>
    <!-- <td>Dirección del cliente:</td> -->
    <td><input type="text" name="direccion_cliente" value="Direccion" size="50"></td>
 </tr>
 <tr>
    <!-- <td>Población del cliente:</td> -->
    <td><input type="text" name="poblacion_cliente" value="IVA" size="25"></td>
 </tr>
 <tr>
    <!-- <td>Provincia del cliente:</td> -->
    <td><input type="text" name="provincia_cliente" value="Localidad" size="25"></td>
 </tr>
 <tr>
    <!-- <td>Código Postal del cliente:</td> -->
    <td><input type="text" name="codigo_postal_cliente" value="Provincia" size="5"></td>
 </tr>
 <tr>
    <!-- <td>Identificacion Fiscal del cliente:</td> -->
    <td><input type="text" name="identificacion_fiscal_cliente" value="C.U.I.T." size="15"></td>
 </tr>
</table>

<h3>PRODUCTOS</h3>

<table cellpadding="5" border="1">
 <tr>
    <td>Impuestos:</td>
    <td><input type="text" name="iva" value="21" size="5"> %</td>
 </tr>
 <tr>
    <td>Gastos de envío</td>
    <td><input type="text" name="gastos_de_envio" value="5.95" size="5"> €</td>
 </tr>
</table>

<p><mark>¡Ver código fuente para ver simulación de extracción de los datos de productos de una base de datos!</mark></p>

<table cellpadding="5" border="1">
    <tr><th>Cantidad</th><th>Articulo</th><th>Descripcion</th><th>Cant.Cajas</th></tr> <!-- <input type="button" value=""> -->

<?php
//Demo de Array de productos simulando extracción de datos de una base de datos.
$array_productos = array
(
"cantidad" => array(1, 4, 3), 
"articulos" => array(20.30, 15, 50)
"descripcion" => array("kjhkjhklhkjhlk", "kjgkjghgjhg", "kjgkjghccccfcff"),
"cantCajas" => array(1, 2, 3)
);
$x = 0;
while($x <= count($array_productos["cantidad"]) - 1)
{
echo 
"
<tr>
<td>".$array_productos["cantidad"][$x]."</td>
<td>".$array_productos["articulos"][$x]."</td>
<td>".$array_productos["descripcion"][$x]."</td>
<td>".$array_productos["cantCajas"][$x]." </td>
</tr>
";
$x++;
}
// A continuación se guardan en variables los datos de los productos, separados por comas
// que luego serán extraídos a través de la función explode a la hora de generar la factura
$cantidad = implode(",", $array_productos["cantidad"]);
$articulos = implode(",", $array_productos["articulos"]);
$descripcion = implode(",", $array_productos["descripcion"]);
$cantCajas = implode(",", $array_productos["cantCajas"]);
// A continuación se guardarán los datos de los productos a través de campos ocultos
?>
</table>

<input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
<input type="hidden" name="articulos" value="<?php echo $articulos; ?>">
<input type="hidden" name="descripcion" value="<?php echo $descripcion; ?>">
<input type="hidden" name="cantCajas" value="<?php echo $cantCajas; ?>">
<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
</form>
<br><br><br><br>
</center>
</body>

</html>