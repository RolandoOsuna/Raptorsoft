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

    <title>ERP</title>
</head>
<body style="background-color: #f0f0f0;">
<?php require('NavBar.php') ?>

    <header class="">
        <div class="col-12 text-center py-3">
            <img class="img-fluid " src="/IMG/ERP.png" width="" alt="">
        </div>
            <div class="card border-0">
                <div class="row margen">
                    <div class="col-12 col-md-7 align-self-center ps-lg-5">
                        <h1 class="texto text-center ps-lg-5">!Llevalo a donde quieras!</h1>
                        <p class="text-center titulo fs-4 ps-lg-5">Accede desde cualquier dispositivo conectado a internet,<br>mantente al tanto de de la organizacion de tu negocio <br>y que todo siga en orden</p>
                    </div>
                    <!-- VIDEO -->
                    <div class="col-12 col-md-5 text-end">
                        <video onloadedmetadata="this.muted=true" autoplay loop width="80%">
                            <source src="/IMG/Video-ERP.mp4">
                        </video>
                    </div>
                </div>
            </div>
    </header>
    
    <section class="container">
        <div class="row align-items-center shadow justify-content-lg-center mt-3 bg-light p-4 mb-4">
            <h2 class="text-center texto" style="color: #E5BE51;">Accede a la automatización de tu negocio</h1>
            <h3>Productos y versiones</h3>
            <p class="fs-5 texto">Utiliza nuestras soluciones de software en la nube ya que es mucho más fácil gracias anuestra lista de integraciones, sácale el mayor partido a las aplicaciones y a los servicios que te ayudan a hacer crecer a tu negocio.</p>
            <div class="col-12 col-lg-4 ">
                <ul class="ps-5 fs-4 arial">
                    <li >Cremerias ®</li>
                    <li >Panaderías®</li>
                    <li >Escuela primaria®</li>
                    <li >Abarroteras®</li>
                    <li >Fruterías®</li>
                    <li >Changarros</li>
                    <li >Carnicerías</li>
                    <li >Comercializadoras</li>
                    <li >Mueblería</li>
                    <li >Distribuidora</li>
                    <li >Ferretería</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="/IMG/Servicios.png" width="" alt="">
            </div>
        </div>      
    </section>
    <!-- TABLA -->
    <?php require('tablaERP.php') ?>



<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>