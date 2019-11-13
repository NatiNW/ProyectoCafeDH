<?php
  require_once("clases/Administrador.php");
  require_once("clases/Producto.php");
  include("encabezado.php");
 ?>

<?php
  include("navegacion.php");
  ?>

<?php

$errorNombreProducto = '';
$errorDescripcion = '';
$errorStock = '';
$errorFoto = '';
$errorPrecio = '';


if($_POST) {
  $nombreProducto = $_POST['nombre_producto'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $foto = '';
  $categoria = $_POST['categoria'];


  if ($_FILES['foto']['error'] === 0) {

      $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
      if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
          $errorFoto = 'archivo de formato invalido';
      } else {
          $foto = $nombreProducto . '.' . $ext;

          move_uploaded_file($_FILES['foto']['tmp_name'], 'productos/' . $nombreProducto);
      }
    }

    if(!isset ($_POST['nombre_producto']) && empty ($_POST ['nombre_producto'])){
      $errorNombreProducto ['nombre_producto'][]= 'Debes ponerle un nombre al Producto';
    }

    if(!isset ($_POST['descripcion']) && empty ($_POST ['descripcion'])){
      $errorDescripcion ['descripcion'][]= 'Debes incluir la descripción del Producto';
    }

    if(!isset ($_POST['stock']) && empty ($_POST ['stock'])){
      $errorStock ['stock'][]= 'Falta informar el stock del Producto';
    }

    if(is_numeric ($_POST['stock'])==false){
      $errorStock ['stock'][]= 'El stock debe ser un número';
    }

    if(is_numeric($_POST['precio'])==false){
      $errorPrecio ['precio'][]= 'El precio debe ser un numero';
    }

    if(!isset ($_POST['precio']) && empty ($_POST ['precio']){
      $errorPrecio ['precio'][] = 'Falta informar el precio del Producto';
    }

    if(empty($_POST['foto'])){
      $errorFoto['foto'][]='Falta agregar una foto del Producto'
    }
  }

  $prod = new Producto($nombreProducto,$descripcion,$precio,$stock,$foto,$categoria);
  $nombre = 'Nati';
  $email = 'nati@nati.com';
  $admin= new Administrador($nombre,$email);
  $conex = new PDO('mysql:host=localhost;dbname=proyectoCafe', 'root', '');


  $db = new Administrador($nombre,$email);

  $db->altaDeProducto($prod,$conex);

  $admin->altaDeProducto($prod);


}?>


<div class="row carga">
  <div class="col-12 carga-de-productos">
    <h3>Carga de nuevos productos</h3>

    <div class="form-group">

    <form class="" action="carga_de_productos.php" method="post"  enctype="multipart/form-data">

        <label for="nombre_del_producto">Nombre del Producto:</label>
        <input type="text" name="nombre_producto" value="<?=$nombreProducto?>">
      </div>
      <small style="color:red"><?= $errorNombreProducto ?? '' ?> </small>
      <div class="form-group">

          <label for="precio">Precio:</label>
          <input type="text" name="precio" value="<?=$precio?>">
        </div>
        <small style="color:red"><?= $errorPrecio ?? '' ?> </small>
        <div class="form-group">

            <label for="precio">Stock:</label>
            <input type="text" name="stock" value="<?=$stock?>">
          </div>
          <small style="color:red"><?= $errorStock ?? '' ?> </small>
      <div class="form-group">
        <label for="foto_del_producto">Subir Foto:</label>
                <input type="file" id="foto-de-producto" name="foto" value="<?=$foto?>">
              </div>
              <small style="color:red"><?= $errorFoto ?? '' ?> </small>
        <div class="form-group">
          <label for="categoria_del_producto">Categoría:</label>
          <select class="" name="categoria" value="<?=$categoria?>">

            <option value="descafeinado">Descafeinado</option>
            <option value="largo">Largo</option>
            <option value="corto">Corto</option>
          </select>
        </div>
      <div class="form-group">
        <p>
      <label for="descripcion_del_producto">Descripción del Producto:</label>
      </p>
          <textarea name="descripcion" class= "form-control" value="<?=$descripcion?>"></textarea>
        </div>
        <small style="color:red"><?= $errorDescripcion ?? '' ?> </small>
        <div class="form-group">
        </div>
        <button type="submit" name="button">Enviar</button>

    </form>

  </div>

</div>

<?php
  include("footer.php")

  ?>
?>
