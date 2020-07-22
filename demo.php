<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>DEMO FACTURAS PDF</title>
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
<h3>DEMO DE GENERAR FACTURAS EN FORMATO PDF CON PHP</h3>
<h4>El script creará la factura para que la guardes en tu PC personal, el script elimina automáticamente la factura, de modo que sólo pueda tener acceso a la misma el administrador.</h4>

<form method="post" action="facturas/facturas.php">
    <button type="submit">GENERAR FACTURA PDF</button>
    
    <h3>Los datos de la factura demo son los siguientes ...</h3>
    
<table>
 <tr>
    <td>ID de factura:</td>
    <td><input type="text" name="id_factura" value="X-0001-00004447" size="15"></td>
 </tr>
 <tr>
    <td>fecha emisión de factura:</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
 </tr>
 <tr>
    <td>Nombre de la tienda:</td>
    <td><input type="text" name="nombre_tienda" value="Edilu S.R.L." size="50"></td>
 </tr>
 <tr>
    <td>Dirección de la tienda:</td>
    <td><input type="text" name="direccion_tienda" value="Emilio Lamarca 4961" size="50"></td>
 </tr>
 <tr>
    <td>Población de la tienda:</td>
    <td><input type="text" name="poblacion_tienda" value="Capital Federal" size="25"></td>
 </tr>
 <tr>
    <td>Provincia de la tienda:</td>
    <td><input type="text" name="provincia_tienda" value="Buenos Aires" size="25"></td>
 </tr>
 <tr>
    <td>Código Postal de la tienda:</td>
    <td><input type="text" name="codigo_postal_tienda" value="1419" size="5"></td>
 </tr>
 <tr>
    <td>Teléfono de la tienda:</td>
    <td><input type="text" name="telefono_tienda" value="4572-3010" size="15"></td>
 </tr>
 <tr>
    <td>C.U.I.T.:</td>
    <td><input type="text" name="cuit" value="30-70866219-0" size="15"></td>
 </tr>
 <tr>
    <td>Ing.Brutos:</td>
    <td><input type="text" name="ingBrutos" value="1132231-04" size="15"></td>
 </tr>
 <tr>
    <td>Inicio de Actividades:</td>
    <td><input type="text" name="inicio" value="03/2004" size="15"></td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
 <tr>
    <td>Nombre del cliente:</td>
    <td><input type="text" name="nombre_cliente" value="Arca Distribuciones S.A." size="25"></td>
 </tr>
 <!-- <tr>
    <td>Apellidos del cliente:</td>
    <td><input type="text" name="apellidos_cliente" value="" size="15"></td>
 </tr> -->
 <tr>
    <td>Dirección:</td>
    <td><input type="text" name="direccion_cliente" value="Francia 3553" size="50"></td>
 </tr>
 <tr>
    <td>Población:</td>
    <td><input type="text" name="poblacion_cliente" value="San Martin" size="25"></td>
 </tr>
 <tr>
    <td>Provincia:</td>
    <td><input type="text" name="provincia_cliente" value="Buenos Aires" size="25"></td>
 </tr>
 <tr>
    <td>Código Postal:</td>
    <td><input type="text" name="codigo_postal_cliente" value="1650" size="8"></td>
 </tr>
 <tr>
    <td>C.U.I.T.:</td>
    <td><input type="text" name="identificacion_fiscal_cliente" value="30-68630937-8" size="15"></td>
 </tr>
</table>

<h3>PRODUCTOS</h3>

<table cellpadding="5" border="1">
 <tr>
    <td>Cantidad:</td>
    <td><input type="text" name="cantidad" value="" size="10"></td>
 </tr>
 <tr>
    <td>Codigo</td>
    <td><input type="text" name="codigo" value="" size="15"></td>
 </tr>
 <tr>
    <td>Descripcion</td>
    <td><input type="text" name="descripcion" value="" size="25"></td>
 </tr>
 <tr>
    <td>Cant. Cajas</td>
    <td><input type="text" name="cantCajas" value="" size="5"></td>
 </tr>
</table>

<p><mark>¡Ver código fuente para ver simulación de extracción de los datos de productos de una base de datos!</mark></p>

<table cellpadding="5" border="1">
    <tr><th>Cant.</th><th>Codigo</th><th>Descripcion</th><th>Cant.Cajas</th></tr>

</table>


<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
</form>
<br><br><br><br>
</center>
<?php include 'footer.php'; ?>
</body>

</html>