<!DOCTYPE html>
<html lang="mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/estilos.css">
    <link rel="stylesheet" href="/CSS/Normalize.css">
    <title>Descripcion</title>
</head>
<body style="background-color: #f0f0f0;">
<?php require('NavBar.php') ?>
    <header class="container">
        <div class="row bg-light p-3 my-3 shadow rounded">
            <div class="col-12 col-lg-8 ps-5">
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
                    <div class="carousel-inner ps-5">
                        <div class="carousel-item active">
                            <img src="/IMG/Cremeria/Carrusel-Cremeria-1.jpeg" class="d-block" width="80%" loading="lazy">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Cremeria/Carrusel-Cremeria-2.jpg" class="d-block" width="80%" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Cremeria/Carrusel-Cremeria-3.jpeg" class="d-block" width="80%" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Cremeria/Carrusel-Cremeria-4.jpg" class="d-block" width="80%" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-4 align-self-center">
                <p class="display-5 titulo text-center">Cremería</p>
                <hr>
                <p class="fs-5 texto lh-5 pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, iure pariatur. Ea accusantium nostrum ipsam neque omnis nemo repellendus, velit perferendis debitis, alias dolor quia aspernatur recusandae earum iure. Fugiat temporibus, minima corporis optio harum ad, rem, nemo ullam quae aspernatur repellat dolorum non vel.</p>
                <p class="text-end text-success fs-4 pt-3">$500.00</p>
                <div class="col-12 d-grid pt-3 mx-auto">
                    <button class="btn btn-danger" type="button">Boton</button>    
                </div>
            </div>
        </div>
    </header>   
    
    <section class="container">
        <div class="row">
            <div class="col-12" style="height: 400px;">

            </div>
        </div>
    </section>


<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>