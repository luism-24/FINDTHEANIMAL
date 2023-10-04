<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
  $Idanimal = $_POST['Idanimal'];
  $Nombreanimal = $_POST['Nombreanimal'];
  $Fotoanimal = $_POST['Fotoanimal'];
  $Descrianimal = $_POST['Descrianimal'];
  $Idraza = $_POST['Idraza'];
  $Idestado = $_POST['Idestado'];
  $Idmunicipio = $_POST['Idmunicipio'];




#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE animal 
SET Idanimal='$Idanimal',
Nombreanimal='$Nombreanimal',
Fotoanimal='$Fotoanimal',
Descrianimal='$Descrianimal',
Idraza='$Idraza',
Idestado='$Idestado',
Idmunicipio='$Idmunicipio'
WHERE Idanimal = $Idanimal" );


if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/Animal.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ModiAnimal.php';
	</script>";
}

?>
