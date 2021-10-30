<!DOCTYPE html>
<html lang="mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CSS/estilos.css">
    <link rel="stylesheet" href="/CSS/Normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap" rel="stylesheet">  
    <link rel="icon" type="image/png" sizes="32x32" href="/IMG/Raptor-Navbar.png">
    <title>CRM</title>
</head>
<body style="background-color: #f0f0f0;">
<?php require('NavBar.php') ?>

    <header class="container ">
    <div class="col-12 text-center py-3">
            <img class="img-fluid " src="/IMG/CRM.png" width="" alt="">
        </div>
    </header>
    
    

    <section class="row margen bg-secction-crm justify-content-end">
        <div class="col-12 col-lg-6 align-self-center px-5">
            <p class="text-center fs-5 ff-raleway text-white">
                Añade tus proyectos para que tus clientes lo conozcan desde tu sitio web. <br>
                Realiza contratos fácilmente rellenando los recuadros con los datos marcados, lleva un mejor control y lo tendrás disponible en todo momento.
            </p>
        </div>
    </section>
    <!-- TABLA -->
    <?php require('tablaCRM.php') ?>
    
    <section>        <div class="row mt-3 margen bg-light align-items-center shadow">
            <aside class="col-12 col-md-6 col-lg-7 text-center ms-1 ms-md-0">
                <img class="img-fluid float-start " src="/IMG/Section-inmobiliaria.jpg"  width="100%" alt="">
            </aside>
            <div class="col-12 col-md-6 col-lg-5 ">
                <p class="fs-3 text-center texto ">La más amplia gama de herramientas para ayudarte a optimizar tus actividades<br> <strong> Ahorrandote tiempo y dinero.</strong></p>
            </div>
        </div>
    </section>    
    

    
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>