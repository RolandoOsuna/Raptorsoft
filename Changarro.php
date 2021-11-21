<!DOCTYPE html>
<html lang="mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/estilos.css">
    <link rel="stylesheet" href="/CSS/Normalize.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/IMG/Raptor-Navbar.png">

    <title>Changarros</title>
</head>
<body style="background-color: #f0f0f0;">
<?php require('NavBar.php') ?>
    <header class="container">
        <div class="row bg-light p-3 my-3 shadow rounded">
            <div class="col-12 col-md-6 col-lg-7 ps-0 ps-lg-5">
                <!-- CARRUSEL -->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button 
                            type="button" 
                            data-bs-target="#carouselExampleIndicators" 
                            data-bs-slide-to="0" 
                            class="active" 
                            aria-current="true" 
                            aria-label="Slide 1">
                        </button>
                        <button 
                            type="button" 
                            data-bs-target="#carouselExampleIndicators" 
                            data-bs-slide-to="1" 
                            aria-label="Slide 2">
                        </button>
                        <button 
                            type="button" 
                            data-bs-target="#carouselExampleIndicators" 
                            data-bs-slide-to="2" 
                            aria-label="Slide 3">
                        </button>
                        <button 
                            type="button" 
                            data-bs-target="#carouselExampleIndicators" 
                            data-bs-slide-to="3" 
                            aria-label="Slide 4">
                        </button>
                    </div>
                    <div class="carousel-inner ps-0 ps-lg-5">
                        <div class="carousel-item active">
                            <img src="/IMG/Abarrotes/Carrusel-Descripcion1.jpg" class="img-fluid d-block" width="400px" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Abarrotes//Carrusel-Descripcion2.jpg" class="img-fluid d-block" width="400px" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Abarrotes/Carrusel-Descripcion3.jpg" class="img-fluid d-block" width="400px" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Abarrotes/Carrusel-Descripcion4.jpg" class="img-fluid d-block" width="400px" loading="lazy">
                        </div>
                    </div>
                    <button class="carousel-control-prev pe-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next ps-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-4 ">
                <p class="display-5 titulo text-center">Changarros</p>
                <hr>
                <p class="h1 texto text-center lh-5 pt-5 mt-3 ">Optimizado para negocios Medianos y pequeños</p>
                <div class="col-12 d-grid pt-5 mx-auto">
                <button class="btn btn-danger" type="button"><a class="text-decoration-none text-white" href="http://wa.link/rsjw0t"> Mas Información</a> </button>                   </div>
            </div>
        </div>
    </header>   
    
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>