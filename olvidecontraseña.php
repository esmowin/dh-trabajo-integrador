<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPet - Home</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>

    <?php require_once 'header.php'; ?>

    <div class="container-principal">

      <div class="container-secundario">

        <div class="registro-titulos">

          <h1>Olvidaste tu contraseña</h1>
          <h5>Ingresa tu correo electronico aqui:</h5>

        </div>

        <form class="registro-formulario" action="" method="post">
          <div class="registro-container-campos">
            <div class="registro-nombre-y-campo">
              <label for="login-correo" class="registro-nombre">Correo electrónico:</label>
                <div class="registro-campo">
                  <input type="text" name="login-correo">
                </div>
            </div>
          </div>

          <button class="registro-button" type="submit" name="button">Recuperar Constraseña</button>

        </form>



      </div>

      <?php require_once 'footer.php'; ?>

    </div>

    <script src="js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
