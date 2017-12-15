<?php
/*
	Coches
*/

require 'header.php';
//require 'funciones.php';

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
        $rfc = $row['rfc'];
        //$no_tarjeta = $row['no_tarjeta'];
    }

?>
	<div class="nav-title">
		<span class="title big">Factura</span>
	</div>	
</div>
    <div id="contenedor">
		<div class="card">
				<p class="card-title">Factura</p>
				<p><span class="bold">Nombre: </span>  <?php echo $nombre_usuario; ?></p>	
				<p><span class="bold">Apellido: </span>  <?php  echo $apellido; ?></p>
				<p><span class="bold">Estado: </span>  <?php  echo $estado; ?></p>
				<p><span class="bold">Municipio: </span>  <?php  echo $municipio; ?></p>
				<p><span class="bold">Dirección: </span>  <?php  echo $direccion; ?></p>
				<p><span class="bold">CP: </span>  <?php  echo $cp; ?></p>
				<p><span class="bold">RFC: </span> <?php  echo $rfc; ?></p>
				<hr>
				<div class="center">
					<p><span class="bold">Concepto: </span> Pago de Parquimetro</p>
					<p><span class="bold">Monto a pagar: </span><?php echo "$".$_GET['monto']." MXN"; ?></p>
					<button class="btn btn-large bg-azul noprint" onclick="window.print();">Imprimir factura</button>
				</div>
		</div>
	</div>
<?php
require 'menu.php';
?>