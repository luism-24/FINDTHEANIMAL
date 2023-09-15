<?php
include ('conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

$del = $conexion -> query("DELETE FROM tipoempresa WHERE IdTiempre = '$id' ");
	if ($del) {
		echo "<script>
		location.href='../Vista/App/Admon/usuarios.php#';
		</script>";
		}else{
			echo "<script>
			 alert('El registro no pudo ser eliminado');
			location.href='../Vista/App/Admon/usuarios.php';
			</script>";
 
		}


		
 ?>