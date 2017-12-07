<?php

function estaLogeado(){
	if(isset($_SESSION['user'])){
	}else{
    	header("Location: inicio.php");
	}
}

?>