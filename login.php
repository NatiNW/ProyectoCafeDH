<?php
require_once('funciones/autoload.php');
include("encabezado.php");
include("navegacion.php");

    $errorEmail = '';
    $errorPassword = '';
    $email = '';
    if ($_POST) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == '') {
            $errorEmail = 'Ingresa tu email';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorEmsail = 'El email es invalido';
        }
        if ($password == '') {
            $errorPassword = 'Ingresa tu password';
        }
        if (empty($errorEmail) && empty($errorPassword)) {

            $archivo = file_get_contents('usuarios.json');

            $usuarios = json_decode($archivo, true);

            foreach ($usuarios as $usuario) {
                if ($usuario['email'] == $email && password_verify($password, $usuario['password'])) {

                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['avatar'] = $usuario['avatar'];
                    $_SESSION['admin'] = $usuario['admin'];
                    $_SESSION['id'] = $usuario['id'];

                    if(isset($_POST['mantenerme'])) {

                        setcookie('email', $email, time() + 60*60*24*30);
                    }
                    var_dump($_SESSION);
                    header('location:miPerfil.php');
                }
            }
            $errorEmail = 'Usuario o clave invalidos';
        }
    }
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/login.css">
		<title>Iniciar Sesion</title>
	</head>


	<body>
<div class="row">
	<div class="container">
		<div class="form-login">
            <h2>Inicia Sesión</h2>
            <form method="post" action="login.php">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" name="email"
                value="<?php echo $email; ?>">
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" name="mantenerme" class="form-check-input" id="mantenerme" value="1">
                <label class="form-check-label" for="mantenerme">Mantenerme Conectado</label>

              </div>
              <button type="submit" class="ingreso">Ingresar</button>
            </form>
		</div>

		<?php require('footer.php') ?>
	</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>
