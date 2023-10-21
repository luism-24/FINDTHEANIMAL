<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Animal</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="col-md-12 align-self-end card-header py-3 justify-content-end">
                            <button class="btn btn-sm bg-gradient-primary offset-md-10 col-md-2 " data-toggle="modal" data-target="#exampleModal">Nuevo Animal</button>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Cód. Animal</th>
                                            <th>Nombre</th>
                                            <th>Foto</th>
                                            <th>Descripción</th>
                                            <th>Raza</th>
                                            <th>Estado</th>
                                            <th>Municipio</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Cód. Animal</th>
                                            <th>Nombre</th>
                                            <th>Foto</th>
                                            <th>Descripción</th>
                                            <th>Raza</th>
                                            <th>Estado</th>
                                            <th>Municipio</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                      include( '../../../Controlador/conex.php'); 
                      $cons = $conexion -> query("SELECT Idanimal, Nombreanimal, Fotoanimal, Descrianimal, Descriraza, Descriestado, Descrimuni FROM raza 
                      INNER JOIN animal ON raza.Idraza = animal.Idraza
                      INNER JOIN estado ON estado.Idestado = animal.Idestado
                      INNER JOIN municipio ON municipio.Idmunicipio = animal.Idmunicipio");
                      while ($row = $cons -> fetch_row()) {
           ?>
            <tr>
            <td><?php echo ''.$row[0].''; ?></td>
            <td><?php echo ''.$row[1].''; ?></td>
            <td><img src="img/<?php echo ''.$row[2].''; ?>" width="60px" heigt="60px"></td>
            <td><?php echo ''.$row[3].''; ?></td>
            <td><?php echo ''.$row[4].''; ?></td>
            <td><?php echo ''.$row[5].''; ?></td>
            <td><?php echo ''.$row[6].''; ?></td>
        
          <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
          <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
          <td> <center><button type="submit" class="btn btn-sm bg-gradient-primary" name="EliminaUsua" onclick="location='../../../Controlador/Borrarusuaanimal.php?id=<?php echo ''.$row[0].'' ?>'"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></button></center></td>
          <td> <center> <button type="submit" class="btn btn-sm bg-gradient-danger"  onclick="location='ModiAnimal.php?id=<?php echo ''.$row[0].'' ?>'" ><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                
       </tr>
       <?php }   ?>
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
                        <span>Copyright &copy; FIND THE ANIMAL</span>
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
          <h5 class="modal-title text-success" id="exampleModalLabel">Nuevo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="../../../Controlador/Guardarusuaanimal.php">
            <div class="form-row">
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
                    <input type="text" name="Nombreanimal" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCity">Foto</label>
                    <input type="text" name="Fotoanimal" class="form-control" id="inputCity">
                  </div>
                <div class="form-group  col-md-6">
                  <label for="inputAddress">Descripción</label>
                  <input type="text" name="Descrianimal" class="form-control" id="inputAddress" placeholder="Descripción del animal">
                </div>
                  
                  
                </div>
                
                <center> <button type="submit" class="btn btn-primary" name="BtnGuardar">Guardar</button></center> 
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