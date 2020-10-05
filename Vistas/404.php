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
    <title>Tópicos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Corrently-IoT-Card-1.css">
    <link rel="stylesheet" href="assets/css/Corrently-IoT-Card.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container-fluid">
                <div class="text-center mt-5">
                    <div class="error mx-auto" data-text="404">
                        <p class="m-0">404</p>
                    </div>
                    <p class="text-dark mb-5 lead">¡¡¡Vaya, ha ocurrido un error!!!</p>
                    <p class="text-black-50 mb-0">No te preocupes, solo da click en Volver a Inicio para salir de aquí</p><a href="../Vistas/Index.php">← Volver a Inicio</a></div>
            </div>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Corrently-IoT-Card.js"></script>
    <script src="https://unpkg.com/corrently-iot-jquery@latest/index.js"></script>
</body>
</html>