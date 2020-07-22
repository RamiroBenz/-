<?php 

include 'cnAcme.php';


function DB_guardarHorarios($fecha, $nombre, $desde, $hasta)
{

	$sql = "INSERT INTO horarios (fecha, nombre, desde, hasta) VALUES ('". $fecha ."', '". $nombre ."', '". $desde ."', '". $hasta ."');";

	ejecutarNoQuery('validar',$sql);

}


function UI_llenarTabla()
{
	$vista= "SELECT * FROM horarios";

	$resultado = ejecutarQuery('horario', $vista);

	$html = '';
	
	for ($i=0; $i < count($resultado); $i++) 
	{ 
		$html .= '<tr>
					<td>'.$resultado[$i]['fecha'].'</td>
					<td>'.$resultado[$i]['nombre'].'</td>
					<td>'.$resultado[$i]['desde'].'</td>
					<td>'.$resultado[$i]['hasta'].'</td>
				</tr>';
	}			


	 echo $html;
}

	function DB_guardarHorario($fecha, $nombre, $desde, $hasta){
		
		//Obtiene valores del formulario

		$fecha = $_POST["fecha"];
		$nombre = $_POST["nombre"];
		$desde = $_POST["desde"];
		$hasta = $_POST["hasta"];
		



		//Consulta para insertar
		$sql = "INSERT INTO horarios (fecha, nombre, desde, hasta)
		VALUES ('$fecha', '$nombre', '$desde', '$hasta')";



		//Ejecutar la consulta
		$resultado = mysql_query($enlace, $sql);
		if (!$resultado) {

			echo 'Error al registrar el Empleado';

		}else{

			echo "Registro guardado Exitosamente..";
		}

		//cerrar conexion
		mysql_close($enlace);
		}

	/*function UI_llenarTablaHoras()
	{
		$vista= "SELECT * FROM horas";

		$resultado = ejecutarQuery('empleados', $vista);

		$html = '';
		
		for ($i=0; $i < count($resultado); $i++) 
		{ 
			$html .= '<tr>
				<td>'.$resultado[$i]['Nombre'].'</td>
				<td>'.$resultado[$i]['Fecha'].'</td>
				<td>'.$resultado[$i]['Desde'].'</td>
				<td>'.$resultado[$i]['Hasta'].'</td>
				
			</tr>';
		}			


		 echo $html;
	}*/



 ?>