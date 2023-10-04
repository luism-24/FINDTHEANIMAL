<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$Idmunicipio = $_POST['Idmunicipio'];
	$Descrimuni = $_POST['Descrimuni'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE municipio 
SET Idmunicipio='$Idmunicipio',
Descrimuni='$Descrimuni' 
WHERE Idmunicipio = $Idmunicipio" );


if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/Municipio.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ModiMuni.php';
	</script>";
}

?>
