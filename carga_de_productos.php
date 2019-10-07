<?php
  include("encabezado.php");
 ?>

<?php
  include("navegacion.php");
  ?>

<div class="row carga">
  <div class="col-12 carga-de-productos">
    <h3>Carga de nuevos productos</h3>

    <div class="form-group">

    <form class="" action="carga_de_productos.php" method="post">

        <label for="nombre_del_producto">Nombre del Producto:</label>
        <input type="text" name="nombre del producto" value="">
      </div>
      <div class="form-group">

          <label for="precio">Precio:</label>
          <input type="text" name="nombre del producto" value="">
        </div>
      <div class="form-group">
        <label for="foto_del_producto">Subir Foto:</label>
                <input type="file"  id="foto-de-producto" name="foto-de-producto">
              </div>
        <div class="form-group">
          <label for="categoria_del_producto">Categoría:</label>
          <select class="" name="categoria">

            <option value="descafeinado">Descafeinado</option>
            <option value="largo">Largo</option>
            <option value="corto">Corto</option>
          </select>
        </div>
      <div class="form-group">
        <p>
      <label for="descripcion_del_producto">Descripción del Producto:</label>
      </p>
          <textarea name="name" class= "form-control">Descripcion del Producto</textarea>
        </div>
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
