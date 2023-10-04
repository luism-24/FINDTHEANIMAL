<?php
include('Menu.php');
$Usuario = $_REQUEST['id'];
?>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modificar Usuario</h1>
        <?php  
                      include( '../../../Controlador/conex.php'); 
                        # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                        $sql = "SELECT Idusuario, Nombrecomple, Correousua, Contrausua, Telefonousua, Descriusua, Descridocu FROM tipousuario
                        INNER JOIN usuario ON  tipousuario.IdTiusua =  usuario.IdTiusua
                        INNER JOIN  tipodoc  ON  tipodoc.IdTidocu = usuario.IdTidocu
                        WHERE  Idusuario = $Usuario";
                        $eje = $conexion->query($sql);
                        # Mostramos a través de un ciclo todas las opciones válidas:
                        while($fila = $eje->fetch_row()){
                        
                    ?>
        <div class="card shadow mb-4">
        <form method="post" action="../../../Controlador/ModiUsua.php" class="mr-5 ml-5 mt-5">
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="inputState">Tipo documento</label>
                    <select id="inputState" class="form-control" name="IdTidocu" >
                    <?php  
                      include( '../../../Controlador/conex.php'); 
                        # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                        $sql = "SELECT * FROM tipodoc";
                        $eje = $conexion->query($sql);
                        # Mostramos a través de un ciclo todas las opciones válidas:
                        while($row = $eje->fetch_row()){
                        echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                    }?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4" >Identificación</label>
                    <input type="number" readonly name="IdUsuario" class="form-control" value="<?php echo ''.$fila[0].'';?>">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputState">Tipo usuario</label>
                    <select id="inputState" class="form-control" name="IdTiusua">
                    
                    <?php  
                        include( '../../../Control/conex.php'); 
                          # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                          $sql = "SELECT * FROM tipousuario";
                          $eje = $conexion->query($sql);
                          # Mostramos a través de un ciclo todas las opciones válidas:
                          while($row1 = $eje->fetch_row()){
                            echo '<option value="'.$row1[0].'">'.$row1[1].'</option>';
                          }?>
                    </select>
                  </div>
             
                  <div class="form-group col-md-6">
                    <label for="inputCity">Nombre</label>
                    <input type="text" name="Nombrecomple" class="form-control" value="<?php echo ''.$fila[1].'';?>">
                  </div>
                <div class="form-group  col-md-6">
                  <label for="inputAddress2">Teléfono</label>
                  <input type="number" name="Telefonousua" class="form-control" value="<?php echo ''.$fila[4].'';?>" placeholder="Teléfono">
                </div>
               
                  
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" name="Correousua" class="form-control" value="<?php echo ''.$fila[2].'';?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" name="Contrausua" class="form-control" value="<?php echo ''.$fila[3].'';?>">
                  </div>
                </div>
                <center> <button type="submit" class="btn btn-primary mb-5" name="BtnGuardar">Modificar</button></center> 
            </div>
          </form>

       <?php }?>
        </div>
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