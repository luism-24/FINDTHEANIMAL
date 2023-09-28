<?php
    if(empty($_SESSION['user']))
    {
    echo '
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
                    <a href="index.php" class="scrollto" style="color: white;">Inicio</a>
                    <a href="index.php#about" class="scrollto" style="color: white;">Nosotros</a>
                    <a href="registrate.php" style="color: white;">Registrarme</a>
                    <a href="Iniciarsesion.php" style="color: white;">Iniciar sesión</a>
                </nav>
                </div>
            </div>
            </div>
        </footer>' ;
    } else {
        echo '
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
                    <a href="index2.php" class="scrollto" style="color: white;">Inicio</a>
                    <a href="index2.php#about" class="scrollto" style="color: white;">Nosotros</a>
                </nav>
                </div>
            </div>
            </div>
        </footer>';

    }
    ?>