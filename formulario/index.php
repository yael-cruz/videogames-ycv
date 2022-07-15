
<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="post">
       <section class="form-login">
      <h5>Formulario Login</h5>
      <input class="controls" type="text" name="correo" value="" placeholder="Correo">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="registrar" value="Ingresar">
      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>

    </section>
    </form>
   

  </body>
</html>
