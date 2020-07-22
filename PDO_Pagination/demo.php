<?php
require "PDO_Pagination.php";
require('../cn.php');

$vista="SELECT * FROM Stock";

    $resultado=$conexion->query($vista);

    $pagination=new PDO_Pagination($conexion);
    $pagination->btn_back_page="Anterior";
    $pagination->btn_first_page = "Primera";
    $pagination->btn_last_page="Ultima";
    $pagination->btn_next_page="Siguiente";
    $pagination->btn_page="Pag.";

$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("SELECT * FROM Stock WHERE Empresa LIKE '%$search%' OR description LIKE '%$search%' OR name LIKE '%$search%'");
$pagination->config(3, 5);
$sql = "SELECT * FROM Stock WHERE Empresa LIKE '%$search%' OR description LIKE '%$search%' OR name LIKE '%$search%' ORDER BY id_product ASC LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();
while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
else
{
$pagination->rowCount("SELECT * FROM Stock");
$pagination->config(3, 5);
$sql = "SELECT * FROM Stock ORDER BY Codigo ASC LIMIT $pagination->start_row, $pagination->max_rows";

$query = $conexion->prepare($sql);
$query->execute();
$model = array();

while($rows = $query->fetch())
{
    $model[] = $rows;
}
}
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF-8">
    <title>PDO Pagination</title>
    </head>
    <body>
<h1>PDO Pagination</h1>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
Search: 
<input type="text" name="search" placeholder="Search" value="<?php echo $search ?>">
<input type="submit" value="Search">
</form>
<br><br>
    <center>
<table cellpadding="10" cellmargin="5" border="1">
    <tr>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Empresa</th>
        
    </tr>
    <?php
    foreach($model as $row)
    {
        echo "<tr>";
        echo "<td>".$row['Codigo']."</td>";
        echo "<td>".$row['Descripcion']."</td>";
        echo "<td>".$row['Precio']."</td>";
        echo "<td>".$row['Empresa']."</td>";
        
        echo "</tr>";
    }
    ?>
</table>
        <br>
        <br>
        <style>
            /* CSS */
            .btn
            {
              text-decoration: none;
              color: #FFFFFF;
              padding-left: 10px;
              padding-right: 10px;
              margin-left: 1px;
              margin-right: 1px;
              border-radius: 3px;
              background: #7F83AD;
            }
            
            .btn:hover
            {
                background: #474C80;
            }
            .active
            {
                background: #E7814A;
            }
            /* CSS */
        </style>
<div>
<?php
$pagination->pages("btn");
?>
</div>
    </center>
    <br>
    <br>
    <br>
    <br>
    </body>
</html>