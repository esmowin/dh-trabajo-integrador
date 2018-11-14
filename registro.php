<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPet - Registro</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <?php

    require_once 'autoload.php';
    if ($auth->estaLogueado()) {//si ya esta logueado, no lo deja entrar y lo redirije a home
      header("Location: home.php");
    }

    // Defino las variables que voy a usar en las validaciones

    $errores = [];
    $fullname = '';
    $nickname = '';
    $country = '';
    $email = '';
    $password1 = '';
    $password2 = '';

    // VALIDACIONES

    if ($_POST) {

      $validador = new Validator();

      $errores=$validador->validarPost($_POST);

      // "Limpio" los datos recibidos por POST

      $fullname = trim($_POST['fullname']);
      $nickname = trim($_POST['nickname']);
      $country = trim($_POST['country']);
      $email = trim($_POST['email']);
      $password1 = trim($_POST['password1']);
      $password2 = trim($_POST['password2']);

       if (empty($errores)){
         ////////////////////////////////Guardo la image del Avatar//////////////
         $archivo = uniqid();
         $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
         $desde = $_FILES["avatar"]["tmp_name"];
         $hasta = "avatars/".$archivo.".".$ext;
         move_uploaded_file($desde, $hasta);
         ////////////////////////////////Guardo la image del Avatar//////////////

        // Una vez validado todo y subido exitosamente el archivo, vuelvo al Home (más adelante hay que hacer una pantalla que le dé la bienvenida al nuevo usuario (usando GET)
        $nuevoUsuario = new Usuario(null, $fullname, $nickname, $country, $email, $password1,$hasta,1);
        $conn_BD = new DB;
        $conn_BD->guardarUsuario($nuevoUsuario);

        $loguear = new Auth();
        $loguear->loguear($nuevoUsuario->getEmail());
        header('Location:home.php');
      }

    }

  ?>

  <body class="registro-body">

    <?php require_once 'header.php'; ?>

    <div class="container-principal">

      <div class="container-secundario">

        <div class="registro-titulos">

          <h1>Regístrate en SmartPet!</h1>
          <h2>Completa tus datos</h2>

        </div>

        <form class="registro-formulario" action="registro.php" method="post" enctype="multipart/form-data">

          <div class="registro-container-campos">

            <div class="registro-nombre-y-campo">
              <label for="fullname" class="registro-nombre">Nombre completo:</label>
              <div class="registro-campo">

                <input <?php if (isset($errores['fullname'])) {echo 'style="border: solid 2px red"';} ?> type="text" name="fullname" value="<?php echo $fullname ?>">
                <?php
                  if (isset($errores['fullname'])) {
                    echo '<br><span class="registro-error">'.$errores['fullname'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="registro-nombre-y-campo">
              <label for="nickname" class="registro-nombre">Nombre de usuario:</label>
              <div class="registro-campo">
                <input <?php if (isset($errores['nickname'])) {echo 'style="border: solid 2px red"';} ?> type="text" name="nickname" value="<?php echo $nickname ?>">
                <?php
                  if (isset($errores['nickname'])) {
                    echo '<br><span class="registro-error">'.$errores['nickname'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="registro-nombre-y-campo">
              <label for="country" class="registro-nombre">País de nacimiento:</label>
              <div class="registro-campo">
                <select class="registro-dropdown" <?php if (isset($errores['country'])) {echo 'style="border: solid 2px red"';} ?> name="country">
                  <option value="">-- -- -- --- Elige un país --- -- -- --</option>
                  <option value="Argentina" <?php if ($country == 'Argentina') {echo 'selected';} ?>>Argentina</option>
                  <option value="Bolivia" <?php if ($country == 'Bolivia') {echo 'selected';} ?>>Bolivia</option>
                  <option value="Brasil" <?php if ($country == 'Brasil') {echo 'selected';} ?>>Brasil</option>
                  <option value="Chile" <?php if ($country == 'Chile') {echo 'selected';} ?>>Chile</option>
                  <option value="Colombia" <?php if ($country == 'Colombia') {echo 'selected';} ?>>Colombia</option>
                  <option value="Ecuador" <?php if ($country == 'Ecuador') {echo 'selected';} ?>>Ecuador</option>
                  <option value="México" <?php if ($country == 'México') {echo 'selected';} ?>>México</option>
                  <option value="Paraguay" <?php if ($country == 'Paraguay') {echo 'selected';} ?>>Paraguay</option>
                  <option value="Perú" <?php if ($country == 'Perú') {echo 'selected';} ?>>Perú</option>
                  <option value="Uruguay" <?php if ($country == 'Uruguay') {echo 'selected';} ?>>Uruguay</option>
                  <option value="Venezuela" <?php if ($country == 'Venezuela') {echo 'selected';} ?>>Venezuela</option>
                </select>
                <?php
                  if (isset($errores['country'])) {
                    echo '<br><span class="registro-error">'.$errores['country'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="registro-nombre-y-campo">
              <label for="email" class="registro-nombre">Correo electrónico:</label>
              <div class="registro-campo">
                <input <?php if (isset($errores['email'])) {echo 'style="border: solid 2px red"';} ?> type="text" name="email" value="<?php echo $email ?>">
                <?php
                  if (isset($errores['email'])) {
                    echo '<br><span class="registro-error">'.$errores['email'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="registro-nombre-y-campo">
              <label for="password1" class="registro-nombre">Contraseña:</label>
              <div class="registro-campo">
                <input <?php if (isset($errores['password1'])|| (isset($errores['password2']))) {echo 'style="border: solid 2px red"';} ?> type="password" name="password1" value="">
                <?php
                  if (isset($errores['password1'])) {
                    echo '<br><span class="registro-error">'.$errores['password1'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="registro-nombre-y-campo">
              <label for="password2" class="registro-nombre">Repetir contraseña:</label>
              <div class="registro-campo">
                <input <?php if (isset($errores['password2'])) {echo 'style="border: solid 2px red"';} ?> type="password" name="password2" value="">
                <?php
                  if (isset($errores['password2'])) {
                    echo '<br><span class="registro-error">'.$errores['password2'].'</span>';
                  }
                ?>
              </div>
            </div>

            <div class="registro-nombre-y-campo">
              <label for="avatar" class="registro-nombre">Imagen de perfil:</label>
              <div class="registro-campo">
                <input <?php if (isset($errores['imagen'])) {echo 'style="border: solid 2px red"';} ?> class="seleccionar-archivo" type="file" name="avatar" accept=".png, .jpg, .jpeg">
                <br>
                <span class="registro-leyenda-archivo">Formatos: png, jpg y jpeg | Tamaño máximo: 2MB</span>
                <?php
                  if (isset($errores['imagen'])) {
                    echo '<br><span class="registro-error">'.$errores['imagen'].'</span>';
                  }
                ?>
              </div>
            </div>

          </div>

          <button class="registro-button" type="submit" name="button">Enviar</button>

        </form>


      </div>

      <?php require_once 'footer.php'; ?>

    </div>

    <script src="js/header.js"></script>

  </body>
</html>
