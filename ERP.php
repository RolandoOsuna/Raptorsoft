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
            <p class="fs-5 texto">Utiliza nuestras soluciones de software en la nube ya que es mucho más fácil gracias anuestra lista de integraciones, sácale el mayor partido a las aplicaciones y a los servicios que te ayudan a hacer crecer a tu negocio.</p>
            <h3>Productos y versiones</h3>
            <div class="col-12 col-lg-4 ">
                <ul class="ps-5 fs-4 arial">
                    <li >Cremerias ®</li>
                    <li >Panaderías®</li>
                    <li >Escuela primaria®</li>
                    <li >Abarroteras®</li>
                    <li >Fruterías®</li>
                    <li >Changarros®</li>
                    <li >Carnicerías®</li>
                    <li >Comercializadoras®</li>
                    <li >Mueblerías®</li>
                    <li >Distribuidoras®</li>
                    <li >Ferreterías®</li>
                </ul>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid" src="/IMG/Servicios.jpg" width="" alt="">
            </div>
        </div>      
    </section>
    <!-- TABLA -->
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
                                        <span class="text-info ">Multiempresa</span><br>
                                        <span class="text-white ">$27,000.00</span><br> 
                                        <span class="text-white-50">MXN</span><br>
                                        <span class="text-muted">pago anual <br>$3,500.00</span><br>
                                        <b>10 Usuarios</b>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Enterprise</span><br>
                                        <span class="text-white ">$$ (Por definir con el cliente)</span><br> 
                                        <span class="text-white-50">MXN</span><br>
                                        <span class="text-muted">pago anual <br>$3,500.00</span><br>
                                        <b>20 Usuarios</b>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <img src="/IMG/Quick-Point.png" alt="" srcset=""><br>
                                        <span class="text-white ">$$ (Por definir con el cliente)</span><br> 
                                        <span class="text-white-50">MXN</span><br>
                                        <span class="text-muted">pago anual VPS <br>$8,900.00</span><br>
                                        <b>A la medida</b>
                                    </p>
                                </th>
                                <th class="fw-normal">
                                    <p class="">
                                        <span class="text-info ">Facturacion Electronica</span><br>
                                        <span class="text-white ">$8,000.00</span><br> 
                                        <span class="text-white-50">MXN</span><br>
                                        <span class="text-muted">pago anual <br>$1,350.00</span><br>
                                        <span>$1,400 = 1,000 folios</span>
                                    </p>
                                </th>
                                <th class="pb-5 pb-sm-4 pb-lg-4 ">
                                    <img src="/IMG/Raptor-Navbar.png" width="80px" alt="">
                                </th>
                            </tr>
                        </thead>

                        <tbody class="">
                            <tr>
                                <td class="fw-bold fst-italic text-muted table-primary p-3">Escritorio, Web y Movil</td>
                                <td class="fw-bold fst-italic text-muted table-warning p-3">Escritorio, Web y Movil</td>
                                <td class="fw-bold fst-italic text-muted table-danger p-3">A la Medida</td>
                                <td class="fw-bold fst-italic text-muted table-success p-3">Web</td>
                                <td class="table-muted fs-5 p-3"><b>Versiones</b></td>
                            </tr>
                            <tr>
                                <td class="fw-bold fst-italic text-muted table-primary p-3">10</td>
                                <td class="fw-bold fst-italic text-muted table-warning p-3">20</td>
                                <td class="fw-bold fst-italic text-muted table-danger p-3">A la medida</td>
                                <td class="fw-bold fst-italic text-muted table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Usuarios</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Inicio</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-muted fs-5 p-3"><b>Credenciales</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-muted fs-5 p-3"><b>Clientes</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Proveedores</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Rutas</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Productos</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Inventarios</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Almacenes</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Compras</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Pedidos</b></td>
                            </tr>
                            <tr>
                                <td class="table-primary p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-warning p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-danger p-3"><img src="/IMG/check2-circle.svg" width="25px" alt=""></td>
                                <td class="table-success p-3"></td>
                                <td class="table-muted fs-5 p-3"><b>Ventas de Mostrador</b></td>
                            </tr>
                            <tr>
                                <td class="fst-italic table-primary p-3">32 GB</td>
                                <td class="fst-italic table-warning p-3">16 GB</td>
                                <td class="fst-italic table-danger p-3">Compartido</td>
                                <td class="fst-italic table-success p-3">Compartido</td>
                                <td class="table-muted fs-5 p-3"><b>Hosting</b></td>
                            </tr>
                            <!-- BOTONES "Contratar Ahora" -->
                            <tr>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-warning"><a class="text-decoration-none link-dark" href="http://wa.link/rsjw0t">Contratar Ahora!</a></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="lead" style="font-size: large;">Todos los paquetes son anuales y no incluyen hosting. Los precios no incluyen IVA.<br> La facturación electrónica no incluye el sistema a la medida o los que ofertamos en la pagina.</p>
                    <p class="text-center fs-3">Además todos nuestros paquetes incluyen</p>
                    <p class="fs-5">Almacenamiento en SSD | Transferencia mensual ilimitada | Panel de administración (Centro de Datos) |(Aplicaciones listas para instalar) | Punto de venta, app android.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </main>



<?php require('footer.php') ?>
<script src="/BOOTSTRAP/js/bootstrap.bundle.js"></script>
</body>
</html>