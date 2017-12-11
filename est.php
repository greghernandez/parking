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
        <?php
            $qry= "SELECT * FROM cajones WHERE id_est = '{$id_est}';";
            $result = $con->query($qry);
            foreach ($result as $key => $value) {
                
        ?>
        <a href="cajon.php?id_caj=<?php echo $value['id_caj']; ?>&id_est=<?php echo $rows[0]['id_est']; ?>"><div id="cajon"><center><div id="cajon-h1">Cajon</div> 
                <h1><?php echo $value['num']; ?></h1></center>
          </div></a>
        <?php } ?>
          
        
    </div>
<?php ?>

<?php
require 'menu.php';
?>