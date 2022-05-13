<?php
	session_start();
	require 'funciones/conexion.php';
	require 'funciones/funciones.php';

	//validar que el usuario inicio sesion
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, nombre FROM datos_usuario WHERE id ='$idUsuario'";
	$result = $mysqli->query($sql);
	$row =$result->fetch_assoc();

	if(isset($_POST["btn-login"]))
	{
        //validar si no activo la casilla de recordacion por lo que la cookie no debe ser creada
                    if(!isset($_COOKIE["datos_usuario"])){
              include("index.php");  
            }
        
		if(isset($_POST["recordar"])){
                //crear la cookie por 15 dias solo para el usuario logeado
               setcookie("datos_usuario",$_POST["usuario"], time()+1296000);
            }
	}

?>
<?php
	//valida la conexion a la base de datos donde estan los productos almacenados

	require 'crud/conexion.php';
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
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bienvenido</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery-3.6.0.mins"></script>
		<link rel="stylesheet" href="../muebles/css/styles.css">
	</head>
	
	<body>
	<p>&nbsp;</p>
	<header class="header">
        <img class="header__img" src="\muebles\img\logo.jpg" alt="logo THE HOME">
        <h1>THE HOME</h1>
        <div class="header__menu">
            <div class="header__menu--profile">
                <img src="./img/user-icon.png" alt="">
                <p>Menu</p>
            </div>
            <ul>
                <li><a href="logout.php">cerrar sesion</a></li>
                <li><a href="catalogo.php">catalogo</a></li>
            </ul>
        </div>
    </header>
		<div class="container">
			<div class="row">
				<h4><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h4>
				<br />
			</div>
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
							
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='/index.php'>Inicio</a></li>			
						</ul>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='#'>Contactenos</a></li>			
						</ul>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='#'>Mas menu</a></li>			
						</ul>
						
					</div>
				</div>
			</nav>		
		</div>
	</div>
						
		<?php if($_SESSION['tipo_usuario']==1) { ?>
		<div class="container">
		<div class="row">
		<h2 style="text-align:center">GESTION DE PRODUCTOS</h2>
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
			
			<td><a href="crud/actualizar.php?id=<?php echo $row['id_producto'];?>">	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
			<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
			<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
			</svg><i class="bi bi-pencil-square"></i></a></td>

			<td><a href="crud/eliminar.php?id=<?php echo $row['id_producto'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
			<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg><i class="bi bi-trash-fill"></i></a></td>
			</tr>
			<?php } ?>
			</tbody>
			</table>

		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6"><a href="crud/insertar.php" class="btn btn-primary" >AGREGAR PRODUCTO</a></div>
			<div>
			<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6"><a href="crud/informe.php" class="btn btn-primary" >GENERAR INFORME</a></div>
			<div>
<p>&nbsp;</p>
		<?php } ?>

		<?php if($_SESSION['tipo_usuario']==2) { ?>
		<div class="container">
		<div class="row">
		<h2 style="text-align:center">GESTION DE PRODUCTOS</h2>
		</div>
		<div class="row">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" id="dato" name="dato" placeholder="producto" />
		<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary" />
		</form>
		</div>
		<?php include('catalogo.php') ?>
	<p>&nbsp;</p>
	<?php } ?>
	</body>
</html>		

class Servicio{ 
    constructor(producto,categoria){
        this.producto=producto;
        this._categoria=categoria;
    }    
    get producto(){
        return this.producto;
    }
    set producto(producto){
       this.producto=producto;     
    }
    get categoria(){
        return this.producto;
    }
    set categoria(categoria){
       this._categoria=categoria;     
    }   
}