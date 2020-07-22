<?php 

include 'cn.php';

	if (isset($_POST['horas']) and isset($_POST['precio'])){ //revisa si se enviaron las variables
		$horas=$_POST['horas']; //guardalas
		$precio=$_POST['precio'];
		$total = $horas*$precio; // si trabajo 30 horas a 10 por hora gano 300

			if($horas>100){ // si son mas de 40 horas
				$total*=1.5; // aumenta un 50%
			}

		echo $total; //imprimo el total

		}



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Sueldo</title>
 	<link rel="stylesheet" href="estilos.css">
 	<link rel="stylesheet" href="estiloForm.css">
 </head>
 <body>



 	<table>
 		<tr>
 			<td>El Sueldo de <?php echo $_POST['nombre'] ?> es:<?php  echo $_POST['$total']; ?></td>
 		</tr>
 	</table>
 	
 </body>
 </html>