<?php
include('Menu.php');
$Animal = $_REQUEST['id'];
?>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modificar Animal</h1>
          <?php  
            include( '../../../Controlador/conex.php'); 
              # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
              $sql = "SELECT Idanimal, Nombreanimal, Fotoanimal, Descrianimal, Descriraza, Descriestado, Descrimuni FROM raza 
              INNER JOIN animal ON raza.Idraza = animal.Idraza
              INNER JOIN estado ON estado.Idestado = animal.Idestado
              INNER JOIN municipio ON municipio.Idmunicipio = animal.Idmunicipio
              WHERE  Idanimal = $Animal";
              $eje = $conexion->query($sql);
              # Mostramos a través de un ciclo todas las opciones válidas:
              while($fila = $eje->fetch_row()){
              
          ?>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <form method="post" action="../../../Controlador/ModiAnimal.php" class="mr-5 ml-5 mt-5">
            <div class="form-row">
              <div class="form-group col-md-6">
                    <label for="inputCity">Cód. Animal</label>
                    <input type="text" name="Idanimal" readonly class="form-control" value="<?php echo ''.$fila[0].'';?>">
                  </div>
              <div class="form-group col-md-6">
                    <label for="inputState">Raza</label>
                    <select id="inputState" class="form-control" name="Idraza">
                    <?php  
                        include( '../../../Controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM raza";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }?>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control" name="Idestado">
                    <?php  
                        include( '../../../Controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM estado";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }?>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputState">Municipio</label>
                    <select id="inputState" class="form-control" name="Idmunicipio">
                    <?php  
                        include( '../../../Controlador/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM municipio";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }?>
                    </select>
                  </div>
             
                  <div class="form-group col-md-6">
                    <label for="inputCity">Nombre</label>
                    <input type="text" name="Nombreanimal" class="form-control" value="<?php echo ''.$fila[1].'';?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Foto</label>
                    <input type="text" name="Fotoanimal" class="form-control" value="<?php echo ''.$fila[2].'';?>">
                  </div>
                <div class="form-group  col-md-6">
                  <label for="inputAddress">Descripción</label>
                  <input type="text" name="Descrianimal" class="form-control" value="<?php echo ''.$fila[3].'';?>" placeholder="Descripción del animal">
                </div>
                  <div class="col-md-6">
                  <center> <button type="submit" class="btn btn-primary mb-5" name="BtnGuardar">Modificar</button></center> 
                  </div>
                </div> 
              </form>
        </div>
      <?php } ?>
    </div>
                <!-- /.container-fluid -->
            <!-- End of Main Content -->

            <!-- Footer -->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>