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

<!-- BOTON FLOTANTE -->
<?php require('botones.php'); ?>
    <header class="container ">
    <div class="col-12 text-center py-3">
            <img class="img-fluid " src="/IMG/CRM.png" width="" alt="">
        </div>
    </header>
    
    

    <section class="row margen bg-secction-crm justify-content-end">
        <div class="col-12 col-lg-6 align-self-center px-5">
            <h2 class="ff-raleway text-center text-white">Consigue tus objetivos inmobiliarios!!</h2>
            <p class="text-center fs-5 ff-raleway text-white">
                Añade tus proyectos para que tus clientes lo conozcan desde tu sitio web. <br>
                Realiza contratos fácilmente rellenando los recuadros con los datos marcados, lleva un mejor control y lo tendrás disponible en todo momento.
            </p>
        </div>
    </section>
    
    
    <div class="container mt-3">
        <h1 class="texto">
            <p class="text-center">!Obtén increíbles beneficios y Contrata ahora!</p>
        </h1>
    </div>
    
      
    
    <!-- CARDS -->
<section >
    <div class="row row-cols-1 row-cols-md-3 g-4 margen px-md-5 pb-3" style="margin-left: 0.1px;">
    <!-- Jugador Casual -->
        <div class="col ">
            <div class="card bg-success transicioncrm shadow">
                <div class="card-header text-center">
                    <h2 class="card-title text-center text-light">
                        Jugador Casual<br>
                    </h2>
                    <span class="text-white-50 text-center">Inmuebles</span>
                </div>
                <div class="card-body text-white pb-0">
                    <h3 class="text-center">$9,999.00</h3>
                    <p class="text-center"><span class="text-white-50">Anualidad $2,500</span>
                    <p class="fs-5 text-center">Tu proyecto personal</p>
                    <p class="text-light"><img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> <span class="pt-5 ps-3">2 Usuario</span> </p>
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
            <div class="card bg-danger transicioncrm shadow">
                <div class="card-header text-center">
                    <h2 class="card-title text-center text-light">Aficionado Intermedio</h2>
                    <span class="text-white-50 text-center">Real State</span>
                </div>
                <div class="card-body text-white pb-0">
                    <h3 class="text-center">$18,999.00</h3>
                    <p class="text-center"><span class="text-white-50">Anualidad $3,000</span></p>
                    <p class="fs-5 text-center">Atención telefónica por expertos </p>
                    <p class="text-light">
                        <img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> 
                        <span class="pt-5 ps-3">4 Usuarios</span> 
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
                    <button type="button" class="btn btn-success"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                </div>
            </div>
        </div>
    <!-- Aficionado Avanzado -->
        <div class="col">
            <div class="card bg-warning transicioncrm shadow">
                <div class="card-header text-center">
                    <h2 class="card-title text-center text-dark">Aficionado Avanzado</h2>
                    <span class="text-black-50 text-center">CRM</span>
                </div>
                <div class="card-body text-dark pb-0">
                    <h3 class="text-center">$24,999.00</h3>
                    <p class="text-center"><span class="text-black-50">Anualidad $4,000</span> 
                    <p class="fs-5 text-center">Tu negocio al siguiente nivel.</p>
                    <p class="text-dark">
                        <img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> 
                        <span class="pt-5 ps-3">6 Usuarios</span> 
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
                        <span class="pt-5 ps-3">Hosting: <i>32GB</i></span>
                    </p>
                </div>
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-danger"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="bg-seccionCRM py-3">
        <div class="container fs-5 text-white">
            <div class="row align-items-center justify-content-lg-center" style="margin-right: 0.1px;">
                <div class="col-3 col-md-2 col-lg-1"><img class="" src="/IMG/settings.png" width="65px"/></div>
                <div class="col-9">
                    <p><span class="ff-raleway fw-bold">Raptorsoft</span> es una poderosa herramienta para impulsar el crecimiento, rentabilidad y competitividad de tu empresa inmobiliaria.</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-lg-center ">
                <div class="col-3 col-md-2 col-lg-1"><img class="" src="/IMG/money-svgrepo-com.svg" width="65px"/></div>
                <div class="col-9">
                    <p><span class="ff-raleway fw-bold">Raptorsoft</span> ideal para elevar la rentabilidad de tu empresa y cumplir con las tareas diarias.</p>
                </div>
            </div>
            <div class="row align-items-center justify-content-lg-center ">
                <div class="col-3 col-md-2 col-lg-1"><img class="" src="/IMG/skyscraper.png" width="65px"/></div>
                <div class="col-9">
                    <p>¿Tu negocio requiere de un sistema versátil y amigable? <span class="ff-raleway fw-bold">Raptorsoft</span> puede adaptarse a los requerimientos de tu empresa.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-3">
        <h1 class="text-center">Descubre más Información</h1>
        <p class="text-center"><span class="ff-raleway fw-bold">Raptorsoft</span> la primera plataforma en la nube en incluir funcionalidades que aumentan la productividad y adaptabilidad a la logística de tu negocio. Contacta con nosotros valido
        solo para plan <span class="ff-raleway">Enterprise.</span></p>
    </section>

    <!-- FULL -->
    <section class="bg-crm pb-3 d-none d-md-block">
        <h1 class="text-light ps-5"><u>Herramientas Integradas</u></h1>
        <div class="row margen ">
            <div class="col text-center">
                <img class="img-fluid transicion rounded-pill  bg-" src="/IMG/people-fill.svg" width="75px" alt="">
                <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="65px" fill="currentColor" class="img-fluid ms-5 transicion rounded-pill bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-center margen mt-3 ">
            <div class="col-4 text-end">
                <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="65px" fill="currentColor" class="img-fluid transicion rounded-pill bg- bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </div>
            <div class="col-2 text-center"></div>
            <div class="col-4 text-start">
                <img class="img-fluid transicion rounded-pill bg-" src="/IMG/house-door-fill.svg"  width="75px" alt="">
            </div>
        </div>
        
        <div class="row align-items-center margen my-5 px-5">
            <div class="col text-end ms-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="60px" fill="currentColor" class="img-fluid transicion rounded-pill  bi bi-journal-text" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
            </div>
            <div class="col text-center">
                <img class="" src="/IMG/CRM.png" width="" alt="">
            </div>
            <div class="col text-start me-5 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="img-fluid transicion rounded-pill icon icon-tabler icon-tabler-tools" width="80px" height="65px" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                                <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
                                <polyline points="12 8 7 3 3 7 8 12" />
                                <line x1="7" y1="8" x2="5.5" y2="9.5" />
                                <polyline points="16 12 21 17 17 21 12 16" />
                                <line x1="16" y1="17" x2="14.5" y2="18.5" />
                    </svg>
            </div>
        </div>

        <div class="row align-items-center justify-content-center margen mb-3 ">
            <div class="col-4 text-end">
                <img class="img-fluid transicion rounded-pill  bg-" src="/IMG/cloud-plus-fill.svg" width="75px" alt="">
            </div>
            <div class="col-2 text-center"></div>
            <div class="col-4 text-start">
                <img class="img-fluid transicion rounded-pill bg-" src="/IMG/1976101.svg"  width="79px" alt="">
            </div>
        </div>

        <div class="row margen ">
            <div class="col text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="75px" height="65px" fill="currentColor" class="img-fluid transicion rounded-pill bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
                <img class="img-fluid transicion rounded-pill ms-5" src="/IMG/casco.png" width="75px" height="60px" alt="" srcset="">
            </div>
        </div>
    
        <div class="row justify-content-center margen">
            <div class="col-10 text-center lead">
                <p class="">Almacenamiento en SSD | Transferencia mensual ilimitada | Panel de administración (Centro de Datos) | Sistema Web.</p>
            </div>
        </div>

    </section>

    <!-- RESPONSIVE -->
    <section class="bg-crm pb-3 d-block d-md-none">
        <h3 class="text-light ps-1 pb-2 "><u>Herramientas Integradas</u></h3>

        <div class="row margen ">
            <div class="col text-center">
                <img class="img-fluid transicion rounded-pill  bg-" src="/IMG/people-fill.svg" width="60px" alt="">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="55px" fill="currentColor" class="img-fluid ms-5 transicion rounded-pill bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-evenly margen mt-3 ">
            <div class="col-3 text-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="50px" fill="currentColor" class="img-fluid transicion rounded-pill bg- bi bi-card-text" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </div>
            <div class="col-1 text-center"></div>
            <div class="col-3 text-start">
                <img class="img-fluid transicion rounded-pill bg-" src="/IMG/house-door-fill.svg"  width="60px" alt="">
            </div>
        </div>
        
        <div class="row align-items-center margen  my-3">
            <div class="col text-end ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="65px" fill="currentColor" class="img-fluid transicion rounded-pill  bi bi-journal-text" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
            </div>
            <div class="col text-center">
                <img class="" src="/IMG/CRM.png" width="190px" alt="">
            </div>
            <div class="col text-start ">
                <svg xmlns="http://www.w3.org/2000/svg" class="img-fluid transicion rounded-pill icon icon-tabler icon-tabler-tools" width="80px" height="65px" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                                <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
                                <polyline points="12 8 7 3 3 7 8 12" />
                                <line x1="7" y1="8" x2="5.5" y2="9.5" />
                                <polyline points="16 12 21 17 17 21 12 16" />
                                <line x1="16" y1="17" x2="14.5" y2="18.5" />
                </svg>
            </div>
        </div>

        <div class="row align-items-center justify-content-evenly margen mb-3 ">
            <div class="col-3 text-start">
                <img class="img-fluid transicion rounded-pill  bg-" src="/IMG/cloud-plus-fill.svg" width="60px" alt="">
            </div>
            <div class="col-1 text-center"></div>
            <div class="col-3 text-start">
                <img class="img-fluid transicion rounded-pill bg-" src="/IMG/1976101.svg"  width="60px" alt="">
            </div>
        </div>


        <div class="row margen ">
            <div class="col text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="55px" fill="currentColor" class="img-fluid transicion rounded-pill bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg>
                <img class="img-fluid transicion rounded-pill ms-5" src="/IMG/casco.png" width="60px" height="60px" alt="" srcset="">
            </div>
        </div>

        <div class="row justify-content-center margen">
            <div class="col-10 text-center fw-5">
                <p class="">Almacenamiento en SSD | Transferencia mensual ilimitada | Panel de administración (Centro de Datos) | Sistema Web.</p>
            </div>
        </div>
    
    
        
    </section>


    <section>        
        <div class="row margen bg-light align-items-center shadow">
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