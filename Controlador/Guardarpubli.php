<?php 	
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Nombreanimal = $_POST['Nombreanimal'];
	$Fotoanimal =$_POST['Fotoanimal'];
	$Descrianimal = $_POST['Descrianimal'];
	$Idraza = $_POST['Idraza'];
	$Idestado= $_POST['Idestado'];
	$Idmunicipio = $_POST['Idmunicipio'];

	
	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO  animal ( Idanimal, Nombreanimal, Fotoanimal, Descrianimal, Idraza, Idestado, Idmunicipio) 
	VALUES (' ', '$Nombreanimal', '$Fotoanimal', '$Descrianimal', '$Idraza','$Idestado', '$Idmunicipio')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				alert('La publicación fue exitosa');
				location.href='../Vista/Index2.php';
					</script>";
			}else{
				"<script>
				alert('La publicación no pudo ser guardada');
				location.href='../Vista/Publicar.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>