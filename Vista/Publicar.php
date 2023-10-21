<?php
include('Menu.php');
?>

  <main id="main" style="margin-top: 120px;">

    <center><section id="Publica" class="separacion">
      <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="section-header">
              <h3 class="section-title mt-4" >Publica</h3>
              <span class="section-divider"></span>
              <p class="section-description">Si viste un animal, puedes publicarlo aquí.</p>
            </div>
        <div>
        
          <div class="col-lg-6 col-md-12">

            <div class="row">
                  <form method="post" action="../Controlador/Guardarpubli.php">
                    <div class="form-group mt-2">
                        <label for="inputCity" style="float: left;">Nombre</label>
                        <input type="text" name="Nombreanimal" class="form-control" placeholder="Ingrese el nombre del animal" id="inputCity">
                    </div>
                    <div class="form-group mt-2">
                        <label for="inputState" style="float: left;">Raza</label>
                        <select id="inputState" class="form-control" name="Idraza">
                            <?php  
                                include( '../Controlador/conex.php'); 
                                # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                                $sql = "SELECT * FROM raza";
                                $eje = $conexion->query($sql);
                                # Mostramos a través de un ciclo todas las opciones válidas:
                                while($row = $eje->fetch_row()){
                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }?>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                    <label for="inputState" style="float: left;">Estado</label>
                    <select id="inputState" class="form-control" name="Idestado">
                    <?php  
                        include( '../Controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM estado";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }?>
                    </select>
                  </div>
                  <div class="form-group mt-2">
                    <label for="inputState" style="float: left;">Municipio</label>
                    <select id="inputState" class="form-control" name="Idmunicipio">
                    <?php  
                        include( '../Controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM municipio";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }?>
                    </select>
                  </div>
                  <div class="form-group mt-2">
                  <label for="inputAddress" style="float: left;">Descripción</label>
                  <input type="text" name="Descrianimal" class="form-control" id="inputAddress" placeholder="Descripción del animal">
                  </div>
                    <div class="form-group mt-2">
                      <label for="inputCity" style="float: left;">Foto</label>
                      <input type="file" name="Fotoanimal" placeholder="Añada la foto" class="form-control" id="inputCity">
                    </div>
                  <div class="form-group form-check"></div>
                    <button type="submit" name="BtnGuardar" class="btn btn-primary mt-2" style="margin: top 5px ;">Guardar</button>
                </form> 
                </div>

              </div>

            </div>

          </div>

        </section> </center>

  </main><!-- End #main -->
   
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

<!-- ======= Footer ======= -->
  <?php
  include('Footer.php');
  ?>

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