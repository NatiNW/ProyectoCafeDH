<?php
require_once("clases/Administrador.php");
require_once("clases/Producto.php");
include("encabezado.php");
include("navegacion.php");


$prod = new Producto($nombreProducto,$descripcion,$precio,$stock,$foto,$categoria);
$nombre = 'Nati';
$email = 'nati@nati.com';
$admin= new Administrador($nombre,$email);
$conex = new PDO('mysql:host=localhost;dbname=proyectoCafe', 'root', '');


$db = new Administrador($nombre,$email);

$db->bajaDeProducto($prod,$conex);

$admin->bajaDeProducto($prod);
  ?>

  <div class="row carga">
    <div class="col-12 carga-de-productos">
      <h3>Baja de nuevos productos</h3>

      <div class="form-group">

      <form class="" action="baja_de_productos.php" method="post">

          <label for="nombre_del_producto">Nombre del Producto:</label>
          <input type="text" name="nombre_producto" value="">
        </div>

          <button type="submit" name="button">Enviar</button>

      </form>

    </div>

  </div>

  <?php
    include("footer.php")

    ?>
