
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
            <li class="active"><a href="#">Inicio</a></li>
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorías <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class=""><a href="#">Lista</a></li>
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

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Panel de administración!</h1>
        <p>Panel para administrar el sistema.</p>
      </div>
	<br/>
	
	   <div class="page-header">
        <h1>Secciones</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Categorias</h3>
            </div>
            <div class="panel-body">
             	Panel de administración de categorías.
             	<a href ="/categories/" class="btn btn-default"><span class="glyphicon glyphicon-info-sign"> </span> Panel</a>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Negocios</h3>
            </div>
            <div class="panel-body">
              Panel de administración de negocios.
              <a href ="/companies/" class="btn btn-success"><span class="glyphicon glyphicon-info-sign"> </span> Panel</a>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Usuarios</h3>
            </div>
            <div class="panel-body">
              Panel de administración de usuarios.
              <a href ="/users/" class="btn btn-warning"><span class="glyphicon glyphicon-info-sign"> </span> Panel</a>
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>


    </div> <!-- /container -->

  </body>
