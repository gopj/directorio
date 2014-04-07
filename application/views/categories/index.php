
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

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Administración de categorías!</h1>
        <p>Aquí se podrán administrar las categorías.</p>
      </div>
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addCategorie">
		<span class="glyphicon glyphicon-plus-sign"> </span> Agregar
	</button>
	<br/>
	<br/>
	<table class="table table-bordered">
		<thead>
			<tr><th>Nombre</th><th>Descripción</th><th>Imagen</th><th>Editar</th><th>Eliminar</th></tr>
		</thead>
		<tbody>
			<?php
				foreach($query as $row){
					echo "<tr><td>".$row->nombre."</td><td>".$row->descripcion."</td><td><img src='/img/categorias/".$row->imagen."' width='100px' alt='Categoria' /></td><td><a href='editar/' class='btn btn-warning'>Editar</a></td><td><a href='eliminar/' class='btn btn-danger'>Eliminar</a></td></tr>";
				}
			?>
		</tbody>
		<tfoot>
			<tr><td>Nombre</td><td>Descripción</td><td>Imagen</td><td>Editar</td><td>Eliminar</td></tr>
		</tfoot>
	</table>
		<p>Total de registros: <strong><?php echo $nRows; ?></strong></p>
	   <div class="back-leyend">
	        <a href="/panel/"><span class="glyphicon glyphicon-chevron-left"> </span> Regresar</a>
       </div>
       <center><span class="copy">&copy; Copyright 2014. Powered by: <strong><a href="http://www.kidztartdev.com.mx" target="_blank">KidztartDev</a></strong></span></center>
      
    </div> <!-- /container -->

  </body>
  
  
  <!-- Modal para agregar categorías -->
<div class="modal fade" id="addCategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	 <form class="form-horizontal" method="post" name="" id="" action="/categories/insert_Categories/" enctype="multipart/form-data">
      		<div class="modal-header">
      			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			      <h4 class="modal-title" id="myModalLabel">Agregar categoría</h4>
		     </div>
		      <div class="modal-body">
        			<div class="form-group">
        				<label for="nombre" class="col-sm-2 control-label">Nombre</label>
        				<div class="col-sm-6">
	        				<input type="text" id="nombre" class="form-control" name="nombre" placeholder="Escribe el nombre" required="required"/>
	        			</div>
    	    		</div>
    	    		<div class="form-group">
        				<label for="descripcion" class="col-sm-2 control-label">Descripción</label>
        				<div class="col-sm-6">
	        				<textarea id="descripcion" class="form-control" rows="10" name="descripcion" placeholder="Escribe la descripcion" required="required"></textarea>
	        			</div>
    	    		</div>
    	    		<div class="form-group">
        				<label for="imagen" class="col-sm-2 control-label">Imagen</label>
        				<div class="col-sm-6">
	        				<input type="file" name="imagen" id="imagen" class="form-control"/>
	        			</div>
    	    		</div>
		      </div>
		      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <button type="submit" class="btn btn-primary">Guardar</button>
		      </div>
	      </form>
    </div>
  </div>
</div>
