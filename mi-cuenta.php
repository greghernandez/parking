<?php
require 'header.php';
?>
	<div class="nav-title">
		<span class="title">Mi cuenta</span>	
	</div>
</div>
</div>
<?php
    session_start();
    echo $_SESSION['user'];
    estaLogeado();//El usuario esta logeado
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
        $no_tarjeta = $row['no_tarjeta'];
    }
    $qry= "SELECT * FROM auto WHERE id_cliente = $id_usuario and estado = 0;";
    $result = $con->query($qry);
    while ($row = mysqli_fetch_array($result)) {
        $placa = $row['placa'];
        $modelo = $row['modelo'];
    }
?>
    <div id="contenedor">
    	<div class="center img-usuario animated bounceInDown">
    		<img src="assets/user/user.png" class="img-perfil" alt="">
    	</div>
    	<div class="card animated bounceInDown">
            <p class="card-title">Información personal:</p>
            <p><span class="bold">Nombre:  </span><?php echo $nombre_usuario; ?></p> 
            <p><span class="bold">Apellidos:  </span><?php echo $apellido ?></p>
            <hr>
            <p><span class="bold">Email:  </span><?php echo $correo?></p>
            <p><span class="bold">Telefono:  </span><?php echo $telefono ?></p>
    	</div>
        <div class="card animated bounceInDown">
            <p class="card-title">Coche Activo:</p>
            <p><span class="bold">Modelo:  </span><?php echo $modelo ?></p>
            <p><span class="bold">Placa:  </span><?php echo $placa ?></p>
        </div>
        <div class="card animated bounceInDown center">
            <p class="card-title">Coches</p>
            <a href="coches.php?opcion=agregar" class="btn bg-verde">Agregar Coche</a>
            <a href="coches.php?opcion=administrar" class="btn bg-verde">Administrar Coches</a>
        </div>

    </div>
<?php
require 'menu.php';
?>