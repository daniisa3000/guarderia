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


    <!--Menu-Sidebar -->
   
         <?php include 'sidebar.php' ; ?>


    <!--Contenido -->
    <div class="row">
      <div class="col-md-12">

       <!--Inicio -->
       <h2>Agregar Responsable Economico</h2>

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
            <label class="col-md-4 control-label" for="dni_pago">Cedula Responsable Economico</label>  
            <div class="col-md-8">
              <input id="dni_pago" name="dni_pago" type="text" placeholder="Sin puntos,ni guiones" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 12345678</span> 
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="direccion">Cedula Responsable Economico</label>  
            <div class="col-md-8">
              <input id="direccion" name="direccion" type="text" placeholder="Localidad de vivienda" class="form-control input-md" required="">
              <span class="help-block">Ejemplo: Altavista</span> 
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="telefono1">Telefono Principal de Contacto</label>  
            <div class="col-md-8">
              <input id="telefono1" name="telefono1" type="text" placeholder="Sin puntos,ni guiones" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 123456789</span> 
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="telefono2">Cedula Responsable Economico</label>  
            <div class="col-md-8">
              <input id="telefono2" name="telefono2" type="text" placeholder="Sin puntos,ni guiones" class="form-control input-md" required="">
              <span class="help-block">Ejemplo 123456789</span> 
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Email">Email del Responsable</label>  
            <div class="col-md-8">
            <input id="email" name="email" type="email" placeholder="ejemplo@servidor.com" class="form-control input-md" required="">
              <span class="help-block">Asegurese que la cuenta exista</span>  
            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Password">Cotraseña</label>
            <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
              <span class="help-block">Digite la contraseña a registrar</span>
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