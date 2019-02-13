<?php
session_start();
if (isset($_SESSION['admin'])) {
   header('location: admin.php');
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ingreso a Indra News, un lugar para estar informado">
    <meta name="author" content="Manuel Alejandro Restrepo y Tekknia.com">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Ingreso de Usuario · IndraNews</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/signing.css"><!--css del login-->
  </head>
  <body class="text-center">

    <?php
    if (isset($_GET['error'])) {
      echo '<center><p>Datos incorrectos</p></center>';
    }
    ?><!--mensaje de validación de campos-->
    <!-- Ingreso de datos de acceso-->
    <form class="form-signin" action="validar.php" method="post">
      <a href="../index.php"><img class="mb-4" src="../img/indralogin.png" alt="IndraNews" width="128" height="41">News</a>
      <!--<img class="mb-4" src="../img/indralogin.png" alt="IndraNews" width="128" height="41">-->
        <h1 class="h3 mb-3 font-weight-normal">Digitar Datos</h1>

          <label for="inputEmail" class="sr-only">Email address </label>
          <input type="text" name="user" class="form-control" placeholder="Usuario" required autofocus>

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="pass" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        <p class="mt-5 mb-3 text-muted">&copy; IndraNews 2019</p>
    </form>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Contact Form JavaScript -->
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_me.js"></script>
<!-- Theme JavaScript -->
<script src="../js/clean-blog.min.js"></script>
</body>
</html>
