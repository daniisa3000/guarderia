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
       <h2>Agregar  datos de los ingredientes de comida</h2>

       <form method="post" action="" class="form-horizontal" >
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar Ingredientes</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nombre_plato">Nombre del Plato</label>  
            <div class="col-md-8">
              <input id="nombre_plato" name="nombre_plato" type="text" placeholder="En Mayúsculas por favor" class="form-control input-md" required="">
              <span class="help-block">Nombre del Plato</span>  
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nombre_ingrediente">Nombres de los Ingrediente</label>  
            <div class="col-md-8">
              <input id="nombre_ingrediente" name="nombre_ingrediente" type="text" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Ingredientes</span>  
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