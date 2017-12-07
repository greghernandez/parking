<?php
/*
	Coches
*/

require 'header.php';

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
			echo "siiiiii";
		}else{
		?>
		<div class="card animated bounceInDown">
			<form action="#" method="POST">
				<p class="card-title">Ingresa la información del coche:</p>
            	<p><span class="bold">Placa:  </span><input type="text" value="<?php echo ""; ?>" placeholder="Escribe la placa"></p> 
            	<p><span class="bold">Modelo:  </span><input type="text" value="<?php echo ""; ?>" placeholder="Escribe el modelo del coche"></p>
            	<p><span class="bold">Color:  </span><input type="text" value="<?php echo ""; ?>" placeholder="Escribe  el color del coche"></p>
            	<p><span class="bold">Fecha:  </span><input type="text" value="<?php echo ""; ?>" placeholder="Escribe la fecha del auto"></p>
            	<button class="btn bg-azul" type="submit" name="submit" value="submit">Guardar Coche</button>
			</form> 

		</div>
		<?php
		}//cierra else
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