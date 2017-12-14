    <link rel="stylesheet" type="text/css" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet"
  	href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  	<!-- or -->
  	<link rel="stylesheet"
  	href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--<script src="js/jQuery.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/validacion.js"></script>-->
    <div class="encabezadoSesion">
<center><img src="assets/icons/icon.png" class="logoSesion"></center>
 <?php
	 if(isset($_POST['inicio'])){
	 	$correo_usuario =$_POST['correo'];
	 	$pass_usuario = $_POST['pass_user'];
	 	include ('conexion.php');
	 	$con = Conectarse();
	 	$qry= "SELECT password FROM cliente WHERE correo='{$correo_usuario}';";
	 	$result = $con->query($qry);
	 	echo $passBD = $result->fetch_assoc()['password'];
         $qry2= "SELECT id_cliente FROM cliente WHERE correo='{$correo_usuario}';";
	 	$result2 = $con->query($qry2);
         $num_usuario = $result2->fetch_assoc()['id_cliente'];
	 		if ($passBD == $pass_usuario){
                session_start();
                $_SESSION['user']=$num_usuario;
                header("Location: index.php");
	 		}else{
	 			?><script> alert('Usuario o contraseña incorrecta')</script> <?php
	 		}

	 }
?>       
        
        <section>
        <h2>Iniciar Sesion</h2>
        <form  action="" method="POST" id="form-to-valid">
          <input type="email" placeholder="Correo" id="correoSesion" name="correo" required="">
          <input type="password" placeholder="Contraseña" id="contrasenaSesion" name="pass_user" minlength="10" required="">
          <button name="inicio" id="registro-b" type="submit" value="submit">Iniciar</button>
        </form>
        <button onclick="window.location='registro.php'" >Registrar</button>
        
        </section>
        
    </div>