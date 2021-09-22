<!DOCTYPE html>
<html lang="mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/estilos.css">
    <link rel="stylesheet" href="/CSS/Normalize.css">
    <title>Inicio</title>
</head>
<body  style="background-color: #f0f0f0;">
<!-- HEADER -->
    <header class="header">
<!-- NAVBAR -->
        <nav class="row align-items-start justify-content-end pt-3" style="margin-right: 0.1px; margin-left: 0.1px;">
            <div class="col-12 col-md-6 col-lg-3 border-none d-flex  me-lg-1 rounded-pill shadow bg-light justify-content-around">
                <a href="" class="text-decoration-none link-dark fs-5 titulo " >Nosotros</a> 
                <a href="" class="text-decoration-none link-dark fs-5 titulo" >Servicios</a>
                <a href="" class="text-decoration-none link-dark fs-5 titulo " >Contacto</a>
            </div>
        </nav>
    </header>

<!-- SECCTION -->
    <section class="row  bg-seccion" >
        <div class="col-12 col-md-6 col-lg-8">
            <img class="img-fluid" src="/IMG/Seccion.jpg"  alt="">
        </div>
        <div class="col-12 col-md-6 col-lg-4 justify-content-end text-white  ">
            <p class="display-3 text-center titulo " style="letter-spacing: 10px;">Raptor</p>
            <p class="fs-4 text-capitalize container" style="color: #E5BE51 ;">Es una empresa dedicada al desarrollo web de tu negocio</p>
            <p class="fs-5 container lh-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium enim eius accusamus commodi inventore laborum numquam magni beatae nostrum voluptatem quo, quaerat exercitationem ut quam quisquam repudiandae corporis architecto deserunt?</p>
        </div>
    </section>

<!-- MAIN -->
    <main class="container">
        <div class="row">
            <div class="col-12 my-3">
                <p class="h1 text-center titulo">Versiones</p>
                <p class="text-center texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aperiam possimus deleniti dolor. Illum, quam.</p>
            </div>
        </div>
        <!-- CARDS -->
        <div class="row justify-content-center">
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
        
        
            
        

    </main>

<!-- FOOTER -->
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>