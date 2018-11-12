<?php

  require_once 'autoload.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPet - Perfil</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body class="registro-body">

    <?php require_once 'header.php'; ?>

    <div class="container-principal">

      <div class="perfilmain">
        <div class="perfilusuario">
          <img class="perfilimg" src="images/imgperfil.png" alt="Perfil">
        </div>
        <div class="perfilusuario">
          <h2 class ="perfilh2">Usuario</h2>
        </div>
        <div>
          <div>
            Nombre completo: John Doe
          </div>
          <div>
            País de nacimiento: Neverland
          </div>
          <div>
            Correo electronico: john@doe.com
          </div>
        </div>
      </div>

    </div>

    <?php require_once 'footer.php'; ?>

    <script src="js/header.js"></script>

  </body>
</html>
