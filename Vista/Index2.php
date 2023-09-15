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
  <link href="assets/img/Find_the_Animal4-removebg-preview.png" rel="icon" class="icono">
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
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo" style="margin-top: 13px;">
        <h1><img src="assets/img/Find_the_Animal4-removebg-preview.png" style="width: 60px; height: 60px; margin-top: 20px;"><a href="index.php" style="margin-top: 40%;">Find The Animal</a></h1>
        <p id="p1" style="margin-left: 60px;"></p>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
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
                  <li><a href="fundaciones.php">Fundaciones</a></li>
                  <li><a href="veterinarias.php">Veterinarias</a></li>
              </li>
             
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#gallery">Galería</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contacto</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">Nosotros</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->


    <!-- ======= Featuress Section ======= -->
    <section id="features">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header">
              <h3 class="section-title">Nuestros servicios</h3>
              <span class="section-divider"></span>
            </div> 
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="assets/img/product-features.png" alt="" data-aos="fade-right">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                <div class="icon"><a href="Buscados1.php"><img src="assets/img/perro.png" width="40px" height="40px"></a></div>
                <h4 class="title"><a href=""class="Sombraiconos">Te ayudamos a buscar a tu mascota extraviada</a></h4>
                <p class="description">Por medio de nuestra página podrás hacer la publicación de tu mascota extraviada, algún animal que viste en la calle con identificación o que encontraste en situación de calle, y ésta se les mostrará
                  a personas por la zona para que al verla se puedan comunicar contigo o informarse más respecto a la publicación. </p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-up">
                <div class="icon"><a href="tiendasasociadas.php"><img src="assets/img/la-tienda-de-animales.png" width="40px" height="40px"></a></div>
                <h4 class="title"><a href=""class="Sombraiconos">Tiendas</a></h4>
                <p class="description">Estamos buscando tu comodidad, con esta sección te mostraremos todas las tiendas registradas y sus horarios para que vayas a la fija y tengas los mejores servicios.</p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-up" dat-aos-delay="100">
                <div class="icon"><a href="fundaciones.php"><img src="assets/img/fundacion.png"width="40px" height="40px"></a></div>
                <h4 class="title"><a href=""class="Sombraiconos">Fundaciones</a></h4>
                <p class="description">Podrás encontrar las fundaciones registradas con su información y, si deseas, podrás ver un poco más de ellas para luego adoptar y 
                  que puedas encontrar tu nuevo compañero de vida.
                </p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><a href="Veterinarias.php"><img src="assets/img/voluntario.png" width="40px" height="40px"></a></div>
                <h4 class="title"><a href=""class="Sombraiconos">Veterinarias</a></h4>
                <p class="description">Contamos con un apartado que te muestra veterinarias que pueden ser de tu interés, para que puedas estar informado,
                  que puedas escoger el mejor servicio y lo que mejor se acomoda a las necesidades tu mascota.
                </p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Featuress Section -->


    <!-- ======= Advanced Featuress Section ======= -->
    <section id="advanced-features">

      <div class="features-row section-bg" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/advanced-feature-1.jpg" alt="">
              <div>
                <h2>Extensión de google maps para que sea más fácil encontrar a tu amigo</h2>
                <h3>Esta extensión es para que te sea más fácil ubicar a tu mascota de una manera más exacta y puedas llegar mucho más sencilla a tu destino.</h3>
                <h4>¿Cómo funciona?</h4>
                <p>Cuando veas una publicación, bajo la foto aparecerá la dirección que puso el usuario que hizo la publicación, 
                  le darás click a la dirección y automaticamente te llevara a Google Maps, donde estará la dirección que el usuario ingresó; luego podrás poner tu 
                  ubicación actual y así llegarás fácilmente a donde se encontraron a la mascota que viste en la publicación.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Preguntas Frecuentes</h3>
          <span class="section-divider"></span>
          <p class="section-description">Preguntas que nos hacen comunmente nuestros usuarios</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">¿Qué pasa si no pongo una dirección exacta en la publicación? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                No pasa nada, puedes publicar lo que quieras común y corriente, pero si debes de poner un punto clave (Algún barrio o sector que este cerca) para que todos los 
                demás usuarios puedan guíarse y les sea mucho más fácil encontrar al peludo que publicaste.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">¿Qué hago si veo a mi mascota en una publicación? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                En este caso tienes tres alternativas, puedes escribirle directamente al usuario que hizo la publicación, la segunda es que puedes comentar la publicación
                para que los demás usuarios lo puedan ver, sepan que es tuyo y que lo estás buscando o puedes ir directamente a la dirección que el otro usuario ingresó
                para que puedas ver si puedes volverte a encontrar con tu peludo.
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

   
    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Galería</h3>
          <span class="section-divider"></span>
          <p class="section-description"></p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/perro1.png" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/perro1.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gato2.png" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gato2.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/perro3.png" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/perro3.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gato1.png" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gato1.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/perro2.png" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/perro2.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <a href="assets/img/gallery/gato3.png" data-gall="portfolioGallery" class="gallery-lightbox">
                <img src="assets/img/gallery/gato3.png" alt="">
              </a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Gallery Section -->

