<?php
include('Menu.php');
$Municipio = $_REQUEST['id'];
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Modificar Municipio</h1>
            <?php  
                include( '../../../Controlador/conex.php'); 
                    # Consultamos a la tabla tipodocu, que es la que tiene los tipos de docuementos en la BD:
                    $sql = "SELECT * FROM municipio
                    WHERE  Idmunicipio = $Municipio";
                    $eje = $conexion->query($sql);
                    # Mostramos a través de un ciclo todas las opciones válidas:
                    while($fila = $eje->fetch_row()){
                ?>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <form method="post" action="../../../Controlador/ModiMuni.php" class="mr-5 ml-5 mt-5">
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="inputEmail4">Cód. Municipio</label>
                    <input type="text" name="Idmunicipio" readonly class="form-control" value="<?php echo ''.$fila[0].'';?>"> 
                  </div> 
                  <div class="form-group col-md-8">
                    <label for="inputEmail4">Nombre Municipio</label>
                    <input type="text" name="Descrimuni" class="form-control" value="<?php echo ''.$fila[1].'';?>"> <br>
                    <center> <button type="submit" class="btn btn-primary mb-5" name="BtnGuardar">Modificar</button></center> 
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