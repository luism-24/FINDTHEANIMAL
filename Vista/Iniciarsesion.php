<?php
include('Menu.php');
?>
  <!-- ======= Hero Section ======= -->
 ->

  <main id="main" style="margin-top: 120px;">

    <center><section id="Iniciarsesion" class="separacion">
      <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="section-header">
              <h3 class="section-title mt-4" >Iniciar Sesión</h3>
              <span class="section-divider"></span>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-12">

            <div class="row">
                  <form method="post" action="../Controlador/login.php">
                    <div class="form-group mt-2">
                      <label for="exampleInputEmail1" style="float: left;">Identificación</label>
                      <input type="number" name="IdUsuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Identificación">
                    </div>
                    <div class="form-group mt-2">
                      <label for="exampleInputPassword1" style="float: left;">Contraseña</label>
                      <input type="password" name="Contraseña" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="form-group form-check">
                     
                      <label class="form-check-label" for="exampleCheck1" style="margin-right: 230px;">Recordar</label>
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-left: 200px;">
                    </div>
                    <p style="margin-bottom: 5px;">¿No tienes cuenta? <a href="registrate.php"data-toggle="modal" data-target="#exampleModal2">Regístrate</a></p>
                    <button type="submit" name="login" class="btn btn-primary mt-2" style="margin: top 5px ;">Iniciar Sesión</button>
                  </form> 
                </div>

              </div>

            </div>

          </div>

        </section> </center>

  </main><!-- End #main -->
   
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

<!-- ======= Footer ======= -->
<footer id="footer" style="background-color: #0b5275; margin-top: 180px;">
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
          <a href="registrate.php" style="color: white;">Registrarme como usuario</a>
          <a href="Iniciarsesion.php" style="color: white;">Iniciar sesión</a>
          <a href="registrateempre.php" style="color: white;">Registrarme como empresa</a>
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