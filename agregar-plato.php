<!DOCTYPE html>
<html lang="es">
<head>


  <title>Sistema de Datos Guarderia</title>

    <?php include 'meta.php' ; ?>

  <?php include 'estilo.php' ; ?>

  <?php include 'scripts.php' ; ?>


</head>
<body>

  <div class="container-fluid">

    <!--Menu -->

    <?php include 'sidebar.php' ; ?>

    <!--Contenido -->
    <div class="row">
      <div class="col-md-12">

       <!--Inicio -->
       <h2>Agregar  datos del plato de comida</h2>

       <form method="post" action="" class="form-horizontal" >
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar Plato de comida</legend>

          


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="idmenu">Codigo Menu</label>  
            <div class="col-md-8">
              <input id="idmenu" name="idmenu" type="text" placeholder="Codigo, aqui!!!" class="form-control input-md" required="">
              <span class="help-block">Ejemplo: 1234</span>  
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre</label>  
            <div class="col-md-8">
              <input id="nombre" name="nombre" type="text" placeholder="En Mayúsculas por favor" class="form-control input-md" required="">
              <span class="help-block">Nombre del plato</span>  
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="precio">Precio</label>  
            <div class="col-md-8">
              <input id="precio" name="precio" type="text" placeholder="En Mayúsculas por favor" class="form-control input-md" required="">
              <span class="help-block">Precio del plato</span>  
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Enviar">¿Listo?</label>
            <div class="col-md-4">
              <button id="Enviar" name="Enviar" class="btn btn-primary">Enviar</button>
            </div>
          </div>

        </fieldset>
      </form>


    </div>
  </div>



</div>
</body>
</html>