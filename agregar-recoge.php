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
       <h2>Agregar  Pariente que recoge al niñ@</h2>

       <form method="post" action="" class="form-horizontal" >
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar Responsable</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombres</label>  
            <div class="col-md-8">
              <input id="nombre" name="nombre" type="text" placeholder="En Mayúsculas por favor" class="form-control input-md" required="">
              <span class="help-block">Nombres Completos</span>  
            </div>
          </div>

            <div class="form-group">
            <label class="col-md-4 control-label" for="dni">Cedula Responsable a recoger</label>  
            <div class="col-md-8">
              <input id="dni" name="dni" type="text" placeholder="Sin puntos,ni guiones" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="idmatricula">Numero de Matricula del Niñ@</label>  
            <div class="col-md-8">
              <input id="idmatricula" name="idmatricula" type="text" placeholder="Codigo matricula" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
            </div>
          </div>

          
          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Danza">Relacion familiar</label>
            <div class="col-md-8">
              <select id="relacion" name="relacion" class="form-control">
                <option value="mama">Mama</option>
                <option value="papa">Papa</option>
                <option value="tio">Tio</option>
                <option value="tia">Tia</option>
                <option value="abuela">Abuela</option>
                <option value="abuelo">Abuelo</option>
                <option value="hermano">Hermano</option>
                <option value="hermana">Hermana</option>
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