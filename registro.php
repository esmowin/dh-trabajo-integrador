<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPet - Registro</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <?php

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

      // "Limpio" los datos recibidos por POST

      $fullname = trim($_POST['fullname']);
      $nickname = trim($_POST['nickname']);
      $country = trim($_POST['country']);
      $email = trim($_POST['email']);
      $password1 = trim($_POST['password1']);
      $password2 = trim($_POST['password2']);

      // Valido el "Nombre completo"

      // Hago un tratamiento para NO permitir símbolos como *, $, &, /, etc., pero SÍ permitir las letras utilizadas tanto en el idioma español como en el portugués -esto incluye las letras "especiales" de estos dos idiomas, es decir, la Ñ y la Ç-, así como los espacios)

      if (empty($fullname)) {
        $errores['fullname'] = 'Debes completar este campo';
      } else if (strlen($fullname) < 4 || strlen($fullname) > 60) {
        $errores['fullname'] = 'El nombre completo debe tener un mínimo de 4 y un máximo de 60 caracteres';
      } else if (!ctype_alpha(str_replace([' ', 'á', 'ã', 'â', 'à', 'é', 'ê', 'í', 'ó', 'õ', 'ô', 'ú', 'ñ', 'ç'], '', $fullname))) {
        $errores['fullname'] = 'Se ingresaron caracteres inválidos. Este campo acepta solo letras y espacios';
      }

      // Valido el "Nombre de usuario"

      // Hago un tratamiento para NO permitir espacios ni símbolos como *, $, &, /, etc., pero SÍ permitir las letras utilizadas tanto en el idioma español como en el portugués -esto incluye las letras "especiales" de estos dos idiomas, es decir, la Ñ y la Ç-)

      if (empty($nickname)) {
        $errores['nickname'] = 'Debes completar este campo';
      } else if (strlen($nickname) < 3 || strlen($nickname) > 30) {
        $errores['nickname'] = 'El nombre de usuario debe tener un mínimo de 3 y un máximo de 30 caracteres';
      } else if (!ctype_alnum(str_replace(['á', 'ã', 'â', 'à', 'é', 'ê', 'í', 'ó', 'õ', 'ô', 'ú', 'ñ', 'ç'], '', $nickname))) {
        $errores['nickname'] = 'Se ingresaron caracteres inválidos. Este campo acepta solo letras y números (sin espacios)';
      }

      // Valido el "País de nacimiento"

      $paises = ['Argentina', 'Bolivia', 'Brasil', 'Chile', 'Colombia', 'Ecuador', 'México', 'Paraguay', 'Perú', 'Uruguay', 'Venezuela'];

      if (empty($country)) {
        $errores['country'] = 'Debes elegir una opción';
      } else if (!in_array($country, $paises)) {
        $errores['country'] = 'La opción ingresada no es válida';
      }

      // Valido el "Correo electrónico"

      if (empty($email)) {
        $errores['email'] = 'Debes completar este campo';
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El formato del correo es inválido';
      }

      // Valido la "Contraseña"

      if (empty($password1)) {
        $errores['password1'] = 'Debes completar este campo';
      } else if (strlen($password1) < 8 || strlen($password1) > 20) {
        $errores['password1'] = 'La contraseña debe tener un mínimo de 8 y un máximo de 20 caracteres';
      }

      // Valido el "Repetir contraseña"

      if (empty($password2)) {
        $errores['password2'] = 'Debes completar este campo';
      } else if (strlen($password2) < 8 || strlen($password2) > 20) {
        $errores['password2'] = 'La contraseña debe tener un mínimo de 8 y un máximo de 20 caracteres';
      } else if ($password2 !== $password1) {
        $errores['password2'] = 'Las contraseñas ingresadas no coinciden';
      }

      // Validando la "Imagen de perfil":

      if (empty($errores)) {

        if ($_FILES["avatar"]["error"] == 4) {

          $errores['imagen'] = "La imagen de perfil es obligatoria";

        } else if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {

          $archivo = uniqid();
          $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
          $desde = $_FILES["avatar"]["tmp_name"];

          if ($ext != "png" && $ext != "jpg" && $ext != "jpeg") {
            $errores['imagen'] = "El formato del archivo es inválido";
          } else if ($_FILES["avatar"]["size"] > 2097152) {
            $errores['imagen'] = "El archivo supera el tamaño máximo permitido";
          } else {
            $hasta = "avatars/".$archivo.".".$ext;
            move_uploaded_file($desde, $hasta);

            // Una vez validado todo y subido exitosamente el archivo, vuelvo al Home (más adelante hay que hacer una pantalla que le dé la bienvenida al nuevo usuario (usando GET)

            header('Location:home.php');

          };

        } else {
          $errores['imagen'] = "Ocurrió un error al cargar la imagen de perfil";
        };
      };

    }

  ?>

  <body>
      <div class="registro-navbar">
        <img class="registro-logo" src="images/logo.png" alt="Logo WisePet">
        <p>Navbar SmartPet</p>
      </div>

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
              <input <?php if (isset($errores['password1']) || isset($errores['password2'])) {echo 'style="border: solid 2px red"';} ?> type="password" name="password1" value="">
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

  </body>
</html>
