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
       <h2>Menu de los niños</h2>

       <form method="post" action="" class="form-horizontal" >
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar Menu</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="idmatricula">Numero de Matricula del Niñ@</label>  
            <div class="col-md-8">
              <input id="idmatricula" name="idmatricula" type="text" placeholder="Codigo matricula" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
            </div>
          </div>

          <!-- Text input-->
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
            <label class="col-md-4 control-label" for="fecha_con">Fecha de Consumo</label>  
            <div class="col-md-8">
              <input id="fecha_con" name="fecha_con" placeholder="Seleccione o digita la fecha" class="form-control input-md" required="" type="date" min="2014-01-01" max="2016-12-31" value="<?php echo date("Y-m-d"); ?>"/>
              <span class="help-block">Seleccione del consumo del niñ@</span>  
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