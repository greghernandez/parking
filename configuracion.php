<?php
require 'header.php';

session_start();
estaLogeado();


$id_usuario = $_SESSION['user']; /*Remplazar con un session ID*/

include ('conexion.php');
    $con = Conectarse();
    $qry= "SELECT * FROM usuario WHERE no_usuario = $id_usuario;";
    $result = $con->query($qry);
    while ($row = mysqli_fetch_array($result)) {
        $nombre_usuario = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
        $no_tarjeta = $row['no_tarjeta'];
    }
    $qry= "SELECT * FROM auto WHERE id_usuario = $id_usuario;";
    $result = $con->query($qry);
    while ($row = mysqli_fetch_array($result)) {
        $placa = $row['placa'];
        $modelo = $row['modelo'];
    }

?>

	<div class="nav-title">
		<span class="title big">Configuración</span>	
	</div>
</div>
</div>
    <div id="contenedor">
    	<div class="card animated bounceInDown center">
    		<a class="bold" href="cerrar.php">Cerrar Sesión</a>
            <!--<img src="assets/icons/logout.png" alt="">-->
    	</div>
    	<div class="card animated bounceInDown">
            <p class="card-title">Información personal:</p>
            <form action="">
                <p><span class="bold">Nombre:  </span><input type="text" value="<?php echo $nombre_usuario; ?>" placeholder="Escribe tu nombre"></p> 
                <p><span class="bold">Apellidos:  </span><input type="text" value="<?php echo $apellido; ?>" placeholder="Escribe tu epellido"></p>
                <hr>
                <p><span class="bold">Email:  </span><input type="email" value="<?php echo $correo; ?>" placeholder="Escribe tu email"></p>
                <p><span class="bold">Teléfono:  </span><input type="text" value="<?php echo $telefono; ?>" placeholder="Escribe tu Teléfono"></p>
                <div class="center">
                    <button class="btn bg-verde btn-large">Guardar cambios</button>
                </div>
            </form>
    	</div>
        <!--
        <div class="card animated bounceInDown">
            <p class="card-title">Coche:</p>
            <p><span class="bold">Modelo:  </span><?php echo $modelo ?></p>
            <p><span class="bold">Placa:  </span><?php echo $placa ?></p>
        </div>-->
        <div class="card animated bounceInDown">
            <p class="card-title">Contraseña:</p>
            <input type="password" name="passActual" placeholder="Ingresa tu contraseña actual">
            <input type="password" name="passNueva" placeholder="Ingresa la nueva contraseñas">
            <div class="center">
                <button class="btn bg-verde btn-large"> Actualizar contraseña</button>
            </div>
        </div>
    </div>
<?php
require 'menu.php';
?>