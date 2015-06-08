<?php include('cabeza.php'); ?>

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

<?php include('pie.php');?>
