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
       <h2>Agregar  datos de alergias de ingredientes de los Niñ@s</h2>

       <form method="post" action="" class="form-horizontal" >
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar Alergias de ingredientes</legend>

          
          <div class="form-group">
            <label class="col-md-4 control-label" for="idmatricula">Numero de Matricula del Niñ@</label>  
            <div class="col-md-8">
              <input id="idmatricula" name="idmatricula" type="text" placeholder="Codigo matricula" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
            </div>
          </div>


          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Ingrediente">Ingredientes</label>
            <div class="col-md-8">
              <select id="nombre_ingrediente" name="nombre_ingrediente" class="form-control">
                <option value="#">Ingrediente</option>
                <option value="#">Ingrediente</option>
                <option value="#">Ingrediente</option>
                <option value="#">Ingrediente</option>
                <option value="#">Ingrediente</option>
                <option value="otro">Otro</option>
              </select>
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