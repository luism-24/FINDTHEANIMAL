<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$Idraza = $_POST['Idraza'];
	$Descriraza = $_POST['Descriraza'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE raza 
SET Idraza ='$Idraza',
Descriraza='$Descriraza' 
WHERE Idraza = '$Idraza'" );


if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/Raza.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ModiRaza.php';
	</script>";
}

?>
