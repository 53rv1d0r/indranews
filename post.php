<?php
include('conexion.php');
$id=$_GET["id"];
$sql=("SELECT * FROM post WHERE id='$id'");
$req=mysql_query($sql);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Indra News, un lugar para estar informado">
    <meta name="author" content="Manuel Alejandro Restrepo y Tekknia.com">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Indra News · Medellín</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">INDRA NEWS</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <?php  while ($result=mysql_fetch_object($req)) {  ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <?php echo  '<header class="intro-header" style="background-image: url(img/'.$result->imagen.'); ">' ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                     <div style="background: rgba(0,0,0,0.5); padding: 5px;">
                        <h1><?php echo $result->titulo; ?></h1>
                        <h2 class="subheading"><?php echo $result->description; ?></h2>
                        <span class="meta"><?php echo $result->fecha; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <?php   echo '<p class="lead">'.$result->contenido.'</p>';
                     echo '<div class="embed-responsive embed-responsive-4by3">';
                     echo '<center>';
                     echo ''.$result->video.'';
                     echo   '</center>';
                     echo '</div>';
                    ?>
                  <?php } ?>
                </div>
            </div>
        </div>
    </article>
    <br>
     <a name="comentarios"></a>
            <!--seccion de comentarios -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <h3>Comentarios</h3>
                        <?php
                        if (isset($_GET['ok'])) {
                            echo '<center>';
                             echo '<h4>Comentario Agregado</h4>';
                             echo '</center>';
                        }if(isset($_GET['deletepost'])){
                            echo '<h4>Post eliminado</h4>';
                        }
                            $comen=mysql_query("SELECT * FROM comentarios where numero_post='$id' ");
                            while ($r=mysql_fetch_object($comen)) {
                                    echo '<div style="background:rgba(0,0,0, 0.5);" >';
                                    echo '<label style="margin:10px;">'.$r->comentario.'</label>';
                                    echo '<br>';
                                    echo '<p style="text-align:right; margin-right:10px;">comentado por '.$r->nombres.'</p>';
                                    echo '</div>';
                            }
                            echo '<form action="comentarios/savecoment.php?id='.$id.'" method="post">'
                         ?>
                            <div class="col-xs-8">
                             <div class="form-group">
                         <textarea class="form-control" name="comentario" rows="3"  type="text" placeholder="Comenta" required="required" ></textarea>
                          </div>
                          <div class="form-group">
                         <input class="form-control" type="text" name="nombre" placeholder="Nombre" required="required">
                          </div>
                           <div class="form-group">
                         <input class="form-control" type="text" name="email" placeholder="Correo (se notificara cuando respondan a su comentario)" required="required">
                          </div>
                                <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Comentar">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
</body>
</html>
