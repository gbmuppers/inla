<?php
session_start();
if (@!$_SESSION['usuario']) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INLA - Infinitesimal Learning Application</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Corrently-IoT-Card-1.css">
    <link rel="stylesheet" href="assets/css/Corrently-IoT-Card.css">
    <link rel="stylesheet" href="assets/css/Rounded-Search-Input-field-1.css">
    <link rel="stylesheet" href="assets/css/Rounded-Search-Input-field.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled-2.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/Modal.css">
</head>

<body id="page-top">
    <!-- Images used to open the lightbox -->
            <!-- The Modal/Lightbox -->
            <div id="myModalImage" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

            <div class="mySlides" align="center">
            <div class="numbertext">1 / 7</div>
            <img src="../Vistas/Img/inla_movil_1.png" style="width:15.0em">
            </div>

            <div class="mySlides" align="center">
            <div class="numbertext">2 / 7</div>
            <img src="../Vistas/Img/inla_movil_2.png" style="width:15.0em">
            </div>

            <div class="mySlides" align="center">
            <div class="numbertext">3 / 7</div>
            <img src="../Vistas/Img/inla_movil_3.png" style="width:15.0em">
            </div>

            <div class="mySlides" align="center">
            <div class="numbertext">4 / 7</div>
            <img src="../Vistas/Img/inla_movil_4.png" style="width:15.0em">
            </div>

            <div class="mySlides" align="center">
            <div class="numbertext">5 / 7</div>
            <img src="../Vistas/Img/inla_movil_5.png" style="width:15.0em">
            </div>

            <div class="mySlides" align="center">
            <div class="numbertext">6 / 7</div>
            <img src="../Vistas/Img/inla_movil_6.png" style="width:15.0em">
            </div>


            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container">
            <p id="caption"></p>
            </div>

            <!-- Editas el atributo alt para poner la descripción -->
            <div class="column" style="display: none;">
            <img class="demo" onclick="currentSlide(1)" alt="Menu de inicio al momento de iniciar sesion en la aplicacion la cual muestra los modulos disponibles" style="width:8.0em">
            </div>
            <div class="column" style="display: none;">
            <img class="demo" onclick="currentSlide(2)" alt="Modulo de calculadora que da apoyo a la solucion de ecuaciones de calculo" style="width:8.0em">
            </div>
            <div class="column" style="display: none;">
            <img class="demo" onclick="currentSlide(3)" alt="Modulo de aprendizaje que permite revisar el contenido de cada tema" style="width:8.0em">
            </div>
            <div class="column" style="display: none;">
            <img class="demo" onclick="currentSlide(4)" alt="Ventana emergente que permite elegir el tipo de contenido que vera de un tema segun uno prefiera video, audio y libros segun el usuario prefiera" style="width:8.0em">
            </div>
            <div class="column" style="display: none;">
            <img class="demo" onclick="currentSlide(5)" alt="¡Error 404! Esto pasa cuando el recurso que seleccionaste no está disponible. :c" style="width:8.0em">
            </div>
            <div class="column" style="display: none;">
            <img class="demo" onclick="currentSlide(6)" alt="Modulo de ayuda en el cual permite ver como funciona la aplicación" style="width:8.0em">
            </div>

        </div>
    </div> 
    <!-- The Modal/Lightbox FINAL-->
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-earth"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>INLA</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" onClick="loadCalculator()" ><i></i><span>&nbsp; Calculadora</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" onClick="loadTopics()"><i></i><span>&nbsp; Aprendiendo</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" onClick="openModal();currentSlide(1)"><i></i><span>&nbsp; Ayuda</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../Login/Logout.php"><i></i><span>&nbsp;Salir</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow">
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?PHP echo $_SESSION['usuario'];?></span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="../Login/Logout.php"><i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i>Cerrar Sesión</a></div>
            </div>
            </li>
            </ul>
        </div>
        </nav>
        <div class="container-fluid">
        </div>
        <div id="setContent" name="setContent">
        <div class="card shadow-lg">
            <div class="container-fluid">
                <div class="text-center mt-5">
                    <p class="m-0"><img class="container-fluid" src="../Vistas/Img/calculus.gif"></p>
                    <h3 class="text-dark mb-5 lead">¡¡Bienvenido a INLA, <?PHP echo $_SESSION['usuario'];?>!!</h3>
                </div>
            </div>
        </div>
        </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

    <script src="../Librerias/ViewsFuctions.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Corrently-IoT-Card.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://unpkg.com/corrently-iot-jquery@latest/index.js"></script>
    <script src="assets/js/theme.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>

</html>