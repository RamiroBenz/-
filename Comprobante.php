<?php 

include 'cnComp.php';

$vista="SELECT * FROM remito";

$resultado=$conexion->query($vista);

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="fpdf.css">
    <title>Remito en PDF</title>
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
<h3>DEMO DE GENERAR Remito EN FORMATO PDF CON PHP</h3>
<h4>El script creara la factura para que la guardes en tu PC personal, el script elimina automaticamente la factura, de modo que solo pueda tener acceso a la misma el administrador.</h4>

<form method="post" action="procesarRem.php">
    <button type="submit">GENERAR REMITO EN PDF</button>
    
    <h3>Los datos del Remito demo son los siguientes..</h3>
    
<table>
 <tr>
    <td>ID de factura:</td>
    <td><input type="text" name="id_factura" value="0001-00004440" size="20"></td>
 </tr>
 <tr>
    <td>fecha emision de factura:</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
 </tr>
 <tr>
    <td>EDILU S.R.L.</td>
 </tr>
 <tr>
    <td>Emilio Lamarca 4961</td>
 </tr>
 <tr>
    <td>Capital Federal</td>
 </tr>
 <tr>
    <td>Buenos Aires</td>
 </tr>
 <tr>
    <td>(C1419ASO)</td>
 </tr>
 <tr>
    <td>(54-11) 4572-3010</td>
 </tr>
 <tr>
   <td><hr></td>  
 </tr>
 
 <!-- <tr>
    <td>Fax de la tienda:</td>
    
 </tr> -->
 <tr>
    <td>Iva: Responsable Inscripto</td>
 </tr>

 <tr>
    <td>C.U.I.T.: 30-70866219-0</td>
 </tr>
 
 <tr>
    <td>Ing.Brutos: 1132231-04</td>
 </tr>
 <tr>
    <td>Inicio de Actividades: 03/2004</td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
 <tr>
    <td>Nombre del cliente:</td>
    <td><input type="text" name="nombre_cliente" value="Arca Distribuciones S.A." size="30"></td>
 </tr>
 
 <tr>
    <td>Direccion del cliente:</td>
    <td><input type="text" name="direccion_cliente" value="Francia 3553" size="30"></td>
 </tr>
 <tr>
    <td>Localidad:</td>
    <td><input type="text" name="poblacion_cliente" value="San Martin" size="25"></td>
 </tr>
 <tr>
    <td>Provincia:</td>
    <td><input type="text" name="provincia_cliente" value="Buenos Aires" size="25"></td>
 </tr>
 <tr>
    <td>Iva:</td>
    <td><input type="text" name="codigo_postal_cliente" value="Responsable Inscripto" size="20"></td>
 </tr>
 <tr>
    <td>C.U.I.T.:</td>
    <td><input type="text" name="identificacion_fiscal_cliente" value="30-68630937-8" size="15"></td>
 </tr>
</table>

<tr>
    <td><hr></td>
    <td><hr></td>
    <td><hr></td>
</tr>

<h3>PRODUCTOS</h3>

<table cellpadding="5" border="1">
<tr>
    <td>Cantidad:</td>
    <td><input type="text" name="cant" value="" size="5"></td>
</tr>
<tr>
    <td>Codigo:</td>
    <td><input type="text" name="cod" value="" size="10"></td>
</tr>
<tr>
    <td>Descripcion</td>
    <td><input type="text" name="desc" value="" size="30"></td>
</tr>

</table>

<p><mark>Ver codigo fuente para ver simulacion de extraccion de los datos de productos de una base de datos!</mark></p>

<div id="cuadro" align="center" >
        <table width="70%" border="2px">
            <thead>
                <tr class="centro">
                    <td><b>Cantidad</b></td>
                    <td><b>Codigo</b></td>
                    <td><b>Descripcion</b></td>
                    
                </tr>
                <tbody>
                    <?php while($row=$resultado->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $row['Cantidad']?></td>
                        <td><?php echo $row['Codigo']?></td>
                        <td><?php echo $row['Descripcion']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </thead>
        </table>
    </div>  

</table>

<input type="hidden" name="cant" value="<?php echo $cant; ?>">
<input type="hidden" name="cod" value="<?php echo $cod; ?>">
<input type="hidden" name="desc" value="<?php echo $desc; ?>">
<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
</form>
<br><br><br><br>
</center>


</body>

</html>