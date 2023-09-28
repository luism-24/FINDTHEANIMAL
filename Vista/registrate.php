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
        <form method="post" action="../Controlador/GuardarRegistrarUsuar.php"> <center>
        <div class="form-row">
        <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputEmail1" style="float: left;">Tipo Documento</label>
              <select id="inputState" class="form-control" name="IdTidocu">
              <?php  
                    include( '../Controlador/conex.php'); 
                    # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                    $sql = "SELECT * FROM tipodoc ";
                    $eje = $conexion->query($sql);
                    # Mostramos a través de un ciclo todas las opciones válidas:
                    while($row = $eje->fetch_row()){
                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                    }
              ?>
              </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputEmail1" style="float: left;">Documento</label>
              <input type="number" class="form-control" name="IdUsuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre documento">
              </div>
            </div> 
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputEmail1" style="float: left;">Nombre</label>
              <input type="text" class="form-control" name="Nombrecomple" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre completo">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 cl-sm-12 mt-2" >
              <label for="exampleInputPassword1" style="float: left;">Correo Electrónico</label>
              <input type="email" class="form-control" name="Correousua" id="exampleInputPassword1" placeholder="Ingrese su correo electrónico">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputPassword1" style="float: left;">Contraseña</label>
            <input type="password" class="form-control" name="Contrausua" id="exampleInputPassword1" placeholder="Ingrese una contraseña"> <br>
            <label for="exampleInputPassword1" style="float: left;">Repita la contraseña</label>
            <input type="password" class="form-control" name="Contrausua" id="exampleInputPassword1" placeholder="Repita la contraseña">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 cl-sm-12 mt-2" >
            <label for="exampleInputEmail1" style="float: left;">Teléfono</label>
            <input type="number" class="form-control" name="Telefonousua" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su teléfono(Ejemplo, +57 302 450 6783)">
            </div>
          </div> 
          <div class="form-group form-check">
            <div class="col-md-6 cl-sm-12">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-left: 150px;">
            <label class="form-check-label" for="exampleCheck1" style="margin-right: 140px;">Acepto Términos de Servicio</label>
            </div>
          </div>
          <button  type="submit" name="BtnGuardar" class="btn btn-primary mt-2" >Regístrate</button>
          <p style="margin-bottom: 5px;">¿Ya tienes cuenta? <a href="Iniciarsesion.php"data-toggle="modal" data-target="#exampleModal2">Iniciar Sesión</a></p>
          <p style="margin-bottom: 5px;">¿No tienes cuenta como empresa? <a href="registrateempre.php"data-toggle="modal" data-target="#exampleModal2">Regístrarte como empresa</a></p>

        </form> </center>
      </div>
    </div>
  </section><!-- End Pricing Section -->
  <!-- ======= Footer ======= -->
  <?php
  include('Footer.php');
  ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>