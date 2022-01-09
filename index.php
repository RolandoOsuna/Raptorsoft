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
    <title>Inicio</title>
</head>
<body class="margen" style="background-color: #f0f0f0;">
<!-- BOTON FLOTANTE -->
    <?php require('botones.php'); ?>
<!-- HEADER -->
    <header class="header d-none d-lg-block">
<!-- NAVBAR -->
        <nav class="row align-items-start justify-content-end pt-3" style="margin-right: 0.1px; margin-left: 0.1px;">
            <div class="col-12 col-md-6 col-lg-3 border-none d-flex  me-lg-1 rounded-pill shadow bg-light justify-content-around">
                <a href="ERP.php" class="text-decoration-none link-dark fs-5 titulo " >ERP</a> 
                <a href="CRM.php" class="text-decoration-none link-dark fs-5 titulo" >CRM</a>
                <a href="Clientes.php" class="text-decoration-none link-dark fs-5 titulo " >Clientes</a>
            </div>
        </nav>

        <div class="col-12 col-lg-6 ps-lg-3 d-none d-md-block">
            <h1 class="ml14">
                <span class="text-wrapper">
                    <span class="letters">Bienvenido a Raptorsoft</span>
                    <span class="line"></span>
                    <span class="letters">
                        <p class="fs-1 text-center">
                ¡Llámanos!<br>
                <a class="text-decoration-none link-secondary" href="http://wa.link/rsjw0t">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <a class="text-decoration-none link-secondary" href="http://wa.link/rsjw0t">(694) 110-2012</a>
            </p> 
                    </span>
                </span>
            </h1>
        </div>
        
    </header>

    <header class="header-responsive d-block d-lg-none">
        <nav class="row align-items-start justify-content-end pt-3" style="margin-right: 0.1px; margin-left: 0.1px;">
            <div class="col-12 col-md-6 col-lg-3 border-none d-flex  me-lg-1 rounded-pill shadow bg-light justify-content-around">
                <a href="ERP.php" class="text-decoration-none link-dark fs-5 titulo " >ERP</a> 
                <a href="CRM.php" class="text-decoration-none link-dark fs-5 titulo" >CRM</a>
                <a href="Clientes.php" class="text-decoration-none link-dark fs-5 titulo " >Clientes</a>
            </div>
        </nav>
        <div class="col-12 col-lg-6 ps-lg-3 d-none d-md-block">
            <h1 class="ml14">
                <span class="text-wrapper">
                    <span class="letters">Bienvenido a Raptorsoft</span>
                    <span class="line"></span>
                </span>
            </h1>
        </div>
    </header>


<!-- SECCTION -->
    <section class="row  bg-seccion">
        <div class="col-12 col-md-6 col-lg-8">
            <img class="img-fluid" src="/IMG/Seccion.jpg"  alt="" loading="lazy">
        </div>
        <div class="col-12 col-md-6 col-lg-4 justify-content-end text-white  ">
            <a class="text-decoration-none text-white" href="CRM.php">
                <img class="img-fluid mx-auto d-block pt-2 pt-lg-0" src="/IMG/LogoRaptor.png" width="60%" alt="">
                <p class="fs-4 text-capitalize container" style="color: #E5BE51 ;">¡Accede a la automatización de tu negocio!</p>
                <p class="fs-5 container arial" >Visualiza los movimientos realizados de:</p> 
                <ul class="ps-5 lh-5 fs-5 arial">
                    <li >Ventas</li>
                    <li >Pagos</li>
                    <li >Rendimientos</li>
                    <li >Productos más vendidos</li>
                    <li >Ventas de vendedores</li>
                    <li >Descarga un reporte con la venta de un producto</li>
                </ul>
            </a>
        </div>
    </section>

    <div class="card border-0">
        <div class="row margen justify-content-center">
            <div class="col-12 col-md-7 align-self-center ps-lg-5">
                <h1 class="texto text-center ">ERP Raptor</h1>
                <p class="text-center titulo fs-4 px-4 ps-lg-0">Utiliza nuestras soluciones de software en la nube ya que es mucho más fácil gracias a nuestra lista de integraciones, sácale el mayor partido a las aplicaciones y a los servicios que te ayudan a hacer crecer a tu negocio.</p>
            </div>
            <!-- VIDEO -->
            <div class="col-12 col-md-5 ">
                <video class="" onloadedmetadata="this.muted=true" autoplay loop width="100%">
                    <source src="/IMG/Video-Index.mp4">
                </video>
            </div>
        </div>
    </div>

