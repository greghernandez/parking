<?php
require 'header.php';

session_start();
estaLogeado();


$id_usuario = $_SESSION['user']; /*Remplazar con un session ID*/

include ('conexion.php');
    $con = Conectarse();
    $qry= "SELECT * FROM cliente WHERE id_cliente = $id_usuario;";
    $result = $con->query($qry);
    while ($row = mysqli_fetch_array($result)) {
        $nombre_usuario = $row['nombre'];
        $apellido = $row['apellido'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
        $estado = $row['estado'];
        $municipio = $row['municipio'];
        $direccion = $row['direccion'];
        $cp = $row['cp'];
        $rfc =$row['rfc'];
        //$no_tarjeta = $row['no_tarjeta'];
    }
    $qry= "SELECT * FROM auto WHERE id_cliente = $id_usuario;";
    $result = $con->query($qry);
    while ($row = mysqli_fetch_array($result)) {
        $placa = $row['placa'];
        $modelo = $row['modelo'];
    }
    if(isset($_POST['actualizar'])){
        
        $nombre_usuario = $_POST['nombre'];
        $apellido = $_POST['apellidos'];
        $correo = $_POST['email'];
        $telefono = $_POST['telefono'];
        $estado = $_POST['estado'];
        $municipio = $_POST['municipio'];
        $direccion = $_POST['direccion'];
        $cp = $_POST['cp'];
        $rfc =$_POST['rfc'];
        $act="UPDATE `cliente` SET `nombre`='{$nombre_usuario}',`apellido`='{$apellido}',`correo`='{$correo}',`telefono`='{$telefono}',`estado`='{$estado}',`municipio`='{$municipio}',`cp`='{$cp}',`rfc`='{$rfc}',`direccion`='{$direccion}' WHERE id_cliente = '{$id_usuario}'";
        $actu = $con->query($act);
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
            <form action="" method="POST" id="form-to-valid">
                <p><span class="bold">Nombre:  </span><input type="text" value="<?php echo $nombre_usuario; ?>"  placeholder="Escribe tu nombre" name="nombre" requiered=""></p> 
                <p><span class="bold">Apellidos:  </span><input type="text" value="<?php echo $apellido; ?>" placeholder="Escribe tu epellido" name="apellidos" requiered=""></p>
                <hr>
                <p><span class="bold">Email:  </span><input type="email" value="<?php echo $correo; ?>" placeholder="Escribe tu email" name="email" requiered=""></p>
                <p><span class="bold">Teléfono:  </span><input type="text" value="<?php echo $telefono; ?>" placeholder="Escribe tu Teléfono" name="telefono" requiered=""></p>
                <hr>
                <P><span class="bold">Estado: </span></P>
                <input type="text" value="<?php echo $estado; ?>" placeholder="" name="estado" required="">
                <P><span class="bold">Municipio: </span></P>
                <input type="text" value="<?php echo $municipio; ?>" placeholder="" name="municipio" required="">
                <P><span class="bold">Dirección: </span></P>
                <input type="text" value="<?php echo $direccion; ?>" placeholder="" name="direccion" required="">
                <P><span class="bold">CP: </span></P>
                <input type="number" value="<?php echo $cp; ?>" placeholder="" name="cp" required="">
                <P><span class="bold">RFC: </span></P>
                <input type="text" value="<?php echo $rfc; ?>" placeholder="" name="rfc" required="">
                <div class="center">
                    <button type="submit" name="actualizar" value="" class="btn bg-verde btn-large">Guardar cambios</button>
                </div>
            </form>
    	</div>
        <!--
        <div class="card animated bounceInDown">
            <p class="card-title">Coche:</p>
            <p><span class="bold">Modelo:  </span><?php echo $modelo ?></p>
            <p><span class="bold">Placa:  </span><?php echo $placa ?></p>
        </div>-->
        <!--
        <div class="card animated bounceInDown">
            <form  id="form-to-valid">
                <p class="card-title">Contraseña:</p>
                <input type="password" name="password" placeholder="Ingresa tu contraseña actual" id="pass" required="">
                <input type="password" name="valPassword" placeholder="Ingresa la nueva contraseñas" id="newpass" required="">
                <div class="center">
                    <button class="btn bg-verde btn-large" onclick="actualizarPass();"> Actualizar contraseña</button>
                </div>
            </form>
        </div>
        -->
    </div>
<?php
require 'menu.php';
?>