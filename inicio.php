    <link rel="stylesheet" type="text/css" href="css/main.css">

    <div class="encabezadoSesion">
<center><img src="assets/icons/icon.png" class="logoSesion"></center>
 <?php
	 if(isset($_POST['inicio'])){
	 	$correo_usuario =$_POST['correo'];
	 	$pass_usuario = $_POST['pass_user'];
	 	include ('conexion.php');
	 	$con = Conectarse();
	 	$qry= "SELECT password FROM usuario WHERE correo='{$correo_usuario}';";
	 	$result = $con->query($qry);
	 	$passBD = $result->fetch_assoc()['password'];
	 		if ($passBD == $pass_usuario){
	 			?><script>window.location.assign("index.php?correo_usuariof=<?php echo $correo_usuariof;?>");</script> <?php
	 		}else{
	 			?><script> alert('Usuario o contraseña incorrecta')</script> <?php
	 		}

	 }
?>       
        
        <section>
        <h2>Iniciar Sesion</h2>
        <form  action="" method="POST">
        <input type="text" placeholder="Correo" id="correoSesion" name="correo">
        <input type="password" placeholder="Contraseña" id="contrasenaSesion" name="pass_user">
        <button name="inicio" id="registro-b">Iniciar</button>
        </form>
        <button onclick="registro.php" >Registrar</button>
        
        </section>
        
    </div>