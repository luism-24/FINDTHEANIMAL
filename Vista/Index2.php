<?php
include('Menu.php');
?>

    <div class="container-fluid gedf-wrapper" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" class="h5">
                        <ul class="list-group list-group-flush">
                        <div class="h5"><span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo$_SESSION['usuario'];?></span> <img src="App/Admon/img/verificar.png" style="width: 5%; height: 5%;"></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Haz una publicación
                                 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">

                        <div class="btn-toolbar justify-content-between">
                            <form method="POST" action="Publicar.php">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Nueva publicación</button>
                            </div>
                            </form>
                            <div class="btn-group">
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop">
                                    <i class="fa fa-globe"></i>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Público</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-users"></i> Amigos</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Solo yo</a></li>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuración</div>
                                        <a class="dropdown-item" href="#">Guardar</a>
                                        <a class="dropdown-item" href="#">No me interesa</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                
     <?php 
        #Conectamos a la Base de datos
            include( '../Controlador/conex.php'); 
            #Creamos una variable, $Consulta, que va a contener el Script Select(Consulta a la base de datos)
            
            $Consulta="SELECT Idanimal, Nombreanimal, Fotoanimal, Descrianimal, Descriraza, Descriestado, Descrimuni FROM raza 
                INNER JOIN animal ON raza.Idraza = animal.Idraza
                INNER JOIN estado ON estado.Idestado = animal.Idestado
                INNER JOIN municipio ON municipio.Idmunicipio = animal.Idmunicipio";
                #Creamos una variable, $Tour que es envia la conexión y ejecuta la consulta $Consulta
            $Tour=$conexion->query($Consulta);
                #Creamos un ciclo que permite que los datos de la consulta sean insertados en un vector 
                #llamado $row, que se ejecuta mientras se encuentres datos dentro de la tabla que estamos 
                #consultando

            while ($row=$Tour->fetch_row()){
     ?>
<div class="container">
<div class="card" style="width: 100%; margin-top: 25px">
             <!-- En la etiqueta de imágenes creamos la ruta donde vamos a insertar las imágenes y consultamos 
             el nombre  de la imagen, en este caso esta en la posición 5; recordemos  que la carpeta que estamos
            llamando debe contener el nombre y extensión de la imagen que estamos consultando,
            en este caso, las imágenes deben estar en la carpeta assets/img (Vista)-->                 
            <img src="App/Admon/img/<?php echo ''.$row[2].''; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                 <!-- En la posición 1 está el nombre del sitio -->  
                <h5 class="card-title" style="color: #3b626f;"><?php echo ''.$row[1].''; ?></h5> <i class="fa-solid fa-heart"></i> <i class="fa-solid fa-bookmark" style="margin-left: 10px;"></i><i class="fa-solid fa-paper-plane" style="margin-left: 10px;"></i>
                 <!-- Consultamos los demás datos desde la base de datos -->  
                <p class="card-text card-text1">
                <b>Nombre: </b><?php echo ''.$row[1].''; ?><br>
                <b>Descripción: </b><?php echo ''.$row[3].''; ?><br>
                <b>Raza: </b><?php echo ''.$row[4].''; ?><br>
                <b>Estado: </b><?php echo ''.$row[5].''; ?><br>
                

                </p>
            </div>
            
            </div>
            
         </div>    
         <?php } ?>
         </div>
        </div>
    </div>

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