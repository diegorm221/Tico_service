<?php

// session_start();
// if (isset($_SESSION["correo"])) {
//   header("location: Principal.php");
// }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "user-scalable=no, width=device-width">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--scroll">
      <div class="mdl-layout__header-row">
      <!-- Title -->
      <figure><img id="img_nav_large" src="images/logo.png" alt="" /></figure>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer mdl-layout--large-screen-only"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="Principal.php">
                      <img src="images/back-icon.png" alt="home" /></a>
      </nav>
      </div>
      </header>
      <div class="mdl-layout__drawer mdl-layout--small-screen-only">
        <figure><img id="img_nav_short" src="images/logo.png" alt="" /></figure>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="Principal.php">Pagina Principal</a>
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
          <a class="mdl-navigation__link" href=""></a>
        </nav>
      </div>
<!-- campos login -->
      <main class="mdl-layout__content">

        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--4-col"></div>
            <div class="mdl-cell mdl-cell--4-col">

<<<<<<< HEAD
          <form class="" action="php/verificar_usuario.php" method="post">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="email" name="correo" required>
              <label class="mdl-textfield__label" for="correo">Correo Electrónico</label>
            </div><br>

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="password" name="contrasena" required>
              <label class="mdl-textfield__label" for="Contrasena">Dijite su Contraseña</label>
            </div><br>
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                                        type="submit" name="submit" value="Entrar">
=======
              <form>
                <div class="mdl-textfield mdl-js-textfield">
                <label for="correo">Email</label>
                <input class="mdl-textfield__input" type="email" id="correo"
                                      placeholder="example@example.com" required>
              </div>
              <div class="mdl-textfield mdl-js-textfield">
                <label for="contrasena">Contraseña</label>
                <input class="mdl-textfield__input" type="password"
                                  id="contrasena" placeholder="********" required>
              </div><br>
              <span id="resultado"></span>
              <br>
              <div>
                <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                              type="button" name="submit" id="submit" value="ENTRAR">
              </div>
>>>>>>> a60a4fb35dc5713793a26bef6bc639a98349613e
              <br>
              <div id="link">
                <span>Registrarse </span><a href="Registro.php">Aquí</a>
              </div>
              </form>
            </div>
          <div class="mdl-cell mdl-cell--4-col"></div>
      </div>
      </main>

    </div>

    <script src="./material.min.js"></script>
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/login.js"></script>
  </body>
</html>
