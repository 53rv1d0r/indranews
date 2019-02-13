<?php
session_start();


if (!isset($_SESSION['admin'])) {

header('location: login.php?access%denegado');

}

include('../conexion.php');


	$sql=("SELECT * FROM post where id='".$_GET['id']."' ");
	$req=mysql_query($sql);





 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

   <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a style="color: black;" class="navbar-brand" href="../index.php">Indra News</a>

                      <!--  <a style="color: black;" class="navbar-brand" href="validar/validar.php"></a>-->

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--<li>
                        <a style="color: black;" href="../index.php">Inicio</a>
                    </li>
                    <li>
                        <a style="color: black;" href="../about.php">Agregar Nuevo post</a>
                    </li>-->

                    <li>
                        <a style="color: black;" href="logout.php">Salir</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br><br><br><br>


    	<h2 class="post-tittle" style="text-align: center;">Editar</h2><br>

    	<?php



    		while ($result=mysql_fetch_object($req)) {?>


    			          <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
              			<div class="form-group">

              			<form action="editardb.php?id=<?php  echo $result->id;?>" method="post">
              			<label>Titulo</label>
                        <input class="form-control" type="text" name="titulo" class="post-title" value="<?php  echo $result->titulo;?>"> </input>
                         </div>
                         <label>Sub titulo</label>
                       <div class="form-group">
            <input class="form-control" type="text" name="sub-titulo" class="post-subtitle" value="<?php  echo $result->description;?>"></input>
                        </div>



                        <label>Video</label>
                       <div class="form-group">
    <textarea class="form-control" name="video"  rows="2" type="text" class="post-subtitle" value="" ><?php  echo $result->video;?></textarea>
                        </div>



                        <label>Contenido</label>
                       <div class="form-group">
                        <textarea class="form-control" name="content" rows="5" type="text" class="post-subtitle" ><?php  echo $result->contenido;?></textarea>
                        </div>

                    <label>Fecha</label>
                    <div class="form-group">
                    <input type="date" name="fecha" value="<?php  echo $result->fecha;?>"> </input>
                	</div>
                	<center>
                	<div class="form-group">
                	<input class="btn btn-lg btn-primary btn-block" type="submit" name="editar" value="Editar">
                	</div>
                	</center>
               </form>


                        </div>
                    </div>
                </div>
                </div>


    	<?php
      	}

    	?>








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
