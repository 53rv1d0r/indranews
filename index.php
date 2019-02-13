<?php
include('conexion.php');
$sql=("SELECT * FROM post ");
$req=mysql_query($sql);
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Indra News, un lugar para estar informado">
    <meta name="author" content="Manuel Alejandro Restrepo y Tekknia.com">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css"><!--css del login-->
    <title>Indra News · Medellín</title>

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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">

      </div>
      <div class="col-4 text-center">
        <a href="index.php"><img class="mb-4" src="img/indralogin.png" alt="IndraNews" width="128" height="41">News</a>
        <!--<img class="mb-4" src="img/indralogin.png" alt="IndraNews" width="128" height="41">-->
        <!--<a class="blog-header-logo text-dark" href="#">News</a>-->
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">

        </a>
        <a class="btn btn-sm btn-outline-secondary" href="validar/login.php">Ingreso</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="http://www.indracompany.com/es/indra">Quienes Somos</a>
      <a class="p-2 text-muted" href="http://www.indracompany.com/es/minsait">Minsait</a>
      <a class="p-2 text-muted" href="http://www.indracompany.com/es/pais/colombia">Colombia</a>
      <a class="p-2 text-muted" href="https://www.indracompany.com/es/defensa-seguridad">Defensa y Seguridad</a>
      <a class="p-2 text-muted" href="https://www.indracompany.com/es/trafico-aereo-0">Tráfico Aéreo</a>
      <a class="p-2 text-muted" href="https://www.indracompany.com/es/transportes">Transportes</a>
    </nav>
  </div>

  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">En Colombia</h1>
      <p class="lead my-3">Gastos con tarjeta son mayores pero menos frecuentes</p>
      <p class="lead mb-0"><a href="http://www.eltiempo.com/economia/sectores/colombia-el-pais-donde-mas-se-gasta-con-tarjetas-debito-y-credito-en-latinoamerica-323340" class="text-white font-weight-bold">Leer más...</a></p>
    </div>
  </div>

  <!-- Contenido oculto, lo dejo acá por si se va a utilizar después, pero creo que no ;)
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Featured post</a>
          </h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#">Continue reading</a>
        </div>
        <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Post title</a>
          </h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#">Continue reading</a>
        </div>
        <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
      </div>
    </div>
  </div>
</div>-->

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">
        Noticias desde Indra
      </h3>

      <div class="blog-post">
        <?php
            while($result=mysql_fetch_object($req))
        { ?>

                <?php
                    echo '<a href="post.php?id='.$result->id.'">';
                ?>
                <h2 class="post-title"><?php  echo $result->titulo;?></h2>
                <h3 class="post-subtitle"><?php  echo $result->description;?></h3>
                </a><p class="post-meta"> <?php  echo $result->fecha;?></p>

                <hr>
                <hr>
        <?php
            }
        ?>
        <!-- -->
        <h2 class="blog-post-title">Cuidado con falso correo de WeTransfer con el que  roban su contraseña</h2>
        <p class="blog-post-meta">Febrero 11, 2019 by <a href="#">Manuel Alejandro Restrepo</a></p>

        <p>Con un falso correo que parece venir del servicio de envío de Wetransfer, cibercriminales buscan robar las contraseñas de los usuarios.</p>
        <hr>
        <p>Se trata de una campaña de phishing (o suplantación de identidad) descubierta por la compañía de ciberseguridad Eset que si bien no implica la instalación de malware o código malicioso en los dispositivos de las víctimas, sí pone en riesgo la información personal de quienes caen en la trampa.</p>
        <blockquote>
          <p>De acuerdo con la firma de seguridad informática, los atacantes envían un correo que parece venir de Wetransfer y que visualmente se asemeja bastante a los mensajes que normalmente se remiten desde esta página. En el correo hay un enlace de descarga de dos archivos PDF con una supuesta fecha de vencimiento. Sin embargo, el primer síntoma de sospecha es que el remitente del mensaje no es oficial y termina con un dominio de correo desconocido.</p>
        </blockquote>

      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Anteriores</a>
        <a class="btn btn-outline-secondary disabled" href="#">Nuevas</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">Indra News</h4>
        <p class="mb-0">Éste es el portal <em>informativo</em> de INDRA. Aquí encontrarás la información actualizada de todos nuestros avances.</p>
      </div>

      <div class="p-3">
        <h4 class="font-italic">Archivos</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">Diciembre 2018</a></li>
          <li><a href="#">Enero 2019</a></li>
          <li><a href="#">Febrero 2019</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <!-- -->
  <!-- -->
  <p>
    <a href="#">Ir al cielo</a>
  </p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
