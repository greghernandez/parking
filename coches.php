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
            	<p><span class="bold">Placa:  </span><input type="text"  name="placa" value="<?php echo ""; ?>" placeholder="Escribe la placa"></p> 
            	<p><span class="bold">Modelo:  </span><input type="text"  name="modelo" value="<?php echo ""; ?>" placeholder="Escribe el modelo del coche" ></p>
            	<p><span class="bold">Color:  </span><input type="text"  name="color" value="<?php echo ""; ?>" placeholder="Escribe  el color del coche"></p>
            	<p><span class="bold">Fecha:  </span><input type="text"  name="fecha" value="<?php echo ""; ?>" placeholder="Escribe la fecha del auto"></p>
            	<button class="btn bg-azul" type="submit" name="submit" name="" value="submit">Guardar Coche</button>
			</form> 

		</div>
		<?php
		break;
	case 'administrar':
		?>
		<div class="card animated bounceInDown">
			
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