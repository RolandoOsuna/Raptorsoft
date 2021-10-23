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
    <title>CRM</title>
</head>
<body style="background-color: #f0f0f0;">
<?php require('NavBar.php') ?>
    <header class="container ">
        <div class="col-12 lead">
            <p class="display-4 ff-raleway  text-center text-primary mt-1">CRM </p>
        </div>
    </header>
    <section>
        <div class="row my-3 margen bg-light align-items-center shadow">
            <div class="col-12 col-md-6 col-lg-5">
                <p class="fs-3 px-5 text-center texto ">La más amplia gama de herramientas para ayudarte a optimizar tus actividades<br> <strong> Ahorrandote tiempo y dinero.</strong></p>
            </div>
            <aside class="col-12 col-md-6 col-lg-7 text-center">
                <img class="img-fluid float-end" src="/IMG/Section-inmobiliaria.jpg"  alt="">
            </aside>
        </div>
        
        
        
    </section>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo text-center mb-4">¡Escoge el plan para comenzar tu proyecto!</h2>
            </div>
        </div>
        <!-- TABLA -->
        <div class="row align-items-center justify-content-center mb-4">
            <div class="col-12">
                <div class="table-responsive text-center">
                    <table class="table table-sm table-borderless">
                        <thead class="">
                            <tr class="encabezado-tabla text-white fs-md-5" >
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Home</span><br>
                                        <span class="text-white ">$4,999.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span><br>
                                        <b>Licencia 1 Usuario</b>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">PYME</span><br>
                                        <span class="text-white ">$8,999.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span><br>
                                        <b>Licencia 3 Usuarios</b>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Ultimate</span><br>
                                        <span class="text-white ">$11,999.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span><br>
                                        <b>Licencia 5 Usuarios</b>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Multiempresa</span><br>
                                        <span class="text-white ">$17,999.00</span><br> 
                                        <span class="text-white-50">MXM al MES</span><br>
                                        <span class="text-muted">(pago mensual)</span><br>
                                        <b>Usuarios Ilimitados</b>
                                    </p>
                                </th>
                                <th class="pb-5 pb-sm-4 pb-lg-4 ">
                                    <img src="/IMG/Raptor-Navbar.png" width="80px" alt="">
                                </th>
                            </tr>
                        </thead>

                        <tbody class="">
                            <tr>
                                <td class="fw-bold fst-italic text-muted table-success p-3">Escritorio</td>
                                <td class="fw-bold fst-italic text-muted table-danger p-3">Escritorio y Movil</td>
                                <td class="fw-bold fst-italic text-muted table-warning p-3">Escritorio, Web y Movil</td>
                                <td class="fw-bold fst-italic text-muted table-primary p-3">Escritorio, Web y Movil</td>
                                <!-- <td class="table-muted"><img src="/IMG/people-fill.svg"  width="50px" alt="Usuarios Ilimitados">Usuarios Ilimitados</td> -->
                                <td class="table-muted fs-5 p-3"><b>Versiones</b></td>
                            </tr>
                            <tr>
                                <td class="fw-bold fst-italic text-muted table-success p-3">1</td>
                                <td class="fw-bold fst-italic text-muted table-danger p-3">3</td>
                                <td class="fw-bold fst-italic text-muted table-warning p-3">5</td>
                                <td class="fw-bold fst-italic text-muted table-primary p-3">Ilimitados</td>
                                <!-- <td class="table-muted"><img src="/IMG/house-door-fill.svg"  width="50px" alt="">Gestor Inmobiliario</td> -->
                                <td class="table-muted fs-5 p-3"><b>Usuarios</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><img src="/IMG/card-text.svg" width="50px" alt="">Gestor de Prospectos</td> -->
                                <td class="table-muted fs-5 p-3"><b>Inicio</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="50px" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" /><line x1="14.5" y1="5.5" x2="18.5" y2="9.5" /><polyline points="12 8 7 3 3 7 8 12" /><line x1="7" y1="8" x2="5.5" y2="9.5" /><polyline points="16 12 21 17 17 21 12 16" /><line x1="16" y1="17" x2="14.5" y2="18.5" /></svg>Gestor de Estatus</td> -->
                                <td class="table-muted fs-5 p-3"><b>Credenciales</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><img src="/IMG/1976101.svg" width="55px" alt="">Gestor de Contratos</td> -->
                                <td class="table-muted fs-5 p-3"><b>Clientes</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><img src="/IMG/journal-text.svg" width="50px" alt="">Gestor de Proyectos</td> -->
                                <td class="table-muted fs-5 p-3"><b>Proveedores</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><img src="/IMG/envelope-fill.svg" width="50px" alt="">Gestor de Correos</td> -->
                                <td class="table-muted fs-5 p-3"><b>Rutas</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Productos</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Inventarios</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Almacenes</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Compras</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Pedidos</b></td>
                            </tr>
                            <tr>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Ventas de Mostrador</b></td>
                            </tr>
                            <tr>
                                <td class="fw-bold fst-italic text-muted table-success p-3">Opcional</td>
                                <td class="fw-bold fst-italic text-muted table-danger p-3">Opcional</td>
                                <td class="fw-bold fst-italic text-muted table-warning p-3">Opcional</td>
                                <td class="fw-bold fst-italic text-muted fst-italic table-primary p-3">Opcional</td>
                                <!-- <td class="table-muted"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><ellipse cx="12" cy="6" rx="8" ry="3" /><path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6" /><path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3" /></svg>Futuras Aduciones</td> -->
                                <td class="table-muted fs-5 p-3"><b>Facturación Electronica</b></td>
                            </tr>
                            
                            <tr>
                                <td class="fst-italic table-success p-3">Compartido</td>
                                <td class="fst-italic table-danger p-3">Compartido</td>
                                <td class="fst-italic table-warning p-3">16 GB</td>
                                <td class="fst-italic table-primary p-3">32 GB</td>
                                <!-- <td class="table-muted"><img src="/IMG/cloud-plus-fill.svg" width="50px" alt="">Hosting</td> -->
                                <td class="table-muted fs-5 p-3"><b>Hosting</b></td>
                            </tr>
                            <!-- BOTONES "Contratar Ahora" -->
                            <tr>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/3iaic9">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/3iaic9">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/3iaic9">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/3iaic9">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="lead" style="font-size: large;">Todos los paquetes son anuales e incluyen: Hosting de acuerdo al paquete seleccionado (1er año gratis, excepto el paquete Multiempresa). <br>Los precios no incluyen IVA.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="text-center fs-3">Además todos nuestros paquetes incluyen</p>
                <p class="fs-5">Almacenamiento en SSD | Transferencia mensual ilimitada | Panel de administración (Centro de Datos) |(Aplicaciones listas para instalar) | Punto de venta, app android.</p>
            </div>
        </div>
    </main>
    <section class="row margen bg-secction-crm justify-content-end">
        <div class="col-12 col-lg-6 align-self-center px-5">
            <p class="text-center fs-4 ff-raleway text-white">
                Añade tus proyectos para que tus clientes lo conozcan desde tu sitio web. <br>
                Realiza contratos fácilmente rellenando los recuadros con los datos marcados, lleva un mejor control y lo tendrás disponible en todo momento.
            </p>
        </div>
    </section>


    
<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>