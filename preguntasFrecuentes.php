<?php

  require_once 'autoload.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartPet - Preguntas frecuentes</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="images/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
  <body class="oli">

    <?php require_once 'header.php'; ?>

<div class="container-principal">
  <div class="container-secundario">

<!-- Bootstrap FAQ - START -->
        <div class="container">
          <div class="" id="accordion">
              <div class="faqHeader">Preguntas Frecuentes</div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Donde nos encontramos?</a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="card-block">
                          Nos encontramos en el centro, cerca de las lineas de subte A, B, C, y D.
                      </div>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">¿En que dias y horarios atendemos?</a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="card-block">
                        De lunes a viernes de 8:00 hs a 20:00 hs y sabados de 9:00 hs a 14:00 hs.
                      </div>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">¿Cuanto demoran en llegar las compras?</a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                      <div class="card-block">
                          De 1 a 5 dias habiles dependiendo de la zona del pais donde este.
                      </div>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">¿Se pueden hacer compras fuera de horario de manera on-line?</a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse">
                      <div class="card-block">
                          Si, el sitio web esta habilitado las 24 horas del dia, todos los dias del año.
                      </div>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">¿Que medios de pago aceptan?</a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                      <div class="card-block">
                          Aceptamos tarjeta de credito y efectivo por puntos de pago en toda la ciudad.
                      </div>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">¿Cuanto tiempo tengo para hacer devoluciones?</a>
                      </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse">
                      <div class="card-block">
                          Se tienen 14 dias a partir de que se recibio el producto.
                      </div>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-header">
                      <h4 class="card-header">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">¿Hacen envios al exterior?</a>
                      </h4>
                  </div>
                  <div id="collapseSeven" class="panel-collapse collapse">
                      <div class="card-block">
                          Si, consultar por aranceles y tarifas aqui.
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <style>
          .faqHeader {
              font-size: 18px;
              margin: 10px;
          }

          .card-header {
              font-size: 18px;

          }

          .card-block {
              font-size: 16px;
              margin: 10px;
              margin-left: 40px;
          }
      </style>

      <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
      <script src="js/bootstrap/bootstrap.min.js"></script>

<!-- Bootstrap FAQ - END -->

  <!--Codigo Gabi Starts -->

  <!--      <ol>
          <li><a href="#1">¿Donde nos encontramos?</li></a>
          <li><a href="#2">¿En que dias y horarios atendemos?</li></a>
          <li><a href="#3">¿Cuanto demoran en llegar las compras?</li></a>
          <li><a href="#4">¿Se pueden hacer compras fuera de horario de manera on-line?</li></a>
          <li><a href="#5">¿Que medios de pago aceptan?</li></a>
          <li><a href="#6">¿Cuanto tiempo tengo para hacer devoluciones?</li></a>
          <li><a href="#7">¿Hacen envios al exterior?</li></a>
        </ol>
        <ol>
          <li id="1">¿Donde nos encontramos?
            <br>
            Nos encontramos en el centro, cerca de las lineas de subte A, B, C, y D.
          </li>
          <br>
          <li id="2">¿En que dias y horarios atendemos?
            <br>
            De lunes a viernes de 8:00 hs a 20:00 hs y sabados de 9:00 hs a 14:00 hs.
          </li>
          <br>
          <li id="3">¿Cuanto demoran en llegar las compras?
            <br>
            De 1 a 5 dias habiles dependiendo de la zona del pais donde este.
          </li>
          <br>
          <li id="4">¿Se pueden hacer compras fuera de horario de manera on-line?
            <br>
            Si, el sitio web esta habilitado las 24 horas del dia, todos los dias del año.
          </li>
          <br>
          <li id="5">¿Que medios de pago aceptan?
            <br>
            Aceptamos tarjeta de credito y efectivo por puntos de pago en toda la ciudad.
          </li>
          <br>
          <li id="6">¿Cuanto tiempo tengo para hacer devoluciones?
            <br>
            Se tienen 14 dias a partir de que se recibio el producto.
          </li>
          <br>
          <li id="7">¿Hacen envios al exterior?
            <br>
            Si, consultar por aranceles y tarifas aqui.
          </li>
          <br>
        </ol> -->
<!--Codigo Gabi Ends -->

  </div>

    <?php require_once 'footer.php'; ?>

</div>

    <script src="js/header.js"></script>

  </body>
</html>
