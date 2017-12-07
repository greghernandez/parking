
<?php 
	echo $hora=1;
	echo $minuto=2;
if($minuto<10){
$minuto="0".$minuto;
}
if($hora<10){
$hora="0".$hora;
}
?>
<div id="contenedor">
		<div class="reloj" id="Horas"><?php echo $hora;?></div>
		<div class="reloj" id="Minutos">:<?php echo $minuto;?></div>
		<div class="reloj" id="Segundos">:60</div>
		<div class="reloj" id="Centesimas">:100</div>
		<input type="button" class="boton" id="inicio" value="Start &#9658;" onclick="inicio();">
		<input type="button" class="boton" id="parar" value="Stop &#8718;" onclick="parar();" disabled>
		<input type="button" class="boton" id="continuar" value="Resume &#8634;" onclick="inicio();" disabled>
		<input type="button" class="boton" id="reinicio" value="Reset &#8635;" onclick="reinicio();" disabled>
	</div>

	<style>
*{
	margin: 0;
	padding: 0;
}
#contenedor{
	margin: 10px auto;
	width: 540px;
	height: 115px;
}
.reloj{
	float: left;
	font-size: 80px;
	font-family: Courier,sans-serif;
	color: #363431;
}
.boton{
	outline: none;
	border: 1px solid #363431;
	color: white;
	width: 128px;
	height: 30px;
	text-shadow: 0px -1px 1px black;
	font-size: 20px;
	border-radius: 5px;
	font-family: Helvetica;
	cursor: pointer;
	background-image: linear-gradient(#3aad02,#2c6f05);
}
.boton:active{
	background-image: linear-gradient(#2c6f05,#3aad02);
}
.boton:hover{
	box-shadow: 0px 0px 14px #3aad02;
}


	</style>
<script>

var centesimas = 0;
var segundos = 5;
var minutos = <?php echo $minuto?>;
var horas = <?php echo $hora?>;
function inicio () {
	control = setInterval(cronometro,10);
	document.getElementById("inicio").disabled = true;
	document.getElementById("parar").disabled = false;
	document.getElementById("continuar").disabled = true;
	document.getElementById("reinicio").disabled = false;
}
function parar () {
	clearInterval(control);
	document.getElementById("parar").disabled = true;
	document.getElementById("continuar").disabled = false;
}

function cronometro () {
	if ((segundos ==0)&&(minutos==0)&&(horas==0)){
		parar();
	}
	if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
		horas=horas-1;
		minutos= 2;
		if (horas < 10) { horas = "0"+horas }
		Horas.innerHTML = horas;
	}
	if (minutos == (minutos-1)) {
		minutos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0) ) {
		minutos = minutos-1;
		segundos=5;
		
		if (minutos < 10) { minutos = "0"+minutos }
		Minutos.innerHTML = ":"+minutos;
	}
	if (segundos == (segundos-1)) {
		segundos = -1;
	}
	if (centesimas == 0) {
		segundos=segundos-1;
		if (segundos < 10) { segundos = "0"+segundos }
		Segundos.innerHTML = ":"+segundos;
	}
	if (centesimas == 99) {
		centesimas = -1;
	}
	if (centesimas < 99) {
		centesimas++;
		if (centesimas < 10) { centesimas = "0"+centesimas }
		Centesimas.innerHTML = ":"+centesimas;
	}



}
</script>
