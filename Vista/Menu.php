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
  <script src="https://kit.fontawesome.com/f0eb0569ec.js" crossorigin="anonymous"></script>
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
  <header id="header" class="fixed-top d-flex align-items-center header-color">
    <div class="container d-flex justify-content-between align-items-center">

     
        <?php
        if(empty($_SESSION['user']))
        {
          echo '
          <div id="logo" style="margin-top: 20px;">
          <h1><img src="assets/img/Find_the_Animal4-removebg-preview.png" style="width: 65px; height: 60px; margin-top: 0px;"><a href="index.php" style="margin-top: 45px;">Find The Animal</a></h1>
          <p id="p1" style="margin-left: 70px;"></p>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php"><img src="assets/img/logo.png" alt=""></a> -->
          </div>
          <nav id="navbar" class="navbar">
          <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="index.php#features">Servicios</a></li>
          <li class="dropdown"><a href="#"><span>Peluditos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Buscados1.php">Perdidos/buscados</a></li>
                  <li><a href="Vistos.php">Vistos en la calle</a></li>
                  <li><a href="tiendasasociadas.php">Tiendas asociadas</a></li>
                  <li><a href="Fundaciones.php">fundaciones</a></li>
                  <li><a href="veterinarias.php">Veterinarias</a></li>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#gallery">Galería</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contacto</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="Iniciarsesion.php">Ingresar</a></li>
        </ul>';
        } else {

          echo '
          <div id="logo" style="margin-top: 20px;">
          <h1><img src="assets/img/Find_the_Animal4-removebg-preview.png" style="width: 65px; height: 60px; margin-top: 0px;"><a href="index2.php" style="margin-top: 45px;">Find The Animal</a></h1>
          <p id="p1" style="margin-left: 70px;"></p>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index2.php"><img src="assets/img/logo.png" alt=""></a> -->
          </div>
           <nav id="navbar" class="navbar">
           <ul>
          <li><a class="nav-link scrollto active" href="index2.php#hero">Inicio</a></li>
          <li class="dropdown"><a href="#"><span>Peluditos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Buscados1.php">Perdidos/buscados</a></li>
                  <li><a href="Vistos.php">Vistos en la calle</a></li>
                  <li><a href="tiendasasociadas.php">Tiendas asociadas</a></li>
                  <li><a href="Fundaciones.php">fundaciones</a></li>
                  <li><a href="veterinarias.php">Veterinarias</a></li>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index2.php#contact">Contacto</a></li>
          <li class="dropdown"><a href="#"><span>Perfil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../Controlador/logout.php">Cerrar Sesión</a></li>
                  
              </li>
            </ul>
          </li>
          
        </ul>';

        }
        ?>
        
  </Header>