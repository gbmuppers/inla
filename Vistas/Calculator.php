<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location: ../index.php");
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>INLA - Infinitesimal Learning Application</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
  <link rel="stylesheet" href="assets/css/Animation-Cards.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/stylecalc.css">
  <script src="../Vistas/assets/js/math.js"></script>
  <script type="text/javascript">
    //esto es lo que buscas
    function showAnswer() {
      var peticion = document.getElementById("viewer").textContent;
      if (peticion.includes("x")) {
        var resultadomath = math.simplify(peticion);
      } else {
        var resultadomath = math.evaluate(peticion);
      }
      viewer.innerHTML = resultadomath;
      equals.setAttribute("data-result", resultadomath);
    };

  </script>
</head>

<body id="page-top">
  <div id="wrapper">
    <div id="calculator" class="calculator">
      <button id="clear" class="clear" onclick="vacio();">C</button>

      <div id="viewer" class="viewer">0</div>

      <button id="cos" class="num" data-num="cos(" >cos</button>
      <button id="sen" class="num" data-num="sen(" onclick="setNum();">sen</button>
      <button id="tan" class="num" data-num="tan(" onclick="setNum();">tan</button>
      <button id="num" data-num="^(-1)" class="num" onclick="setNum();">-1</button>
      <button id="log" class="num" data-num="log(" onclick="setNum();">log</button>

      <button id="ln" class="num" data-num="ln(" onclick="setNum();">ln</button>
      <button id="e" class="num" data-num="e" onclick="setNum();">e</button>
      <button id="sqrt" data-num="sqrt(" class="num" onclick="setNum();">√</button>
      <button id="x^(" class="num" data-num="x^(" onclick="setNum();">x^n</button>
      <button id="x" class="num" data-num="x">x</button>

      <button id="7" class="num" data-num="7" onclick="setNum;">7</button>
      <button id="8" class="num" data-num="8" onclick="setNum();">8</button>
      <button id="9" class="num" data-num="9" onclick="setNum();">9</button>
      <button id="-" data-num="-" class="num" onclick="setNum();">-</button>
      <button id="*" data-num="*" class="num" onclick="setNum();">*</button>

      <button id="4" class="num" data-num="4" onclick="setNum();">4</button>
      <button id="5" class="num" data-num="5" onclick="setNum();">5</button>
      <button id="6" class="num" data-num="6" onclick="setNum();">6</button>
      <button id="+" data-num="+" class="num" onclick="setNum();">+</button>
      <button id="/" data-num="/" class="num" onclick="setNum();">/</button>

      <button id="1" class="num" data-num="1" onclick="setNum();">1</button>
      <button id="2" class="num" data-num="2" onclick="setNum();">2</button>
      <button id="3" class="num" data-num="3" onclick="setNum();">3</button>
      <button id="(" class="num" data-num="(" onclick="setNum();">(</button>
      <button id=")" class="num" data-num=")" onclick="setNum();">)</button>

      <button id="punto" class="num" data-num="." onclick="setNum();">.</button>
      <button id="0" class="num" data-num="0" onclick="setNum();">0</button>
      <button id="equals" class="equals" data-result="" onclick="showAnswer();">=</button>
      




    </div>
  </div>
  <script src="ViewsFuctions.js"></script>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
  <script src="assets/js/numeros.js"></script>
</body>