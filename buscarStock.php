<?php include 'cn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador Stock..</title>


</head>
<body>

	<form action="buscar.php" method="post">
		<input type="text" name="palabra" placeholder="Que necesito?">
		<br>
		<input type="submit" value="Buscar..">
	</form>

	<?php 
		if (isset($_POST['palabra'])) {
			require_once "cn.php";
			require_once "buscar.php";

		}




	 ?>
	
</body>
</html>