<?php
  include("encabezado.php");
 ?>

<?php
  include("navegacion.php");
  ?>

  <div class="row carga">
    <div class="col-12 carga-de-productos">
      <h3>Baja de nuevos productos</h3>

      <div class="form-group">

      <form class="" action="baja_de_productos.php" method="post">

          <label for="nombre_del_producto">Nombre del Producto:</label>
          <input type="text" name="nombre del producto" value="">
        </div>

          <button type="submit" name="button">Enviar</button>

      </form>

    </div>

  </div>

  <?php
    include("footer.php")

    ?>
  include("footer.php")
