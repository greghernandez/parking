    <?php
    require 'header.php';
    $tiempo=$_GET['Tiempo'];
    switch ($tiempo) {
        case 0.15:
            $minuto=15;
            $hora=0;
            break;
        case 0.30:
            $minuto=30;
            $hora=0;
            break;
        case 0.45:
            $minuto=45;
            $hora=0;
            break;
        case 1:
            $minuto=0;
            $hora=1;
            break;
        case 1.15:
            $minuto=15;
            $hora=1;
            break;
        case 1.30:
            $minuto=30;
            $hora=1;
            break;
        case 1.45:
            $minuto=45;
            $hora=1;
            break;
        case 2:
            $minuto=0;
            $hora=2;
            break;
        case 2.15:
            $minuto=15;
            $hora=2;
            break;
        case 2.30:
            $minuto=30;
            $hora=2;
            break;
        case 2.45:
            $minuto=45;
            $hora=2;
            break;
        case 3:
            $minuto=0;
            $hora=3;
            break;
        case 3.15:
            $minuto=15;
            $hora=3;
            break;
        case 3.30:
            $minuto=30;
            $hora=3;
            break;
        case 3.45:
            $minuto=45;
            $hora=3;
            break;
        case 4:
            $minuto=0;
            $hora=4;
            break;
            
    }
if($minuto<10){
    $minuto="0".$minuto;
}
if($hora<10){
    $hora="0".$hora;
}
    ?>
        <div class="nav-title">
            <span class="title">Mis tickets</span>  
        </div>
    </div>
    </div>
        <!--Tabs-->
        <div class="tabs">
            <button class="tab-opt">
                Activos
            </button>
            <button class="tab-opt">
                Historial
            </button>
        </div>
        
        <!--Contenedor-->
        <div class="cont-tabs">
            <div class="card animated bounceInDown">
                <p class="card-title">Parkimetro #54</p>
                <div class="ticket-cont">
                    <div class="icon-ticket">
                        <img class="img-ticket" src="assets/icons/parkimeter.png" alt="">
                    </div>
                    <div class="col-4 center">
                        <p><span class="bold">Zona: </span>Centro</p>
                        <p><span class="bold">Calle: </span>Av. Juarez</p>
                    </div>
                    <div class="col-4 center">
                        <p class="bold">Tiempo Restante: <br> <span class="time">
                            <div class="cont-reloj">
                            <div class="reloj" id="Horas"><?php echo $hora ?></$php></div>
		                    <div class="reloj" id="Minutos">:<?php echo $minuto ?></div>
		                    <div class="reloj" id="Segundos">:60</div>
                            </div>
                            
                            </span></p>
                    </div>
                </div>
                    <div class="col-12 center">
                        <a class="btn bg-verde center" href="ticket.php">Extender Tiempo</a>
                    </div>

            </div>
            
        </div>
<script>
window.addEventListener('load', inicio, true)
var centesimas = 0;
var segundos = 60;
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
		minutos= 61;
		if (horas < 10) { horas = "0"+horas }
		Horas.innerHTML = horas;
	}
	if (minutos == (minutos-1)) {
		minutos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0) ) {
		minutos = minutos-1;
		segundos=61;
		
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
    <?php
    require 'menu.php';
    ?>