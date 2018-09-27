<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WisePet - Registro</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
      <div class="navbar">
        <img class="logo" src="images/logo.png" alt="Logo WisePet">
        <p>Navbar WisePet</p>
      </div>

      <div class="titulos">

        <h1>Registrate en WisePet!</h1>
        <h2>Completá tus datos</h2>

      </div>

      <form class="formulario" action="registro.php" method="post" enctype="multipart/form-data">

        <div class="primeros-campos">

          <div class="nombre-y-campo">
            <label for="fullname" class="nombre">Nombre completo:</label>
            <input class="campo" type="text" name="fullname" value="">
          </div>

          <div class="nombre-y-campo">
            <label for="nickname" class="nombre">Nombre de usuario:</label>
            <input class="campo" type="text" name="nickname" value="">
          </div>

          <div class="nombre-y-campo">
            <label for="country" class="nombre">País de nacimiento:</label>
            <select class="campo" name="country">
              <option value="">--Elegí un país--</option>
              <option value="">Argentina</option>
              <option value="">Bolivia</option>
              <option value="">Brasil</option>
              <option value="">Chile</option>
              <option value="">Colombia</option>
              <option value="">Ecuador</option>
              <option value="">México</option>
              <option value="">Paraguay</option>
              <option value="">Perú</option>
              <option value="">Uruguay</option>
              <option value="">Venezuela</option>
            </select>
          </div>

          <div class="nombre-y-campo">
            <label for="email" class="nombre">Correo electrónico:</label>
            <input class="campo" type="text" name="email" value="">
          </div>

          <div class="nombre-y-campo">
            <label for="password1" class="nombre">Contraseña:</label>
            <input class="campo" type="password" name="password1" value="">
          </div>

          <div class="nombre-y-campo">
            <label for="password2" class="nombre">Repetir contraseña:</label>
            <input class="campo" type="password" name="password2" value="">
          </div>

        </div>

        <div class="campo-avatar">
          <label for="avatar" class="nombre">Imagen de perfil:</label>
          <input class="campo" type="file" name="avatar">
        </div>

        <button type="submit" name="button">Enviar</button>

      </form>

      <div class="productos">

        <div class="prod">
          <p>PRODUCTO 1</p>
        </div>
        <div class="prod">
          <p>PRODUCTO 2</p>
        </div>
        <div class="prod">
          <p>PRODUCTO 3</p>
        </div>

      </div>

      <div class="productos">

        <div class="prod">
          <p>PRODUCTO 4</p>
        </div>
        <div class="prod">
          <p>PRODUCTO 5</p>
        </div>
        <div class="prod">
          <p>PRODUCTO 6</p>
        </div>

      </div>

  </body>
</html>
