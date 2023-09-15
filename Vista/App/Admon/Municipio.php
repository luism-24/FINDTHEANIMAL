<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Municipios</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nuevo Usuario</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. Municipio</th>
                                            <th>Descripción</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Cód. Municipio</th>
                                            <th>Descripción</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                    <?php 
                      include( '../../../Controlador/conex.php'); 
                      $cons = $conexion -> query("SELECT * FROM municipio");
                      while ($row = $cons -> fetch_row()) {
           ?>
            <tr>
            <td><?php echo ''.$row[0].''; ?></td>
            <td><?php echo ''.$row[1].''; ?></td>
        
          <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
          <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
            <td> <center><button type="submit" class="btn btn-sm bg-gradient-primary" name="EliminaUsua" onclick="location='../../../Controlador/Borrarusuamun.php?id=<?php echo ''.$row[0].'' ?>'"><img src="img/Borra.png" width="20px"></button></center></td>
            <td> <center> <button type="submit" class="btn btn-sm bg-gradient-danger"  data-toggle="modal" data-target="#exampleModal1?id<?php echo ''.$row[0].''; ?>"  ><img src="img/Modifica.png" width="20px"></button>
                      
       </tr>
       <?php }   ?>
       </tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- MODAL DE USUARIO -->
    <!-- Button trigger modal -->
 
   
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Departamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="../../../Controlador/Guardarusuamun.php">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Nombre Municipio</label>
                    <input type="text" name="Descrimuni" class="form-control" id="inputEmail4">
                  </div>
                  
                
                <center> <button type="submit" class="btn btn-primary" name="BtnGuardar">Nuevo usuario</button></center> 
              </form>
        </div>
        
      </div>
    </div>
  </div>
  
    
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