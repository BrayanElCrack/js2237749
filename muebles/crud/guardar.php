<?php
	//valida la conexion a la base de datos
	require 'conexion.php';
	// traer los datos insertados en el formulario
	$id = $_POST['codigo'];
	$seccion = $_POST['seccion'];
	$producto = $_POST['producto'];
	$origen = $_POST['origen'];
	$importe = isset($_POST['importe']) ? $_POST['importe'] : falso;
	$precio = $_POST['precio'];
	
//crear la consulta sql para insertar el nuevo producto

	$sql = "INSERT INTO productos (id_producto, seccion, producto, origen, importado, precio) VALUES ('$id', '$seccion', '$producto', '$origen', '$importe', '$precio')";
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
						<h3>PRODUCTO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					<br>
					<a href="/desarrollo%20web1/parte%207/sistema.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
			
		</div>
	</body>
</html>
