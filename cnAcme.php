


 <?php


function conectar()
{
	$enlace =  mysql_connect('localhost:3306', 'root', 'root');
	if (!$enlace) 
	{
	    die('No pudo conectarse: ' . mysql_error());
	}	
	return $enlace;
}

//RETORNA REGISTROS SELECT
function ejecutarQuery($base, $sql)
{
	$base='acme';
	$enlace = conectar();

	if (!mysql_select_db($base, $enlace)) 
	{
    	echo 'No se pudo seleccionar base de datos';
    	exit;
	}
	
	$result = mysql_query($sql, $enlace);

	if (!$result) {
	    echo "No se pudo ejecutar Consulta";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}

	$filas = array();
	
	$i = 0;
	while ($row = mysql_fetch_assoc($result)) 
	{	
	    $filas[$i] =  $row;
	    $i = $i + 1;
	}

	mysql_free_result($result);

	mysql_close($enlace);
	
	return $filas;		
}

//NO RETORNA REGISTROS DELETE- UPDATE - INSERT
function ejecutarNoQuery($base, $sql)
{
	$enlace = conectar();

	if (!mysql_select_db($base, $enlace)) 
	{
    	echo 'No se pudo seleccionar base de datos';
    	exit;
	}
	
	$result = mysql_query($sql, $enlace);

	if (!$result) {
	    echo "No se pudo ejecutar Consulta";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}
}

?>