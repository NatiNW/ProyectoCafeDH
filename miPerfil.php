<?php
require_once('funciones/autoload.php');
include("encabezado.php");
include("navegacion.php");
    if (isset($_COOKIE['email'])) {
        $_SESSION['email'] = $_COOKIE['email'];
        $_SESSION['avatar'] = '';
        $_SESSION['id'] = 1;
        $_SESSION['admin'] = false;
    }
    if (!elUsuarioEstaLogeado()) {
        header('login.php');
    }
    if ($_SESSION['admin']==true) {
        echo 'Ud es un Admin->>>>>>';
    }
    $bienvenida = 'Bienvenido ' . $_SESSION['email'];
?>
<div class="row perfil">
  <div class="col-12 miperfil">
<p class="Bienvenido"> <?= $bienvenida ?? '' ?></p>
<form class="perfil" action="logout.php" method="post">
    <button type="submit" class="Deslogearme">Deslogearme</button>
</form>
<a class="salir"href="logout.php">Salir</a>
</div>
</div>
