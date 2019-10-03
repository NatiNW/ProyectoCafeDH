<?php
  include("encabezado.php");
 ?>

<?php
  include("navegacion.php");
  ?>


    <div class="row contacto">
      <div class="col-12">
        <h3>Comentarios</h3>
        <p>¿Tenés dudas? Dejanos tus consultas aquí. Te responderemos a la brevedad.</p>
    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ejemplo: nombre@mail.com">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Comentario</label>
      <input type="text" class="form-control" id="exampleInputText" placeholder="Escribe aquí tu consulta">
    </div>

    <button type="submit" class="btn btn-ttc">Enviar</button>
    
  </form>
  </div>
</div>



<?php
  include("footer.php")
?>
