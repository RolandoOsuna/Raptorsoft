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

    <title>Descripcion</title>
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
                            <img src="/IMG/Abarrotes//Carrusel-Descripcion2.jpg" class="img-fluid d-block" width="400px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Abarrotes/Carrusel-Descripcion3.jpg" class="img-fluid d-block" width="400px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/IMG/Abarrotes/Carrusel-Descripcion4.jpg" class="img-fluid d-block" width="400px" alt="...">
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
            <div class="col-12 col-md-6 col-lg-5 align-self-center justify-content-center ">
                <p class="display-5 titulo text-center pt-3 pt-lg-0">Abarrotes</p>
                <hr>
                <p class="fs-5 texto lh-5 pt-lg-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, iure pariatur. Ea accusantium nostrum ipsam neque omnis nemo repellendus, velit perferendis debitis, alias dolor quia aspernatur recusandae earum iure. Fugiat temporibus, minima corporis optio harum ad, rem, nemo ullam quae aspernatur repellat dolorum non vel.</p>
                <p class="text-end text-success fs-4 pt-0 pt-lg-3">$500.00</p>
                <div class="col-12 d-grid pt-0 pt-lg-3 mx-auto">
                    <button class="btn btn-danger" type="button">Boton</button>    
                </div>
            </div>
        </div>
    </header>   
    
    <section class="container">
        <div class="row">
            <div class="col-12">
        <!-- CARDS -->
                <div class="row justify-content-center">
                    <div class="col-8 card pt-3">
                        <div class="row">
                            <div class="col-9">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis tempore obcaecati, aliquid odio ipsum ad accusantium dolores aspernatur ut, doloremque rerum consequuntur ex rem. Voluptate mollitia a hic deleniti quod?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-2">
                    <div class="col-8 card pt-3">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="/IMG/Raptor-card.jpg" class="img-fluid float-start" width="100%" alt="">         
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis tempore obcaecati, aliquid odio ipsum ad accusantium dolores aspernatur ut, doloremque rerum consequuntur ex rem. Voluptate mollitia a hic deleniti quod?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
                <div class="row justify-content-center pt-2">
                    <div class="col-8 card pt-3">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="/IMG/Raptor-card.jpg" class="img-fluid float-start" width="100%" alt="">         
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis tempore obcaecati, aliquid odio ipsum ad accusantium dolores aspernatur ut, doloremque rerum consequuntur ex rem. Voluptate mollitia a hic deleniti quod?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>