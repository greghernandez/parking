<?php
/*
	Coches
*/

require 'header.php';
//require 'funciones.php';

session_start();

estaLogeado();

$opcion = $_GET['opcion'];

?>
	<div class="nav-title">
		<span class="title big"><?php echo $opcion . " coches"; ?></span>	
	</div>
</div>
</div>
    <div id="contenedor">
<?php
switch ($opcion) {
	case 'agregar':

		//Guardar Coche


		if (isset($_POST['submit'])) {
			//Tomamos los valores enviados

			$placa = $_POST['placa'];
			$modelo = $_POST['modelo'];
			$color = $_POST['color'];
			$fecha = $_POST['fecha'];

			if (empty($placa) || empty($modelo) || empty($color) || empty($fecha)) {
				echo "<p class='badge center bg-rojo animated bounceInDown'> Por favor completa todos los campos</p>";
			}else{
			$id_usuario = $_SESSION['user'];
				include ('conexion.php');
    					$con = Conectarse();
						$qry= "INSERT INTO `auto`(`modelo`, `date`, `color`, `placa`, `estado`, `id_usuario`) VALUES ('{$modelo}', '{$fecha}', '{$color}', '{$placa}', 0, ".$id_usuario.")";

    					$result = $con->query($qry);
    					//echo $qry;
    					echo "<p class='badge center bg-verde animated bounceInDown'> Coche guardado</p>";
			}



		}
		?>
		<div class="card animated bounceInDown">
			<form action="#" method="POST">
				<p class="card-title">Ingresa la información del coche:</p>
            	<p><span class="bold">Placa:  </span><input type="text"  name="placa" value="<?php echo ""; ?>" placeholder="Escribe la placa" required=""></p> 
            	<p><span class="bold">Modelo:  </span><input type="text"  name="modelo" value="<?php echo ""; ?>" placeholder="Escribe el modelo del coche"  required=""></p>
            	<p><span class="bold">Color:  </span><input type="text"  name="color" value="<?php echo ""; ?>" placeholder="Escribe  el color del coche" required=""></p>
            	<p><span class="bold">Fecha:  </span><input type="text"  name="fecha" value="<?php echo ""; ?>" placeholder="Escribe la fecha del auto" required=""></p>
            	<button class="btn bg-azul" type="submit" name="submit" name="" value="submit">Guardar Coche</button>
			</form> 

		</div>
		<?php
		break;
	case 'administrar':
		include ('conexion.php');
    	$con = Conectarse();
		$qry= "SELECT * FROM auto WHERE id_usuario = '".$_SESSION['user']."'";
    	$result = $con->query($qry);  

   		while ($row = mysqli_fetch_array($result)){  
   			?>
   			<div class="card animated bounceInDown">
				<div class="col-6">
					<p><span class="bold">Modelo: </span><?php echo $row['modelo'];?></p>
					<p><span class="bold">Placa: </span><?php echo $row['placa'];?></p>
					<p>Estado: <?php echo $row['estado'];?></p>
					<button class="btn bg-verde" onclick="activarCoche('<?php echo $row["placa"]?>');" type="">Activar</button>
					<button class="btn bg-azul" type="" onclick="window.location='coches.php?opcion=editar&placa=<?php echo $row["placa"]?>'">Editar</button>
   				</div>
			</div>
   			<?php
		}  
		?>
		<?php
		break;
	case 'activar':

		$placa = $_GET['placa'];
		include ('conexion.php');
    	$con = Conectarse();
		$qry= "UPDATE `auto` SET `estado`= 0 WHERE placa = '{$placa}'";
    	$result = $con->query($qry);

		break;
	case 'editar':
	include ('conexion.php');
    $con = Conectarse();
		if (isset($_POST['submit'])) {
			//Tomamos los valores enviados

			$placa = $_POST['placa'];
			$modelo = $_POST['modelo'];
			$color = $_POST['color'];

			if (empty($placa) || empty($modelo) || empty($color)) {
				echo "<p class='badge center bg-rojo animated bounceInDown'> Por favor completa todos los campos</p>";
			}else{
			$id_usuario = $_SESSION['user'];
						$qry= "UPDATE `auto` SET `modelo`= '{$modelo}', `color`='{$color}',`placa`= '{$placa}' WHERE placa = '{$_GET['placa']}' and id_usuario = '{$id_usuario}' ";

    					$result = $con->query($qry);
    					//echo $qry;
    					echo "<p class='badge center bg-verde animated bounceInDown'> Coche guardado</p>";
			}
		}
	//sacamos los datos de la db
	$qry= "SELECT * FROM auto WHERE placa = '{$_GET['placa']}'";
    $result = $con->query($qry);
    while ($row = mysqli_fetch_array($result)) {
        $placa = $row['placa'];
        $modelo = $row['modelo'];
        $color = $row['color'];
    }
	?>
		<div class="card animated bounceInDown">
			<form action="" method="POST">
				<p class="card-title">Edita la información del <?php echo $modelo ?></p>
            	<label><span class="bold">Placa:  </span></label>
            		<input type="text"  name="placa" value="<?php echo $placa; ?>" placeholder="Escribe la placa"> 
            	<label><span class="bold">Modelo:  </span></label>
            		<input type="text"  name="modelo" value="<?php echo $modelo; ?>" placeholder="Escribe el modelo del coche" >
            	<label><span class="bold">Color:  </span><label>
            		<input type="text"  name="color" value="<?php echo $color; ?>" placeholder="Escribe  el color del coche">
            	<button class="btn bg-azul" type="submit" name="submit" name="" value="submit">Guardar Coche</button>
			</form> 
		</div>
	<?php
		break;
	default:
		echo "La opcion no es valida";
		break;
}
?>
	</div>
<?php
require 'menu.php';
?>