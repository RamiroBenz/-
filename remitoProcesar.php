<?php
    $cod=$_POST["Codigo"];
    $materiales = $_POST["materiales"];
    $cmateriales = $_POST["cmateriales"];
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar inputs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <br><br>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>Codigo</td>
                    <td>Materiales</td>
                    <td>Cantidad</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i=0; $i < count($materiales); $i++){
                        echo "<tr><td>".$cod[$i]."</td><td>".$materiales[$i]."</td><td>".$cmateriales[$i]."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>