<section id="about" class="section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Nosotros</h3>
          <span class="section-divider"></span>
          <p class="section-description">"Mi corazón está lleno de huellitas"</p> 
        </div>

        <div class="row">
          <div class="col-lg-6 " data-aos="fade-right" dat-aos-delay="100">
            <div class="row">
                <div class="col-md-12">
                  <img src="assets/img/RE.jpg" alt="" style="margin: 20px 20px 20px 20px; width: 90%;">
                </div>
                <div class="col-md-12">
                  <img src="assets/img/OIP.jpg" style="margin: 20px 20px 20px 20px; width: 90%;">
                </div>
            </div>
          </div>

          <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
            <h3>Nuestro modelo de negocio</h3>
            <p>
              Este proyecto se centra en promover la actividad de dignidad y solidaridad a favor de los animales en estado de abandono, extravío y de calle, 
            contribuir al mundo ayudando a los animales en situación vulnerable y fomentar la responsabilidad al tener, adoptar o rescatar una animal. Este proyecto está a favor de la vida 
            animal ya que es una problemática que se evidencia en casi todos los lugares del mundo, pero nosotros estamos centrados en el área de Medellín y El Valle de Aburrá, con el objetivo de seguir
            expandiendo nuestro proyecto hasta que haya un control de animales.
            </p>

            <ul>
              <li><i class="bi bi-check-circle"></i> Puedes hacer publicaciones sobre mascotas</li>
              <li><i class="bi bi-check-circle"></i> Encontrar fundaciones para la adopción</li>
              <li><i class="bi bi-check-circle"></i> Tiendas asociadas con nosotros y encontrar su información</li>
            </ul>

            <h3>Nuestra historia</h3>
            <p>
              Nuestra historia empieza con un proyecto en el colegio que nos terminó apasionando, era sobre una página para ayudar a la comunidad
              en general, y nos centramos en los animales, ya que de estos hay una gran sobrepoblación y es una problemática bastante ignorada. Lo que queremos lograr
              es que las personas tomen conciencia, sean más responsables con sus peludos y que entiendan que ellos también sienten y son una gran compañía.
            </p>

            <h3>Nuestros valores y cualidades</h3>
            <p>
              <ul style="float: left;">
                <li type="disc">Respeto</li> 
                <li type="disc">Amor por la vida</li>
                <li type="disc">Responsabilidad</li>
              </ul>
            
              <ul style="float: right; margin-right: 30%;">
                <li type="disc">Tolerancia</li>
                <li type="disc">Comunicación</li>
                <li type="disc">Empatía</li>
              </ul>
              
            </p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="about" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Nuestro equipo</h3>
          <span class="section-divider"></span>
          <p class="section-description">Creadoras del proyecto</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Julieta.jpg" style="height: 100%; width: 100%;"></div>
              <h4>Julieta Ruiz</h4>
              <span>Creadora</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/july_rios21/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/TeamNikolle.jpg" style="height: 100%; width: 100%;"></div>
              <h4>Nikolle Hoyos</h4>
              <span>Creadora</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter" style="height:20px;"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/Rebeca.jpg" style="height: 80%; width: 100%;"></div>
              <h4>Rebeca Rodríguez</h4>
              <span>Creadora</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

      </div>
    </section><!-- End Team Section -->
<!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>CONTÁCTANOS</h3>
              <p>Si tienes algún problema, duda o necesidad con respecto a la página, puedes contactarnos a través de nuestras redes sociales o el siguiente formulario.</p>
              <div class="social-links">
                <a href="https://twitter.com/?lang=es"><img src="assets/img/Redes Sociales/twitter.png" style="width: 25px; height: 25px;"></a>
                <a href="https://es-la.facebook.com/"><img src="assets/img/Redes Sociales/facebook.png" style="width: 25px; height: 25px;"></a>
                <a href="https://www.instagram.com/"><img src="assets/img/Redes Sociales/instagram.png" style="width: 25px; height: 25px;"></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa tu nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu email" data-rule="email" data-msg="Please enter a valid email">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Explicación del problema o duda" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading"></div>
                  <div class="error-message"></div>
                  <div class="sent-message">  </div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #0b5275;">
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
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>