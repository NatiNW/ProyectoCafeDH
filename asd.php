<!DOCTYPE html>
<?php
    $errorEmail = '';
    $errorPassword = '';
    $email = '';
    if ($_POST) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == '') {
            $errorEmail = 'Ingresa tu email';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorEmail = 'El email es invalido';
        }
        if ($password == '') {
            $errorPassword = 'Ingresa tu password';
        }
        //levanto mi archivo en formato json
        $archivo = file_get_contents('usuarios.json');
        //lo transformo a variables en php
        $usuario = json_decode($archivo, true);
        if ($usuario['email'] == $email && password_verify($password, $usuario['password'])) {

        } else {
            $errorEmail = 'Usuario o clave invalidos';
        }
        if (empty($errorEmail) && empty($errorPassword)) {
            header('location:miPerfil.php?email=' . $email);
        }
    }
    require_once('funciones/productos.php');
 ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Coffe Code</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/asd.css">
  </head>
  <body>
    <form class="form-signin">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuérdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Inciar Sesion</button>
    </form>

  </body>
</html>
