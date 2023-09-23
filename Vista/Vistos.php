<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Find The Animal </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Find_the_Animal4-removebg-preview.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Avilon
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-color" >
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo" style="margin-top: 20px;">
        <h1><img src="assets/img/Find_the_Animal4-removebg-preview.png" style="width: 65px; height: 60px; margin-top: 0px;"><a href="index.php" style="margin-top: 45px;">Find The Animal</a></h1>
        <p id="p1" style="margin-left: 70px;"></p>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
            <li><a class="nav-link scrollto active" href="index.php#hero">Inicio</a></li>
            <li><a class="nav-link scrollto" href="index.php#features">Servicios</a></li>
      
          
        
            <li class="dropdown"><a href="#"><span>Peluditos</span> <i class="bi bi-chevron-down "></i></a>
              <ul>
                
                <li><a class="nav-link scrollto active" href="Buscados1.php">Perdidos/buscados</a></li>
                    <li><a href="Vistos.php">Vistos en la calle</a></li>
                    <li><a href="tiendasasociadas.php">Tiendas asociadas</a></li>
                    <li><a href="fundaciones.php">Fundaciones</a></li>
                    <li><a href="veterinarias.php">Veterinarias</a></li>
                </li>
              
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="index.php#gallery">Galería</a></li>
            <li><a class="nav-link scrollto" href="index.php#contact">Contacto</a></li>
            <li><a class="nav-link scrollto" href="index.php#about">Nosotros</a></li>
            <li><a class="nav-link scrollto" href="Iniciarsesion.php">Ingresar</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  
  <section class="container mt-5">
  <div class="row mt-5">

  <div class="section-header" style="margin-top: 25px">
          <h3 class="section-title">Vistos</h3>
          <span class="section-divider"></span>
        </div>
      <!-- Después de crear la fila hacemos la consulta a la tabla que deseamos mostrar datos-->
      <?php 
              #Conectamos a la Base de datos
                    include( '../Controlador/conex.php'); 
                  #Creamos una variable, $Consulta, que va a contener el Script Select(Consulta a la base de datos)
                   
                    $Consulta="SELECT Idanimal, Nombreanimal, Descrianimal, raza.Descriraza, estado.Descriestado, municipio.Idmunicipio FROM animal 
                    INNER JOIN estado ON animal.Idestado = estado.Idestado WHERE animal.Idestado = 2 
                    INNER JOIN raza ON raza.Idraza = animal.Idraza 
                    INNER JOIN municipio ON municipio.Idmunicipio = animal.Idmunicipio";
                     #Creamos una variable, $Tour que es envia la conexión y ejecuta la consulta $Consulta
                    $Tour=$conexion->query($Consulta);
                     #Creamos un ciclo que permite que los datos de la consulta sean insertados en un vector 
                     #llamado $row, que se ejecuta mientras se encuentres datos dentro de la tabla que estamos 
                     #consultando

                    while ($row=$Tour->fetch_row()){
                   ?>
                     <!-- Insertamos el div que permite determinar el espacio en que estará insertada la columna-->
           <div class="col-md-4 col-sm-12">
         <!-- De acuerdo a la versión de Bootstrap que estamos manejando, creamos una sola tarjeta-->
            <div class="card" style="width: 18rem; margin-top: 25px">
             <!-- En la etiqueta de imágenes creamos la ruta donde vamos a insertar las imágenes y consultamos 
             el nombre  de la imagen, en este caso esta en la posición 5; recordemos  que la carpeta que estamos
            llamando debe contener el nombre y extensión de la imagen que estamos consultando,
            en este caso, las imágenes deben estar en la carpeta assets/img (Vista)-->                 
            <img src="App/Admon/img/<?php echo ''.$row[2].''; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                 <!-- En la posición 1 está el nombre del sitio -->  
                <h5 class="card-title" style="color: #3b626f;"><?php echo ''.$row[1].''; ?></h5>
                 <!-- Consultamos los demás datos desde la base de datos -->  
                <p class="card-text card-text1">
                <b>Descripción: </b><?php echo ''.$row[3].''; ?><br>
                <b>Raza: </b><?php echo ''.$row[4].''; ?><br>
                <b>Estado: </b><?php echo ''.$row[5].''; ?><br>
                <b>Municipio: </b><?php echo ''.$row[6].''; ?><br>
                

                </p>
                <a href="#" class="btn btn-primary btn-sm">Ver más</a>
            </div>
            
            </div>
            
         </div>    
         <?php } ?>
              <!-- Cerramos las instruccion While donde termina el div de las columnas -->     
  </div>





</section>
  
  
  <footer id="footer" style="background-color: #0b5275; margin-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-start text-center">
          <div class="copyright" style="color: white;">
            &copy; <strong>Find The Animal</strong>. "Mi corazón esta lleno de huellitas"
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="index.php" class="scrollto" style="color: white;">Inicio</a>
            <a href="index.php#about" class="scrollto" style="color: white;">Nosotros</a>
            <a href="registrate.php" style="color: white;">Registrarme</a>
            <a href="Iniciarsesion.php" style="color: white;">Iniciar sesión</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>