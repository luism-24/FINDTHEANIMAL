<?php 
include ('conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$Idempresa = $_POST['Idempresa'];
	$Descriempresa = $_POST['Descriempresa'];
	$Direcempre =$_POST['Direcempre'];
	$Fotoempre = $_POST['Fotoempre'];
	$Encargadoempre = $_POST['Encargadoempre'];
	$Telefonoempre= $_POST['Telefonoempre'];
	$Correoempre = $_POST['Correoempre'];
	$Contraseñaempre = $_POST['Contraseñaempre'];
	$IdTiempre = $_POST['tipoempresa'];
	$Nombrempre = $_POST['Nombrempre']

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO empresa (Idempresa ,Descriempresa, Direcempre, Fotoempre, Encargadoempre, Telefonoempre,  Correoempre, Contraseñaempre, IdTiempre, Nombrempre)
	VALUES ('$Idempresa','$Descriempresa','$Direcempre','$Fotoempre','$Encargadoempre','$Telefonoempre','$Correoempre','$Contraseñaempre','$IdTiempre', '$Nombrempre')";
	
	if(mysqli_query($conexion,$ins)==TRUE)
	 {
		echo "<script>

				location.href='../Vista/App/Admon/Empresas.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admon/Empresas.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>