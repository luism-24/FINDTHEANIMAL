<?php
include('Menu.php');
?>
    
<section class="container mt-5">
  <div class="row mt-5">

  <div class="section-header" style="margin-top: 25px">
          <h3 class="section-title">Vistos</h3>
          <span class="section-divider"></span>
        </div>
      <!-- Después de crear la fila hacemos la consulta a la tabla que deseamos mostrar datos-->
      <?php 
              #Conectamos a la Base de datos
                    include( '../Controlador/conex.php'); 
                  #Creamos una variable, $Consulta, que va a contener el Script Select(Consulta a la base de datos)
                   
                    $Consulta="SELECT Idanimal, Nombreanimal, Fotoanimal, Descrianimal, Descriraza, Descriestado, Descrimuni FROM animal INNER JOIN raza ON  raza.Idraza = animal.Idraza
                    INNER JOIN estado ON animal.idestado = 1
                    INNER JOIN municipio ON municipio.Idmunicipio = animal.Idmunicipio";
                     #Creamos una variable, $Tour que es envia la conexión y ejecuta la consulta $Consulta
                    $Tour=$conexion->query($Consulta);
                     #Creamos un ciclo que permite que los datos de la consulta sean insertados en un vector 
                     #llamado $row, que se ejecuta mientras se encuentres datos dentro de la tabla que estamos 
                     #consultando

                    while ($row=$Tour->fetch_row()){
                   ?>
                     <!-- Insertamos el div que permite determinar el espacio en que estará insertada la columna-->
           <div class="col-md-4 col-sm-12">
         <!-- De acuerdo a la versión de Bootstrap que estamos manejando, creamos una sola tarjeta-->
            <div class="card" style="width: 18rem; margin-top: 25px">
             <!-- En la etiqueta de imágenes creamos la ruta donde vamos a insertar las imágenes y consultamos 
             el nombre  de la imagen, en este caso esta en la posición 5; recordemos  que la carpeta que estamos
            llamando debe contener el nombre y extensión de la imagen que estamos consultando,
            en este caso, las imágenes deben estar en la carpeta assets/img (Vista)-->                 
            <img src="App/Admon/img/<?php echo ''.$row[2].''; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                 <!-- En la posición 1 está el nombre del sitio -->  
                <h5 class="card-title" style="color: #3b626f;"><?php echo ''.$row[1].''; ?></h5>
                 <!-- Consultamos los demás datos desde la base de datos -->  
                <p class="card-text card-text1">
                <b>Descripción: </b><?php echo ''.$row[3].''; ?><br>
                <b>Raza: </b><?php echo ''.$row[4].''; ?><br>
                <b>Estado: </b><?php echo ''.$row[5].''; ?><br>
                <b>Municipio: </b><?php echo ''.$row[6].''; ?><br>
                

                </p>
                <a href="#" class="btn btn-primary btn-sm">Ver más</a>
            </div>
            
            </div>
            
         </div>    
         <?php } ?>
              <!-- Cerramos las instruccion While donde termina el div de las columnas -->     
  </div>





</section>

  </main><!-- End #main -->

  <footer id="footer" style="background-color: #0b5275; margin-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-start text-center">
          <div class="copyright" style="color: white;">
            &copy; <strong>Find The Animal</strong>. "Mi corazón esta lleno de huellitas"
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="registrate.php" class="scrollto" style="color: white;">Inicio</a>
            <a href="registrate.php#about" class="scrollto" style="color: white;">Nosotros</a>
            <a href="registrate.php" style="color: white;">Registrarme</a>
            <a href="Iniciarsesion.php" style="color: white;">Iniciar sesión</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>