<?php
include('Menu.php');
?>
  <section id="Registrarse" class="separacion3">
    <div class="container" data-aos="fade-up">

      <div class="section-header mt-4">
        <h3 class="section-title">Registrarse</h3>
        <span class="section-divider"></span>
        <p class="section-description">Regístrate para una mejor experiencia.</p>
      </div>
       <div class="row">
        <form> <center>
          <div class="form-row">
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputEmail1" style="float: left;">Tipo Documento</label>
              <select name="IdTidocu" id="">
                <option value=""></option>
                <option value=""></option>
              </select>
              </div>
            </div> 
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputEmail1" style="float: left;">Documento</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre documento">
              </div>
            </div> 
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputEmail1" style="float: left;">Nombre</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre completo">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputPassword1" style="float: left;">Correo Electrónico</label>
              <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su correo electrónico">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputPassword1" style="float: left;">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese una contraseña"> <br>
            <label for="exampleInputPassword1" style="float: left;">Repita la contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repita la contraseña">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputEmail1" style="float: left;">Dirección</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su dirección">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputEmail1" style="float: left;">Teléfono</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su teléfono(Ejemplo, +57 302 450 6783)">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputEmail1" style="float: left;">Selecciona tu ciudad o municipio</label>
            <select class="form-control">
              <option>Selecciona</option>
              <option>Barbosa</option>
              <option>Girardota</option>
              <option>Copacabana</option>
              <option>Bello</option>
              <option>Medellín</option>
              <option>Itagüí</option>
              <option>Envigado</option>
              <option>Sabaneta</option>
              <option>Caldas</option>
            </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputEmail1" style="float: left;">Ingrese su fecha de nacimiento</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su fecha de nacimiento">
            </div>
          </div>
          <div class="form-group form-check">
            <div class="col-md-6 cl-sm-12">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-left: 150px;">
            <label class="form-check-label" for="exampleCheck1" style="margin-right: 140px;">Acepto Términos de Servicio</label>
            </div>
          </div>
          <p style="margin-bottom: 5px;">¿Ya tienes cuenta? <a href="Iniciarsesion.php"data-toggle="modal" data-target="#exampleModal2">Iniciar Sesión</a></p>
          <button type="submit" class="btn btn-primary mt-2">Regístrate</button>
        </form> </center>
      </div>
    </div>
  </section><!-- End Pricing Section -->
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>