<?php
	//valida la conexion a la base de datos
	require 'conexion.php';
	// traer los datos insertados en el formulario
	$id = $_GET['id'];
//crear la consulta sql para eliminar producto

	$sql = "DELETE FROM productos  WHERE id_producto='$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.mins"></script>
		<script src="js/bootstrap.min"></script>	
	
	</head>
	
	<body>
	<p>&nbsp;</p>
		<div class="container">
			<div class="row">
							<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>PRODUCTO ELIMINADO</h3>
						<?php } else { ?>
						<h3>ERROR AL ELIMINAR</h3>
					<?php } ?>
					<br>
					<a href="/desarrollo%20web1/parte%207/sistema.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
			
		</div>
	</body>
</html>
