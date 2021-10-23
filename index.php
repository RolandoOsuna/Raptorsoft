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
                <a href="ERP.php" class="text-decoration-none link-dark fs-5 titulo " >ERP</a> 
                <a href="CRM.php" class="text-decoration-none link-dark fs-5 titulo" >CRM</a>
                <a href="" class="text-decoration-none link-dark fs-5 titulo " >Contacto</a>
            </div>
        </nav>
    </header>

<!-- SECCTION -->
    <section class="row  bg-seccion">
        <div class="col-12 col-md-6 col-lg-8">
            <img class="img-fluid" src="/IMG/Seccion.jpg"  alt="">
        </div>
        <div class="col-12 col-md-6 col-lg-4 justify-content-end text-white  ">
            <a class="text-decoration-none text-white" href="CRM.php">
                <p class="display-3 text-center titulo " style="letter-spacing: 10px;">Raptor</p>
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

<!-- MAIN -->
    <main class="container">
        <div class="row">
            <div class="col-12 my-3">
                <p class="h1 text-center titulo">ERP Raptor</p>
                <p class="text-center texto fs-5">Utiliza nuestras soluciones de software en la nube ya que es mucho más fácil gracias a nuestra lista de integraciones, sácale el mayor partido a las aplicaciones y a los servicios que te ayudan a hacer crecer a tu negocio.</p>
            </div>
        </div>
        <!-- CARDS 
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
        </div>-->

        <!-- ACORDEON -->
        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button 
                        class="accordion-button btn-acordeon" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#panelsStayOpen-collapseOne" 
                        aria-expanded="true" 
                        aria-controls="panelsStayOpen-collapseOne">
                        Raptor
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="row align-items-center">
                            <div class="col-12 text-center d-block d-md-none ">
                                <img class="img-fluid " src="/IMG/Raptor-card.jpg" width="50%" alt="">
                            </div>
                            <div class="col-md-6 col-lg-3 text-center d-none d-md-block ">
                                <img class="img-fluid " src="/IMG/Raptor-card.jpg" width="80%" alt="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-9 ">
                                <h3>Raptor</h3>
                                <p>Versión completa</p>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <a href="Descripcion.php" class="text-decoration-none text-muted">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button 
                        class="accordion-button collapsed" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#panelsStayOpen-collapseTwo" 
                        aria-expanded="false" 
                        aria-controls="panelsStayOpen-collapseTwo">
                        Cremería
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12 text-center d-block d-md-none ">
                                <img class="img-fluid " src="/IMG/Cremeria/Cremeria-card.jpg" width="80%" alt="">
                            </div>
                            <div class="col-md-6 col-lg-3 text-center d-none d-md-block ">
                                <img class="img-fluid " src="/IMG/Cremeria/Cremeria-card.jpg" width="100%" alt="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-9 ">
                                <h3>Cremería</h3>
                                <p>Aplicado en negocio de cremería</p>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <a href="Cremeria.php" class="text-decoration-none text-muted">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button 
                        class="accordion-button collapsed" 
                        type="button" data-bs-toggle="collapse" 
                        data-bs-target="#panelsStayOpen-collapseThree" 
                        aria-expanded="false" 
                        aria-controls="panelsStayOpen-collapseThree">
                        Abarrotes 
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="py-3 accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="row">
                        <div class="col-12 text-center d-block d-md-none ">
                            <img class="img-fluid " src="/IMG/Abarrotes/Abarrotes-card2.jpeg" width="80%" alt="">
                        </div>
                        <div class="col-md-6 col-lg-3 ps-4 text-center d-none d-md-block ">
                            <img class="img-fluid " src="/IMG/Abarrotes/Abarrotes-card2.jpeg" width="100%" alt="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-9 ">
                            <h3>Abarrotes</h3>
                            <p>Versión aplicada en tiendas de abarrotes</p>
                        </div>
                        <div class="col-12 text-end pe-4">
                            <a href="Descripcion.php" class="text-decoration-none text-muted">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </main>    

    <!-- <section class="bg ">
        <div class="row p-5" style="margin-right: 0.1px">
            <div class="col-12 align-self-center px-5">
                <p class="text-center  fs-4">
                    Añade tus proyectos para que tus clientes lo conozcan desde tu sitio web. <br>
                    Realiza contratos fácilmente rellenando los recuadros con los datos marcados, lleva un mejor control y lo tendrás disponible en todo momento.
                </p>
            </div>
        </div>
    </section> -->
    
    <!--<section class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center titulo display-6">Todas las plataformas, <br> Todos los dispositivos <strong>Sin problemas.</strong></p>
            </div>
        </div>
        </!-- TABLA 
        <div class="row align-items-center justify-content-center mb-4">
            <div class="col-12">
                <div class="table-responsive text-center">
                    <table class="table table-sm table-borderless">
                        <thead class="shadow">
                            <tr class="encabezado-tabla text-white fs-md-5" >
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Jugador Casual</span><br>
                                        <span class="text-white ">$299.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Aficionado <br> intermedio</span><br>
                                        <span class="text-white ">$599.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Aficionado <br> avanzado</span><br>
                                        <span class="text-white ">$999.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span>
                                    </p>
                                </th>
                                <th class="pb-5 pb-sm-5 pb-lg-5 ">
                                    <img src="/IMG/Raptor-Navbar.png" width="80px" alt="">
                                </th>
                            </tr>
                        </thead>

                        <tbody class="">
                            <tr>
                                <td class="table-success p-3"><img class="" src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img class="" src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img class="" src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><img src="/IMG/people-fill.svg"  width="50px" alt="Usuarios Ilimitados"><!--Usuarios Ilimitados--/></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><img src="/IMG/house-door-fill.svg"  width="50px" alt=""><!--Gestor Inmobiliario-/-></td>
                            </tr>
                            <tr>
                                <td class="table-success"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><img src="/IMG/card-text.svg" width="50px" alt=""><!--Gestor de Prospectos-/-></td>
                            </tr>
                            <tr>
                                <td class="table-success"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="50px" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                                        <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
                                        <polyline points="12 8 7 3 3 7 8 12" />
                                        <line x1="7" y1="8" x2="5.5" y2="9.5" />
                                        <polyline points="16 12 21 17 17 21 12 16" />
                                        <line x1="16" y1="17" x2="14.5" y2="18.5" />
                                    </svg><!--Gestor de Estatus-/-></td>
                            </tr>
                            <tr>
                                <td class="table-success"></td>
                                <td class="table-danger"></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><img src="/IMG/1976101.svg" width="55px" alt=""><!--Gestor de Contratos-/-></td>
                            </tr>
                            <tr>
                                <td class="table-success"></td>
                                <td class="table-danger"></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><img src="/IMG/journal-text.svg" width="50px" alt=""><!--Gestor de Proyectos-/-></td>
                            </tr>
                            <tr>
                                <td class="table-success"></td>
                                <td class="table-danger"></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary"><img src="/IMG/envelope-fill.svg" width="50px" alt=""><!--Gestor de Correos-/-></td>
                            </tr>
                            <tr>
                                <td class="table-success"></td>
                                <td class="table-danger"></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <ellipse cx="12" cy="6" rx="8" ry="3" />
                                        <path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" />
                                        <path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" />
                                    </svg><!--Futuras Aduciones-/->
                                </td>
                            </tr>
                            <tr>
                                <td class="fst-italic table-success p-3">8 GB</td>
                                <td class="fst-italic table-danger p-3">16 GB</td>
                                <td class="fst-italic table-warning p-3">32 GB</td>
                                <td class="table-primary"><img src="/IMG/cloud-plus-fill.svg" width="50px" alt=""><!--Hosting-/-></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning">Contratar Ahora</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning">Contratar Ahora</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning">Contratar Ahora</button>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </section>-->

    <!-- CARDS -->
    <section  >
        
        <div class="row row-cols-1 row-cols-md-3 g-4 bg-seccion px-md-5 pb-3" style="margin-left: 0.1px;">
        <!-- Jugador Casual -->
            <div class="col">
                <div class="card bg-success shadow">
                    <div class="card-header">
                        <h3 class="card-title text-center text-light">Jugador Casual</h3>
                    </div>
                    <div class="card-body text-white pb-0">
                        <h4 class="text-center">$299.00</h4>
                        <p class="text-center"><span class="text-white-50">MXM al MES</span> <br><span class="text-black-50">(pago mensual)</span></p>
                        <p class="fs-5">Ideal para iniciar y posicionar tu proyecto personal</p>
                        <p class="text-light"><img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> <span class="pt-5 ps-3">Usuarios Ilimitados</span> </p>
                        <hr>
                        <p class="text-light"><img class="pb-1" src="/IMG/house-door-fill.svg"  width="8%" alt=""><span class="pt-5 ps-3">Gestor Inmobiliario</span></p>
                        <hr>
                        <p class="text-light"><img class="pb-1" src="/IMG/cloud-plus-fill.svg" width="8%" alt=""><span class="pt-5 ps-3">Hosting: <i>8GB</i></span></p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-warning">Contratar Ahora</button>
                    </div>
                </div>
            </div>
        <!-- Aficionado Intermedio     -->
            <div class="col">
                <div class="card bg-danger shadow">
                    <div class="card-header">
                        <h3 class="card-title text-center text-light">Aficionado Intermedio</h3>
                    </div>
                    <div class="card-body text-white pb-0">
                        <h4 class="text-center">$599.00</h4>
                        <p class="text-center"><span class="text-white-50">MXM al MES</span> <br><span class="text-black-50">(pago mensual)</span></p>
                        <p class="fs-5">Aumenta tu almacenamiento y obtén atención telefónica por expertos</p>
                        <p class="text-light">
                            <img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> 
                            <span class="pt-5 ps-3">Usuarios Ilimitados</span> 
                        </p>
                        <hr>
                        <p class="text-light">
                            <img class="pb-1" src="/IMG/house-door-fill.svg"  width="8%" alt="">
                            <span class="pt-5 ps-3">Gestor Inmobiliario</span>
                        </p>
                        <hr>
                        <p class="text-light"><img src="/IMG/card-text.svg" width="8%" alt="">
                            <span class="pt-5 ps-3">Gestor de Prospectos</span>
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
                            <span class="pt-5 ps-2">Gestor de Estatus</span>
                        </p>
                        <hr>
                        <p class="text-light">
                            <img class="pb-1" src="/IMG/cloud-plus-fill.svg" width="8%" alt="">
                            <span class="pt-5 ps-3">Hosting: <i>8GB</i></span>
                        </p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-warning">Contratar Ahora</button>
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
                        <p class="text-center"><span class="text-black-50">MXM al MES</span> <br><span class="text-white-50">(pago mensual)</span></p>
                        <p class="fs-5">Crece con nosotros y lleva el éxito de tu negocio al siguiente nivel.</p>
                        <p class="text-dark">
                            <img class="" src="/IMG/people-fill.svg"width="8%" alt="Usuarios Ilimitados"> 
                            <span class="pt-5 ps-3">Usuarios Ilimitados</span> 
                        </p>
                        <hr>
                        <p class="text-dark">
                            <img class="pb-1" src="/IMG/house-door-fill.svg"  width="8%" alt="">
                            <span class="pt-5 ps-3">Gestor Inmobiliario</span>
                        </p>
                        <hr>
                        <p class="text-dark"><img src="/IMG/card-text.svg" width="8%" alt="">
                            <span class="pt-5 ps-3">Gestor de Prospectos</span>
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
                            <span class="pt-5 ps-2">Gestor de Estatus</span>
                        </p>
                        <hr>
                        <p class="text-dark">
                            <img src="/IMG/1976101.svg" width="11%" alt="">
                            <span class="pt-5 ps-2">Gestor de Contratos</span>
                        </p>
                        <hr>
                        <p class="text-dark">
                            <img src="/IMG/journal-text.svg" width="8%" alt="">
                            <span class="pt-5 ps-3">Gestor de Proyectos</span>
                        </p>
                        <hr>
                        <p class="text-dark">
                            <img src="/IMG/envelope-fill.svg" width="8%" alt="">
                            <span class="pt-5 ps-3">Gestor de Correos</span>
                        </p>
                        <hr>
                        <p class="text-dark">
                            <img class="pb-1" src="/IMG/cloud-plus-fill.svg" width="8%" alt="">
                            <span class="pt-5 ps-3">Hosting: <i>8GB</i></span>
                        </p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-outline-dark">Contratar Ahora</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


<!-- FOOTER -->
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>