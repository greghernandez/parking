    <?php
    require 'header.php';
    if(isset($_GET['Tiempo'])){
    $tiempo=$_GET['Tiempo'];
    $locacion=$_GET['locacion'];
    switch ($tiempo) {
        case 0.15:?>
            <?php
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
            <script>
                var minutos=<?php echo $minuto ?>;
                var horas=<?php echo $hora ?>;
                locacion=<?php echo $locacion ?>;
                localStorage.setItem('minutos',minutos);
                localStorage.setItem('horas',horas);
                localStorage.setItem('locacion',locacion);
            </script>
        <?php
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
                        <p><span class="bold" id="total">Total: $<script>document.write(localStorage.getItem('total'))</script> MXN</span></p>
                    </div>
                    <div class="col-4 center">
                        <p class="bold">Tiempo Restante: <br> <span class="time">
                            <div class="cont-reloj">
                                <div class="reloj" id="Horas"><script>document.write(localStorage.getItem('horas'))</script></div>
		                    <div class="reloj" id="Minutos">:<script>document.write(localStorage.getItem('minutos'))</script></div>
		                    <div class="reloj" id="Segundos">:00</div>
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
var segundos = 0;
var minutos = localStorage.getItem('minutos');
var horas = localStorage.getItem('horas');
function inicio () {
	control = setInterval(cronometro,10);
}
function parar () {
	clearInterval(control);
    <?php
        $locacion="document.write(localStorage.getItem('locacion'))";
        include ('conexion.php');
        $con = Conectarse();
        $qry = "UPDATE  parquimetro SET estado=1 WHERE locacion= '{$locacion}'";
        mysqli_query($con, $qry);
    ?>
    alert("Se termino tu tiempo.");
}

function cronometro () {
	if ((segundos ==0)&&(minutos==0)&&(horas==0)){
		parar();
	}
	if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
		horas=horas-1;
        localStorage.setItem('horas',horas);
		minutos= 60;
		if (horas < 10) { horas = "0"+horas }
		Horas.innerHTML = horas;
	}
	if (minutos == (minutos-1)) {
		minutos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0) ) {
		minutos = minutos-1;
        localStorage.setItem('minutos',minutos);
		segundos=60;
		
		if (minutos < 10) { minutos = "0"+minutos }
		Minutos.innerHTML = ":"+minutos;
	}
	if (segundos == (segundos-1)) {
		segundos = -1;
	}
	if (centesimas == 0) {
		segundos=segundos-1;
        localStorage.setItem('segundos',segundos);
		if (segundos < 10) { segundos = "0"+segundos }
		Segundos.innerHTML = ":"+segundos;
	}
	if (centesimas == 99) {
		centesimas = -1;
	}
	if (centesimas < 99) {
		centesimas++;
	}



}
</script>
    <?php
    require 'menu.php';
    ?>