<?php
include('Menu.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Usuario</h1>
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
                                            <th>Identificación</th>
                                            <th>Nombre completo</th>
                                            <th>Correo</th>
                                            <th>Clave</th>
                                            <th>Teléfono</th>
                                            <th>Tipo usuario</th>
                                            <th>Tipo documento</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Identificación</th>
                                            <th>Nombre completo</th>
                                            <th>Correo</th>
                                            <th>Clave</th>
                                            <th>Teléfono</th>
                                            <th>Tipo usuario</th>
                                            <th>Tipo documento</th>
                                            <th>Eliminar</th>
                                            <th>Modificar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                      include( '../../../Controlador/conex.php'); 
                      $cons = $conexion -> query("SELECT Idusuario, Nombrecomple, Correousua, Contrausua, Telefonousua, Descriusua, Descridocu FROM tipousuario
                      INNER JOIN usuario ON  tipousuario.IdTiusua =  usuario.IdTiusua
                      INNER JOIN  tipodoc  ON  tipodoc.IdTidocu = usuario.IdTidocu");
                      while ($row = $cons -> fetch_row()) {
           ?>
            <tr>
            <td><?php echo ''.$row[0].''; ?></td>
            <td><?php echo ''.$row[1].''; ?></td>
            <td><?php echo ''.$row[2].''; ?></td>
            <td><?php echo ''.$row[3].''; ?></td>
            <td><?php echo ''.$row[4].''; ?></td>
            <td><?php echo ''.$row[5].''; ?></td>
            <td><?php echo ''.$row[6].''; ?></td>
        
          <!-- Si el usuario presiona el botòn Modificar ira a el archivo Modificarusua, si presiona eliminar irà a Borrarusua en la Carpeta Control--> 
          <!-- Onclick nos dice a donde se va a dirigir cuando presione el botón-->    
            <td> <center><button type="submit" class="btn btn-sm bg-gradient-primary" name="EliminaUsua" onclick="location='../../../Controlador/Borrarusua.php?id=<?php echo ''.$row[0].'' ?>'"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></button></center></td>
            <td> <center> <button type="submit" class="btn btn-sm bg-gradient-danger"  data-toggle="modal" data-target="#exampleModal1?id<?php echo ''.$row[0].''; ?>"  ><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button>
                      
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
            <form method="post" action="../../../Controlador/Guardarusua.php">
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="inputState">Tipo documento</label>
                    <select id="inputState" class="form-control" name="IdTidocu">
                    <?php  
                        include( '../../../Control/conex.php'); 
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
                    <input type="number" name="IdUsuario" class="form-control" id="inputEmail4">
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
                          while($row = $eje->fetch_row()){
                            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                          }?>
                    </select>
                  </div>
             
                  <div class="form-group col-md-6">
                    <label for="inputCity">Nombre</label>
                    <input type="text" name="Nombrecomple" class="form-control" id="inputCity">
                  </div>
                <div class="form-group  col-md-6">
                  <label for="inputAddress2">Teléfono</label>
                  <input type="number" name="Telefonousua" class="form-control" id="inputPhone" placeholder="Teléfono">
                </div>
               
                  
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" name="Correousua" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" name="Contrausua" class="form-control" id="inputPassword4">
                  </div>
                </div>
                  
                  
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