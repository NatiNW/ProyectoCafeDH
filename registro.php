<?php
require_once('funciones/productos.php');
    var_dump($_POST);
    var_dump($_FILES);
    if ($_POST) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nombreArchivo = '';
        //me faltan las validaciones de formato email, email no repetido, password no vacio y password igual a confirmar password
        //si subio un archivo lo guardo en la carpeta avatars
        //pregunto si se subio el archivo exitosamente
        if ($_FILES['avatar']['error'] === 0) {
            //pido la extension del archivo
            $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $errorAvatar = 'archivo de formato invalido';
            } else {
                $nombreArchivo = $email . '.' . $ext;
                //voy a mover el archivo del temporal a mi carpeta avatars
                move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatars/' . $nombreArchivo);
            }
        }
        //formar los datos del usuario
        $usuario = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'avatar' => $nombreArchivo,
        ];
        //levanto mi archivo en formato json
        $archivo = file_get_contents('usuarios.json');
        //lo transformo a variables en php
        $usuarios = json_decode($archivo, true);
        //agrego el usuario nuevo al array del json
        $usuarios[] = $usuario;
        //convierto ese usuario en JSON para luego mandarlo a guardar
        $usuariosEnJson = json_encode($usuarios);
        //guardo el usuario en mi json
        file_put_contents('usuarios.json', $usuariosEnJson);
        header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro</title>
    
</head>
<body>
<?php include("encabezado.php");
?>
<div id='fg_membersite'>
  <form id='register' action='' method='post'>
    <fieldset >
      <legend>Registrate</legend>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />
                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>
<?php include("footer.php") ?>
    </body>
</html>
