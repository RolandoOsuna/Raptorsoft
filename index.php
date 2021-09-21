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
<body>
<!-- HEADER -->
    <header class="header">
<!-- NAVBAR -->
        <nav class="row align-items-start justify-content-end pt-3" style="margin-right: 0.1px;">
            <div class="col-3  border-none d-flex justify-content-around me-3 rounded-pill shadow ">
                <a href="" class="text-decoration-none link-dark fs-5 ">Nosotros</a> 
                <a href="" class="text-decoration-none link-dark fs-5">Servicios</a>
                <a href="" class="text-decoration-none link-dark fs-5 ">Contacto</a>
            </div>
        </nav>
    </header>

<!-- SECCTION -->
    <section class="row  bg-seccion" >
        <div class="col-12 col-md-6 col-lg-8">
            <img class="img-fluid" src="/IMG/Seccion.jpg"  alt="">
        </div>
        <div class="col-12 col-md-6 col-lg-4 justify-content-end text-white ">
            <p class="display-3 text-center" style="letter-spacing: 10px;">Raptor</p>
            <p class="fs-4 text-capitalize" >Es una empresa dedicada al desarrollo web de tu negocio</p>
            <p class="fs-5" style="line-height : 45px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium enim eius accusamus commodi inventore laborum numquam magni beatae nostrum voluptatem quo, quaerat exercitationem ut quam quisquam repudiandae corporis architecto deserunt?</p>
        </div>
    </section>

<!-- FOOTER -->
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>