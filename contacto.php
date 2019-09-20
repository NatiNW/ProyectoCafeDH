<?php
  include("encabezado.php");
 ?>

<?php
  include("navegacion.php");
  ?>

  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form">
    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Comentario</label>
      <input type="text" class="form-control" id="exampleInputText" placeholder="Tu comentario">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
</div>
</div>


<?php
  include("footer.php")
?>
