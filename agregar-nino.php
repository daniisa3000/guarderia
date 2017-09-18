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
       <h2>Agregar Niñ@</h2>

       <form method="post" action="" class="form-horizontal" >
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar Datos</legend>

          

          <div class="form-group">
            <label class="col-md-4 control-label" for="idmatricula">Numero de Matricula del Niñ@</label>  
            <div class="col-md-8">
              <input id="idmatricula" name="idmatricula" type="text" placeholder="Codigo matricula" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombres</label>  
            <div class="col-md-8">
              <input id="nombre" name="nombre" type="text" placeholder="En Mayúsculas por favor" class="form-control input-md" required="">
              <span class="help-block">Nombres  y Apellidos Completos</span>  
            </div>
          </div>
             <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Fecha_nac">Fecha de Nacimiento</label>  
            <div class="col-md-8">
              <input id="Fecha_nac" name="Fecha_nac" placeholder="Seleccione o digita la fecha" class="form-control input-md" required="" type="date" min="1900-01-01" value="2000-01-01"/>
              <span class="help-block">Indique la fecha de nacimiento del Niñ@</span>  
            </div>
          </div>

         <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Fecha_ing">Fecha de Ingreso</label>  
            <div class="col-md-8">
              <input id="Fecha_ing" name="Fecha_ing" placeholder="Seleccione o digita la fecha" class="form-control input-md" required="" type="date" min="2014-01-01" max="2016-12-31" value="<?php echo date("Y-m-d"); ?>"/>
              <span class="help-block">Seleccione la fecha de ingreso del niñ@</span>  
            </div>
          </div>

             <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Fecha_baja">Fecha de Baja</label>  
            <div class="col-md-8">
              <input id="Fecha_baja" name="Fecha_baja" placeholder="Seleccione o digita la fecha" class="form-control input-md" required="" type="date" min="1900-01-01" value="2000-01-01"/>
              <span class="help-block">Indique la fecha de baja del Niñ@</span>  
            </div>
          </div>

            <div class="form-group">
            <label class="col-md-4 control-label" for="dni_pago">Cedula Responsable Economico</label>  
            <div class="col-md-8">
              <input id="dni_pago" name="dni_pago" type="text" placeholder="Sin puntos,ni guiones" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
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