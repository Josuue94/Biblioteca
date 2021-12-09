<?php
if(strlen(session_id()) < 1){
    session_start();
}

//$user = $_SESSION['username'];
/*if(!isset($user)){
    header("location: index.php");
}else{
     require "principal.php";
     }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de El Salvador</title>
    <!--tipografia-->
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet"> 
    <!-- fin tipografia-->
    <!--Codigo de Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="shortcut icon" href="imagenes/favicon.png">
    <link rel="stylesheet" href="css1/colores.css">
    <script src='js/validacion.js'></script>
    <!-- Fin - Codigo de Bootstrap-->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="background-color: #ffffff;">
    <img src="imagenes/biblioteca-de-es.png" width="100px" height="100px">
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a data-scroll="" class="nav-link text-black" href="#inicio">Inicio</a>
            </li>
            <li class="nav-item">
                <a data-scroll="" class="nav-link text-black" href="#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
                <a data-scroll="" class="nav-link text-black" href="#galeria">Galeria</a>
            </li>
            <li class="nav-item">
                <a data-scroll="" class="nav-link text-black" href="#contacto">Contacto</a>
            </li>
            <li class="nav-item">
                <a data-scroll="" class="nav-link text-black" href="logica/salir.php">Salir</a>
            </li>
        </ul>
</div>
    </nav>
    <header class="header d-flex justify-content-center align-items-center" id="inicio">
    <h1 class="text-white text-center text-uppercase wow bounceInDown" id="inicio"
    style="visibility: visible; animation-name: bounceInDown;"> Biblioteca de El Salvador </h1>
</header>
<main>
        <section class="container my-5" id="nosotros">
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #008BD3;">
                <center>
            <h3 style="color: #ffffff;"><i style="color: #ffffff;" class="fas fa-users"></i> NOSOTROS </h3>
            </center>
            </nav>
            <h2 class="separador text-center mt-5 wow slideInUp" style="visibility: visible; animation-name: slideInUp;"> Biblioteca de El Salvador </h2>

            <div class="row d-flex justify-content-center">
                <div class="col-md-5 d-flex flex-wrap align-content-center my-3 wow rotateInDownLeft" style="visibility: visible; animation-name: rotateInDownLeft;">
                    <p>“No es solo una biblioteca. Es una nave espacial que te llevará a los 
                        puntos más lejanos del universo, una máquina del tiempo que te 
                        llevará al pasado lejano y al lejano futuro, un maestro que sabe 
                        más que ningún ser humano, un amigo que te divertirá y te consolará 
                        y sobre todo una salida a una vida mejor, más feliz y más útil”</p>
                </div>
                <div class="col-md-5 wow rotateInDownRight" style="visibility: visible; animation-name: rotateInDownRight;">
                    <img src="imagenes/biblioteca-de-es.png" class="img-fluid" alt="">
                </div>
            </div>
        </section>
        <section class="container my-5" id="galeria">
            <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #008BD3;">
            <center>
        <h3 style="color: aliceblue;"><i style="color: aliceblue;" class="fas fa-camera"></i> Galeria de Libros   </h3>
        </center>
        </nav>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 my-2 order-lg-1 order-md-4">
                    <figure class="figure">
                        <img src="imagenes/libro2.jpg" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption ">FALL TO EARTH</figcaption>
                      </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 my-2 order-lg-2 order-md-3">
                    <figure class="figure">
                        <img src="imagenes/libro1.jpg" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption ">THE ARRIVALS</figcaption>
                      </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 my-2 order-lg-3 order-md-2">
                        <figure class="figure">
                            <img src="imagenes/libro3.jpg" class="figure-img img-fluid rounded" alt="...">
                            <figcaption class="figure-caption ">SPACE ACEDEMY</figcaption>
                          </figure>
                </div>
            </div>
        </section>
</main>

    
</body>
</html>
