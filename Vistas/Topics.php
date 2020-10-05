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
    <style>
        .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        }

        .active, .collapsible:hover {
        background-color: #555;
        }

        .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
        }

        .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
        }

        /* Create two equal columns that sits next to each other */
        .column {
        flex: 33%;
        padding: 0 4px;
        }

        .column img {
        margin-top: 8px;
        vertical-align: middle;
        }


    </style>
</head>
<body>
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="title-modal">Recursos</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="column">
                    <a id="link-video" href="https://www.youtube.com/watch?v=aT3jXzkT8io" target="_blank"><img class="icon-resource" src="../Vistas/Img/youtube.png"></a>
                </div>
                <div class="column">
                    <a id="link-audio" href="https://www.youtube.com/watch?v=aT3jXzkT8io" target="_blank"><img class="icon-resource" src="../Vistas/Img/brand.png"></a>
                </div>
                <div class="column">
                    <a id="link-texto" href="https://www.youtube.com/watch?v=aT3jXzkT8io" target="_blank"><img class="icon-resource" src="../Vistas/Img/press.png"></a>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="card shadow-lg">
        <button class="collapsible">Álgebra</button>
            <div class="content">
            <button class="collapsible" id="Algebra-Teoria de Exponentes" value="Algebra-Teoria de Exponentes" onclick="openModalTopics(this.id)">Teoría de exponentes</button>
            <button class="collapsible" id="Algebra-Ecuaciones Exponenciales" value="Algebra-Ecuaciones Exponenciales"  onclick="openModalTopics(this.id)">Ecuaciones exponenciales</button>
            <button class="collapsible" id="Algebra-Polinomios" value="Algebra-Polinomios" onclick="openModalTopics(this.id)">Polinomios</button>
            <button class="collapsible" id="Algebra-Productos Notables" value="Algebra-Productos Notables" onclick="openModalTopics(this.id)">Productos Notables</button>
            <button class="collapsible" id="Algebra-Division Algebraica" value="Algebra-Division Algebraica" onclick="openModalTopics(this.id)">División Algebráica</button>
            <button class="collapsible" id="Algebra-Cocientes Notables" value="Algebra-Cocientes Notables" onclick="openModalTopics(this.id)">Cocientes Notables</button>
            <button class="collapsible" id="Algebra-Factorizacion" value="Algebra-Factorizacion" onclick="openModalTopics(this.id)">Factorización</button>
            <button class="collapsible" id="Algebra-Fracciones Algebraicas" value="Algebra-Fracciones Algebraicas" onclick="openModalTopics(this.id)">Fracciones Algebráicas</button>
            <button class="collapsible" id="Algebra-Radicacion" value="Algebra-Radicacion" onclick="openModalTopics(this.id)">Radicación</button>
            <button class="collapsible" id="Algebra-Numeros Complejos" value="Algebra-Numeros Complejos" onclick="openModalTopics(this.id)">Números Complejos</button>
            <button class="collapsible" id="Algebra-Binomio de Newton" value="Algebra-Binomio de Newton" onclick="openModalTopics(this.id)">Binomio de Newton</button>
            <button class="collapsible" id="Algebra-Ecuaciones Cuadraticas" value="Algebra-Ecuaciones Cuadraticas" onclick="openModalTopics(this.id)">Ecuaciones Cuadráticas</button>
            <button class="collapsible" id="Algebra-Logaritmos" value="Algebra-Logaritmos" onclick="openModalTopics(this.id)">Logaritmos</button>
            <button class="collapsible" id="Algebra-Sistema de Ecuaciones" value="Algebra-Sistema de Ecuaciones" onclick="openModalTopics(this.id)">Sistema de Ecuaciones</button>
            <button class="collapsible" id="Algebra-Numero Factorial" value="Algebra-Numero Factorial" onclick="openModalTopics(this.id)">Número Factorial</button>
            <button class="collapsible" id="Algebra-Inecuaciones" value="Algebra-Inecuaciones" onclick="openModalTopics(this.id)">Inecuaciones</button>
            </div>
        <button class="collapsible">Cálculo diferencial</button>
            <div class="content">
            
            </div>
        <button class="collapsible">Cálculo integral</button>
            <div class="content">
            
            </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Corrently-IoT-Card.js"></script>
    <script src="https://unpkg.com/corrently-iot-jquery@latest/index.js"></script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
            content.style.maxHeight = null;
            } else {
            content.style.maxHeight = content.scrollHeight + "px";
            } 
        });
        }
    </script>
    <script>
        function openModalTopics(id_recurso) {
            var texto = document.getElementById(id_recurso).getAttribute("value"); 
            var title = document.getElementById("title-modal");
            var branch = texto.substring(0,texto.indexOf("-"));
            var topic = texto.substring(texto.indexOf("-")+1);;
            title.innerHTML = "Recursos para: " + topic + ", " +branch + ".";

            $.ajax({
            //La URL para la petición
            url : '../Controladores/RecursoController.php',
            //La información a enviar en este caso el valor de lo que seleccionaste en el select
            data : { branch : branch , topic : topic , function : 'urls' },
            //Especifica si será una petición POST o GET
            type : 'POST',
            //El tipo de información que se espera de respuesta
            dataType : 'json',
            //Código a ejecutar si la petición es satisfactoria
            success : function(json) {
                //Aquí recibimos el "echo" del php(RecursoController.php)
                document.getElementById("link-video").href= json.link_video;
                document.getElementById("link-audio").href= json.link_audio;
                document.getElementById("link-texto").href= json.link_texto;
                //document.getElementById("montomaxpres").value = json.deuda_total_global;
                //alert(json.deuda_total_global);
            },
            //Código a ejecutar si la petición falla;
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            }
            });

            $("#myModal").modal();
        }      
    </script> 
</body>
</html>