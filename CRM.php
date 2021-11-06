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
    
    
    
    
      
    
    <!-- CARDS -->
<section >
    <div class="row row-cols-1 row-cols-md-3 g-4 margen px-md-5 pb-3 mt-3" style="margin-left: 0.1px;">
    <!-- Jugador Casual -->
        <div class="col">
            <div class="card bg-success shadow">
                <div class="card-header">
                    <h3 class="card-title text-center text-light">Jugador Casual</h3>
                </div>
                <div class="card-body text-white pb-0">
                    <h4 class="text-center">$299.00</h4>
                    <p class="text-center"><span class="text-white-50">MXM al MES</span> <br><span class="text-black-50">(pago mensual)<br><cite>Anualidad $1,000</cite></span></p>
                    <p class="fs-5 text-center">Tu proyecto personal</p>
                    <p class="text-light"><img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> <span class="pt-5 ps-3">1 Usuario</span> </p>
                    <hr>
                    <p class="text-light"><img class="pb-1" src="/IMG/house-door-fill.svg"  width="8%" alt=""><span class="pt-5 ps-3"> Inmobiliario</span></p>
                    <hr>
                    <p class="text-light"><img class="pb-1" src="/IMG/cloud-plus-fill.svg" width="8%" alt=""><span class="pt-5 ps-3">Hosting: <i>8GB</i></span></p>
                </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                </div>
            </div>
        </div>
    <!-- Aficionado Intermedio -->
        <div class="col">
            <div class="card bg-danger shadow">
                <div class="card-header">
                    <h3 class="card-title text-center text-light">Aficionado Intermedio</h3>
                </div>
                <div class="card-body text-white pb-0">
                    <h4 class="text-center">$599.00</h4>
                    <p class="text-center"><span class="text-white-50">MXM al MES</span> <br><span class="text-black-50">(pago mensual)<br><cite>Anualidad $1,500</cite></span></p>
                    <p class="fs-5 text-center">Atención telefónica por expertos </p>
                    <p class="text-light">
                        <img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> 
                        <span class="pt-5 ps-3">2 Usuarios</span> 
                    </p>
                    <hr>
                    <p class="text-light">
                        <img class="pb-1" src="/IMG/house-door-fill.svg"  width="8%" alt="">
                        <span class="pt-5 ps-3">Inmobiliario</span>
                    </p>
                    <hr>
                    <p class="text-light"><img src="/IMG/card-text.svg" width="8%" alt="">
                        <span class="pt-5 ps-3">Prospectos</span>
                    </p>
                    <hr>
                    <p class="text-light"> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="11%" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                            <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
                            <polyline points="12 8 7 3 3 7 8 12" />
                            <line x1="7" y1="8" x2="5.5" y2="9.5" />
                            <polyline points="16 12 21 17 17 21 12 16" />
                            <line x1="16" y1="17" x2="14.5" y2="18.5" />
                        </svg>
                        <span class="pt-5 ps-2">Estatus</span>
                    </p>
                    <hr>
                    <p class="text-light">
                        <img class="pb-1" src="/IMG/cloud-plus-fill.svg" width="8%" alt="">
                        <span class="pt-5 ps-3">Hosting: <i>16GB</i></span>
                    </p>
                </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                </div>
            </div>
        </div>
    <!-- Aficionado Avanzado -->
        <div class="col">
            <div class="card bg-warning shadow">
                <div class="card-header">
                    <h3 class="card-title text-center text-dark">Aficionado Avanzado</h3>
                </div>
                <div class="card-body text-dark pb-0">
                    <h4 class="text-center">$999.00</h4>
                    <p class="text-center"><span class="text-black-50">MXM al MES</span> <br><span class="text-white-50">(pago mensual)<br><cite><cite></cite>Anualidad $2,000</cite></span></p>
                    <p class="fs-5 text-center">Tu negocio al siguiente nivel.</p>
                    <p class="text-dark">
                        <img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> 
                        <span class="pt-5 ps-3">3 Usuarios</span> 
                    </p>
                    <hr>
                    <p class="text-dark">
                        <img class="pb-1" src="/IMG/house-door-fill.svg"  width="8%" alt="">
                        <span class="pt-5 ps-3">Inmobiliario</span>
                    </p>
                    <hr>
                    <p class="text-dark"><img src="/IMG/card-text.svg" width="8%" alt="">
                        <span class="pt-5 ps-3">Prospectos</span>
                    </p>
                    <hr>
                    <p class="text-dark"> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="11%" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                            <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
                            <polyline points="12 8 7 3 3 7 8 12" />
                            <line x1="7" y1="8" x2="5.5" y2="9.5" />
                            <polyline points="16 12 21 17 17 21 12 16" />
                            <line x1="16" y1="17" x2="14.5" y2="18.5" />
                        </svg>
                        <span class="pt-5 ps-2">Estatus</span>
                    </p>
                    <hr>
                    <p class="text-dark">
                        <img src="/IMG/1976101.svg" width="11%" alt="">
                        <span class="pt-5 ps-2">Contratos</span>
                    </p>
                    <hr>
                    <p class="text-dark">
                        <img src="/IMG/journal-text.svg" width="8%" alt="">
                        <span class="pt-5 ps-3">Proyectos</span>
                    </p>
                    <hr>
                    <p class="text-dark">
                        <img src="/IMG/envelope-fill.svg" width="8%" alt="">
                        <span class="pt-5 ps-3">Correos</span>
                    </p>
                    <hr>
                    <p class="text-dark">
                        <img class="pb-1" src="/IMG/cloud-plus-fill.svg" width="8%" alt="">
                        <span class="pt-5 ps-3">Hosting: <i>16GB</i></span>
                    </p>
                </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-outline-light"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>        
        <div class="row mt-1 margen bg-light align-items-center shadow">
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