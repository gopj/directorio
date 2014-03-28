<html>
<head>
	<title>Lista de Categorias</title>
</head>
<body>

<div class="container">


<?php
	foreach($query as $row){
		print $row->id;
		print $row->nombre;
		print $row->descripcion;
	}
?>
</div>

</body>