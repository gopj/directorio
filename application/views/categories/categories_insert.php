
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Administración de categorías</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Administración del directorio</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="/panel/">Inicio</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorías <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="/categories/">Lista</a></li>
                <li><a href="#">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Negocios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Lista</a></li>
                <li><a href="#">Agregar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Lista</a></li>
                <li><a href="#">Agregar</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
</br>
</br>
</br>
</br>
    <div class="container theme-showcase" role="main">
	
		<?php 
			 if($result==1){
			 	echo "<div class='alert alert-success'><strong>Agregado!</strong> La categoría se a agregado con éxito.</div>";
			 }else{
			 	echo "<div class='alert alert-warning'><strong>Hubo un error!</strong> La categoría no se agrego correctamente.</div>";
			 	if(isset($errores)){
			 		echo "<div class='alert alert-danger'><strong>El error al subir la imagen:</strong><pre>".var_dump($errores)."</pre></div>";
			 	}
			 }
		?>

	   <div class="back-leyend">
	        <a href="/categories/"><span class="glyphicon glyphicon-chevron-left"> </span> Regresar</a>
       </div>
       <center><span class="copy">&copy; Copyright 2014. Powered by: <strong><a href="http://www.kidztartdev.com.mx" target="_blank">KidztartDev</a></strong></span></center>
      
    </div> <!-- /container -->

  </body>
  
  
