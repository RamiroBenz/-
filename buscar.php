<?php 
include 'cn.php';


$palabra=$_POST['palabra'];

$query="SELECT Codigo FROM Stock WHERE Codigo ";
$consulta1=$resultado=$conexion->query($query);

if ($query->$row->='1') {
	echo " <div id='cuadro' align='center' >
		<table width='70%' border='1' cellpadding='10'>
			<thead>
				<tr class='centro'>
					
					<td><b>Codigo</b></td>
					<td><b>Descripcion</b></td>
					<td><b>Precio</b></td>
					<td><b>Empresa</b></td>
					<td><b>Modificar</b></td>
					<td><b>Eliminar</b></td>
				</tr> "

				echo " <tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['Codigo']?></td>
						<td><?php echo $row['Descripcion']?></td>
						<td><?php echo $row['Precio']?></td>
						<td><?php echo $row['Empresa']?></td>
						
					</tr>
					<?php } ?>
				</tbody>
			</thead>
		</table>
	</div>	"
}else {
	echo "No hemos encontrado registro";

}

	






 ?>