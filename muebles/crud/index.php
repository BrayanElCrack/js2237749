<?php
	//valida la conexion a la base de datos
	session_start();
	require 'conexion.php';
	$where = "";

	
	if(!empty($_POST))
	{
		$valor = $_POST['dato'];
		if(!empty($valor)){
			$where = "WHERE producto LIKE '%$valor%'";
		}
	}

	//crear la consulta
	$sql = "SELECT * FROM productos $where";
	//ejecuta la consulta
	$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.mins"></script>
		<script src="js/bootstrap.min"></script>	
</head>

<body>

	<div class="container">
	<p>&nbsp;</p>
		<div class="row">
			<h2 style="text-align:center">CRUD CON BOOTSTRAP</h2>
		</div>
			
		<div class="row">
			
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<input type="text" id="dato" name="dato" placeholder="producto" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary" />
				</form>
			</div>
		
			
			<div class="row table-responsive">
			<table class="table table-striped">
			<thead>
			<tr>
			<th>CODIGO</th>
			<th>SECCION</th>
			<th>PRODUCTO</th>
			<th>PAIS DE ORIGEN</th>
			<th>VALIDACION DE IMPORTE V/F</th>
			<th>PRECIO</th>
			<th></th>
			<th></th>
			</thead>

			<tbody>

      <tr>
			<?php

			while($row =$resultado->fetch_array(MYSQLI_ASSOC)){
			?>
			<tr>
			<td><?php echo $row['id_producto']?></td>
			<td><?php echo $row['seccion']?></td>
			<td><?php echo $row['producto']?></td>
			<td><?php echo $row['origen']?></td>
			<td><?php echo $row['importado']?></td>
			<td><?php echo $row['precio']?></td>

			</tr>
			<?php } ?>
			</tbody>
			</table>

		</div>
	
<p>&nbsp;</p>
</body>
</html>	
