<?php 
include ('conex.php');
  #Creamoslas variables que almacenan la información que está 
  #actualmente en los input de las tablas
  $Idusuario = $_POST['IdUsuario'];
  $Nombreusua = $_POST['Nombrecomple'];
  $Correousua =$_POST['Correousua'];
  $Contrausua = $_POST['Contrausua'];
  $Teleusua = $_POST['Telefonousua'];
  $IdTidocu= $_POST['IdTidocu'];
  $IdTiusua = $_POST['IdTiusua'];



#Ahora en vez de utilizar Insert, 
#utilizaremos UDPATE para actualizar los datos de la tabla
$Actualizar = $conexion -> query("UPDATE usuario 
SET Idusuario = '$Idusuario',
    Nombrecomple ='$Nombreusua',
    Correousua ='$Correousua',
    Contrausua ='$Contrausua',
    Telefonousua ='$Teleusua',
    IdTidocu ='$IdTidocu',
	IdTiusua ='$IdTiusua' 
WHERE Idusuario = '$Idusuario'" );


if ($Actualizar) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admon/usuarios.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admon/ModiUsua.php';
	</script>";
}

?>
