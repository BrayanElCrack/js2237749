<?php
	require 'funciones/conexion.php';
	require 'funciones/funciones.php';


  if(isset($_GET["id"]) AND isset($_GET['val'])) {  
    $idUsuario = $_GET['id'];
    $token = $_GET['val'];
    $mensaje = validaIdToken($idUsuario, $token);
  }
?>

<html>
	<head>
	
		<title>activacion</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
	</head>
	<body>
 	<div class="container">
			<div class="jumbotron">
				
				<?php echo $mensaje; ?>
				
				<br />
				<p><a class="btn btn-primary btn-lg" href="index.php" role="button">Iniciar Sesi&oacute;n</a></p>
			</div>
		</div>
 </body>
</html>