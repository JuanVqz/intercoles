<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>login admin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signin.css">
  </head>
  <body>

    <div class="container">

        <form action="valida_admin.php" class="form-signin" method="POST">
            <h2 class="form-signin-heading">Bienvenido</h2>
            <?php include('mensajes.php'); ?>
            <label for="inputNombre" class="sr-only">Nombre</label>
            <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Ingresa nombre" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
      </form>

    </div> <!-- /container -->


  <!--javascript -->   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script> 
  </body>
</html>