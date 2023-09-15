<?php
session_start();
include('conex.php');

//error_reporting(0);
//Indicamos que el documento será de tipo html y con caracteres de UTF-8:
header('Content-Type: text/html; charset=UTF-8');
//Al presionar el boton que previamente le llamamos "login", traeremos los datos del formulario:
$btninicio=$_POST['login'];
if(isset($btninicio)){
	//Traemos de los inputs los datos de usuario y contraseña:
    $user=$_POST['IdUsuario'];
    $pass=$_POST['Contraseña'];

    $sql="SELECT Idusuario, Contrausua, Nombrecomple, IdTiusua FROM usuario WHERE Idusuario = '$user' AND Contrausua = '$pass'";
    $res=$conexion->query($sql);
    $fila=$res->fetch_row();
    
    if($fila[0]==$user && $fila[1]==$pass){
    	$_SESSION['user']=$fila[0];
        $_SESSION['tipo']=$fila[3];
    	$_SESSION['usuario']=$fila[2];
     $_SESSION['tipo'];
    	$msj="Bienvenido ".$_SESSION['usuario']."";
          switch($_SESSION['tipo']) {
				case '1':
					# code...
					header('location:../Vista/index2.php?mensaje=$msj');
					break;
				case '2':
					# code...
					header('location:../Vista/App/Admon/index.php?mensaje=$msj');
					break;
				default:
					# code...
					header('location:../Vista/index2.php?mensaje=$msj');
					break;
			}

    }
    else{
    	echo "<script>
					alert('Usuario y/o Contraseña Incorrectos');
					location.href='../Vista/Iniciarsesion.php';
					</script>";

    
    }
}
?>
