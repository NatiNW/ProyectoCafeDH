<?php
    require_once('funciones/autoload.php');
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
    echo 'Bienvenido ' . $_SESSION['email'];
?>
<form class="" action="logout.php" method="post">
    <button type="submit" name="button">Deslogearme</button>
</form>
<a href="logout.php">Salir</a>
