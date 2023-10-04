<?php 
include ('conex.php');
  
#Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
	$Idempresa = $_POST['Idempresa'];
	$Descriempresa = $_POST['Descriempresa'];
	$Direcempre =$_POST['Direcempre'];
	$Fotoempre = $_POST['Fotoempre'];
	$Encargadoempre = $_POST['Encargadoempre'];
	$Telefonoempre = $_POST['Telefonoempre'];
	$Correoempre = $_POST['Correoempre'];
	$Contraseñaempre = $_POST['Contraseñaempre'];
	$IdTiempre = $_POST['tipoempresa'];
  $Nombrempre = $_POST['Nombrempre'];

#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE empresa 
SET Idempresa = '$Idempresa',
Descriempresa = '$Descriempresa',
Direcempre = '$Direcempre',
Fotoempre = '$Fotoempre',
Encargadoempre = '$Encargadoempre',
Telefonoempre = '$Telefonoempre',
Correoempre = '$Correoempre',
Contraseñaempre = '$Contraseñaempre',
IdTiempre = '$IdTiempre',
Nombrempre = '$Nombrempre' 
WHERE Idempresa = '$Idempresa'" );


if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/Empresas.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ModiEmpre.php';
	</script>";
}

?>
