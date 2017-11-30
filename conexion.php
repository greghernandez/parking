<?php
function Conectarse(){
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="parking";
	$conexion=new mysqli($servidor, $usuario, $password, $bd);	
	if($conexion->connect_errno>0){
			echo "Error conexion bd";
		}else{
			return $conexion;
	}
}

?>



