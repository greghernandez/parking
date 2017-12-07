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
		?>
		<div class="card animated bounceInDown">
			
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