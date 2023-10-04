<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Idmunicipio = $_POST['Idmunicipio'];
	$Descrimuni = $_POST['Descrimuni'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO  municipio ( Idmunicipio, Descrimuni ) VALUES (' ', '$Descrimuni')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				alert('El registro se guardó exitosamente');
				location.href='../Vista/App/Admon/Municipio.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/admon/Municipio.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>