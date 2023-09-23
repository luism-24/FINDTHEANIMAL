<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Idusuario = $_POST['IdUsuario'];
	$Nombreusua = $_POST['Nombrecomple'];
	$Correousua =$_POST['Correousua'];
	$Contrausua = $_POST['Contrausua'];
	$Teleusua = $_POST['Telefonousua'];
	$IdTidocu= $_POST['IdTidocu'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO usuario (Idusuario, Nombrecomple, Correousua, Contrausua, Telefonousua, IdTidocu, IdTiusua) 
	VALUES ('$Idusuario','$Nombreusua','$Correousua','$Contrausua','$Teleusua','$IdTidocu','1')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				alert('El registro se guardó exitosamente');
				location.href='../Vista/index2.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/index2.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>