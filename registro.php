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
					$tipo = $_POST['tipo'];
					if ($tipo == 0) {
						$tipo = "credito";
					}else{
						$tipo = "debito";
					}
					$password = $_POST['password'];
					$estado = $_POST['estado'];
					$municipio = $_POST['municipio'];
					$cp = $_POST['cp'];
					$rfc = $_POST['rfc'];

					if(empty($nombre) || empty($apellidos) || empty($email) || empty($telefono) || empty($password) || empty($estado) || empty($municipio) || empty($cp) || empty($rfc)){
						echo "<p class='badge center bg-rojo'> Por favor completa todos los campos</p>";
					}else{
						include ('conexion.php');
    					$con = Conectarse();
						$qry= "INSERT INTO cliente (nombre, apellido, correo, password, telefono, estado, municipio, cp, rfc) VALUES ('{$nombre}', '{$apellidos}', '{$email}', '{$password}', '{$telefono}', '{$estado}',  '{$municipio}', '{$cp}', '{$rfc}')";

    					echo $qry;
    					$result = $con->query($qry);
    					$qry2= "SELECT id_cliente FROM cliente WHERE correo ='{$email}';";
	 					$result2 = $con->query($qry2);
         				$num_usuario = $result2->fetch_assoc()['id_cliente'];
                		session_start();
                		$_SESSION['user']=$num_usuario;
    					//header("Location: coches.php?opcion=agregar");

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
				
				<p class="center bold">Datos Fiscales</p>

				<label for="">Estado:</label>
				<input type="text" name="estado" placeholder="Estado" required="">

				<label for="">Municipio:</label>
				<input type="text" name="municipio" placeholder="Municipio" required="">

				<label for="">Dirección:</label>
				<input type="text" name="direccion" placeholder="Dirección" required="">

				<label for="">CP:</label>
				<input type="text" name="cp" placeholder="CP" required="">

				<label for="">RFC:</label>
				<input type="text" name="rfc" placeholder="RFC	" required="">


				<hr>
				<p class="center bold">Metodo de pago:</p>
				
				<label for="">Numero de tarjeta:</label>
				<input type="number" name="tarjeta" placeholder="Numero de tarjeta" required="">
				
				<label for="">CVV</label>
				<input type="number" name="cvv" placeholder="CVV" required="">

				<label for="">Tipo:</label>
				<select name="tipo" id="" required="">
					<option value="credito" value="0">Credito</option>
					<option value="debito" value="1">Debito</option>
				</select>
				
				<div class="center ">
					<button type="submit" value="submit" name="submit" class="btn bg-azul btn-large"> Registrarme</button>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>