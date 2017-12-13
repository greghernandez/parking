<?php
	require 'funciones.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet"
  	href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  	<!-- or -->
  	<link rel="stylesheet"
  	href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  	<script src="js/jQuery.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/validacion.js"></script>

</head>
<body>

	<div id="cont-registro">
		<div class="">
			<img class="logo" src="assets/icons/icon.png" alt="">
		</div>
		<div class="form-reg">
			<?php
				
				if(isset($_POST['submit'])){
					$nombre = $_POST['nombre'];
					$apellidos = $_POST['apellidos'];
					$email = $_POST['email'];
					$telefono = $_POST['telefono'];
					$tarjeta = $_POST['tarjeta'];
					$cvv = $_POST['cvv'];
					$password = $_POST['password'];

					if(empty($nombre) || empty($apellidos) || empty($email) || empty($telefono) || empty($tarjeta) || empty($cvv) || empty($password)){
						echo "<p class='badge center bg-rojo'> Por favor completa todos los campos</p>";
					}else{
						include ('conexion.php');
    					$con = Conectarse();
						$qry= "INSERT INTO usuario (nombre, apellido, correo, password, telefono, no_tarjeta, cvv) VALUES ('{$nombre}', '{$apellidos}', '{$email}', '{$password}', '{$telefono}', '{$tarjeta}',  '{$cvv}')";

    					echo $qry;
    					$result = $con->query($qry);
    					$qry2= "SELECT no_usuario FROM usuario WHERE correo='{$email}';";
	 					$result2 = $con->query($qry2);
         				$num_usuario = $result2->fetch_assoc()['no_usuario'];
                		session_start();
                		$_SESSION['user']=$num_usuario;
    					header("Location: coches.php?opcion=agregar");

					}

				}
			?>
			<form action="#" method="POST" id="form-to-valid">
				
				<label class="">Nombre:</label>
				<input type="text" name="nombre" placeholder="Nombre" required="">
				
				<label for="">Apellidos:</label>
				<input type="text" name="apellidos" placeholder="Apellidos" required="">
				<label for="">Email:</label>
				<input type="email" name="email" placeholder="Email" required="">
				
				<label for="">Telefono:</label>
				<input type="number" name="telefono" placeholder="Telefono" required>

				<label for="">Pasword</label>
				<input type="password" name="password" placeholder="password" required="">

				<hr>
				
				<p class="center">Datos Fiscales</p>

				<label for="">Estado:</label>
				<input type="text" name="estado" placeholder="Estado">

				<label for="">Municipio:</label>
				<input type="text" name="municipio" placeholder="Municipio">

				<label for="">CP:</label>
				<input type="text" name="cp" placeholder="CP">

				<label for="">RFC:</label>
				<input type="text" name="rfc" placeholder="RFC	">


				<hr>
				<p class="center">Metodo de pago:</p>
				
				<label for="">Numero de tarjeta:</label>
				<input type="number" name="tarjeta" placeholder="Numero de tarjeta" required="">
				
				<label for="">CVV</label>
				<input type="number" name="cvv" placeholder="CVV" required="">

				<label for=""></label>
				<select name="" id="">
					<option value="credito">Credito</option>
					<option value="debito">Debito</option>
				</select>
				
				<div class="center ">
					<button type="submit" value="submit" name="submit" class="btn bg-azul btn-large"> Registrarme</button>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>