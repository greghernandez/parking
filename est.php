<?php
require 'header.php';
include ('conexion.php');
session_start();
estaLogeado();//El usuario esta logeado
//busca y guarda los datos de la plaza
$id_est = $_GET['id_est'];
$con = Conectarse();
$qry= "SELECT * FROM estacionamiento WHERE id_est = '{$id_est}';";
$result = $con->query($qry);
$rows;
while ($row=$result->fetch_assoc()) {
    $rows[]=$row;
}
?>
	<div class="nav-title">
		<span class="title big"><?php echo $rows[0]['nom_plaza'] ?></span>	
	</div>
</div>
</div>
    <div id="contenedor">
    
    </div>
<?php ?>

<?php
require 'menu.php';
?>