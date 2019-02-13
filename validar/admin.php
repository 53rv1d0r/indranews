<?php
session_start();
if (!isset($_SESSION['admin'])) {
header('location: login.php?access%denegado');
}
include('../conexion.php');
$sql=("SELECT * FROM post ");
$req=mysql_query($sql);
$filas=mysql_num_rows($req);
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panel de control de IndraNews, un lugar para estar informado">
    <meta name="author" content="Manuel Alejandro Restrepo y Tekknia.com">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Panel de Control · IndraNews</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css"><!--css del panel de control-->

    <!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">Indra News</a>
  <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
  <h4 style="color:white;">Bienvenido !!!</h4>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Salir</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../validar/admin.php">
              <span data-feather="home"></span>
              Panel de Control <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../validar/newp.php">
              <span data-feather="file"></span>
              Crear Noticia
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Noticias Publicadas Actualmente</h2>
      </div>

      <h6>Desde aquí podrás crear, eliminar y editar noticias</h6>

      <div class="table-responsive">

        <script>
        function confirmar(id){
        var respuesta=confirm("¿desea eliminar el post?");
        if(respuesta==true)
        <?php echo "window.self.location='eliminar.php?id='+ id" ?>
         else
           return 0;
        }
        </script>

        <?php
          if ($filas==0) {
              echo '<center>';
              echo '<p class="display-3">Aun no has Agregado ningun post</p>';
              echo '</center>';
          }

        if (isset($_GET['okpost'])) {
          echo '<center>';
          echo '<p class="display-3">Nuevo post Agregado</p>';
          echo '</center>';
        }

        if (isset($_GET['ok'])) {
          echo '<center>';
            echo '<p class="display-3">Post Actualizado</p>';
            echo '</center>';
          }if (isset($_GET['deletepost'])) {

            echo '<center>';
            echo '<p class="display-3">Post Eliminado</p>';
            echo '</center>';
          }if (isset($_GET['error'])) {

            echo '<center>';
            echo '<p class="display-3">Error </p>';
            echo '</center>';
          }

          while ($result=mysql_fetch_object($req)) {?>


          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <div class="post-preview">
                          <h2 class="post-title">
                             <?php  echo $result->titulo;?>
                          </h2>
                          <h3 class="post-subtitle">
                             <?php  echo $result->description;?>
                          </h3>
                      <p class="post-meta"> <?php  echo $result->fecha;?></p>
                  </div>
          <?php
          echo '<a class="" href="editar.php?id='.$result->id.'">Editar post</a> | ';
          echo '<input type="button"  onclick="confirmar($id='.$result->id.')" value="Eliminar"></input>  ';
          ?>
          <hr>

              </div>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </main>
  </div>
</div>

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="../js/jqBootstrapValidation.js"></script>
<script src="../js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="../js/clean-blog.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