<!-- MAIN -->
    <main class="container">
        <!-- ACORDEON -->
        <div class="accordion mt-3 mb-5" id="accordionPanelsStayOpenExample">
            <!-- RAPTOR -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button 
                        class="accordion-button" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#panelsStayOpen-collapseOne" 
                        aria-expanded="true" 
                        aria-controls="panelsStayOpen-collapseOne">
                        Raptor
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse  show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-12 text-center d-block d-md-none ">
                                <img class="img-fluid " src="/IMG/Raptor-card.jpg" width="50%" alt="" loading="lazy">
                            </div>
                            <div class="col-md-6 col-lg-3 text-center d-none d-md-block ">
                                <img class="img-fluid " src="/IMG/Raptor-card.jpg" width="80%" alt="" loading="lazy">
                            </div>
                            <div class="col-12 col-md-6 col-lg-9 text-center">
                            <p class="fs-4 text-info">Atiende, registra y cobra <br>
                                Facil de usar, Herramientas integradas 24/7   
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <a href="ERP.php" class="text-decoration-none text-muted">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CREMERIA -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button 
                        class="accordion-button btn-acordeon collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#panelsStayOpen-collapseTwo" 
                        aria-expanded="false" 
                        aria-controls="panelsStayOpen-collapseTwo">
                        Cremería
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse  show" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12 text-center d-block d-md-none ">
                                <img class="img-fluid " src="/IMG/Cremeria/Cremeria-card.jpg" width="80%" alt="" loading="lazy">
                            </div>
                            <div class="col-md-6 col-lg-3 text-center d-none d-md-block ">
                                <img class="img-fluid " src="/IMG/Cremeria/Cremeria-card.jpg" width="100%" alt="" loading="lazy">
                            </div>
                            <div class="col-12 col-md-6 col-lg-9 ">
                                <h1 class="ps-5 pt-3 text-success" style="letter-spacing: 10px;">Cremerías</h1>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <a href="Cremeria.php" class="text-decoration-none text-muted">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHANGARRO -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button 
                        class="accordion-button btn-acordeon collapsed" 
                        type="button" data-bs-toggle="collapse" 
                        data-bs-target="#panelsStayOpen-collapseThree" 
                        aria-expanded="false" 
                        aria-controls="panelsStayOpen-collapseThree">
                        Changarros 
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="py-3 accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="row">
                        <div class="col-12 text-center d-block d-md-none ">
                            <img class="img-fluid " src="/IMG/Abarrotes/Abarrotes-card2.jpeg" width="80%" alt="" loading="lazy">
                        </div>
                        <div class="col-md-6 col-lg-3 ps-4 text-center d-none d-md-block ">
                            <img class="img-fluid " src="/IMG/Abarrotes/Abarrotes-card2.jpeg" width="100%" alt="" loading="lazy">
                        </div>
                        <div class="col-12 col-md-6 col-lg-9 ">
                            <h1 class="ps-5 pt-3 text-danger" style="letter-spacing: 10px;">Changarros</h1>
                            <!-- <p>Versión aplicada en tiendas de abarrotes</p> -->
                        </div>
                        <div class="col-12 text-end pe-4">
                            <a href="Changarro.php" class="text-decoration-none text-muted">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </main>    


<!-- TABLA -->
<section class="bg-secction">
    <?php require('tablaERP.php') ?>

</section>



<!-- FOOTER -->
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js.js"></script>
</body>
</html>