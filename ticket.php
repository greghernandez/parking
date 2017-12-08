<?php
require 'header.php';
session_start();
estaLogeado();//El usuario esta logeado
?>
	<div class="nav-title">
		<span class="title big">Exteder Tiempo</span>	
	</div>
</div>
</div>
    <div id="contenedor">
    	<div class="card animated bounceInDown">
    		<div class="center card-title">
                <p>Parkimetro #<?php echo $_GET['id'] ?></p>
                <p>Av. Juarez</p>
    		</div>
    		<div class="center time-cart bg-purple">
    			<p class="bold">Tiempo Restante: <br>
                <span class="cronometro"><div class="cont-reloj">
                                <div class="reloj" id="Horas"><script>document.write(localStorage.getItem('horas'))</script></div>
		                    <div class="reloj" id="Minutos">:<script>document.write(localStorage.getItem('minutos'))</script></div>
		                    <div class="reloj" id="Segundos">:00</div>
                            </div></span></p>
    		</div>
            <div class="center">
                <p class="bold">Monto Actual:</p>
                <p class="monto">$<script>document.write(localStorage.getItem('total'))</script> MXN</p>
            </div>
            <hr>
            <div class="center">
                <p class="bold">Extender tiempo</p>
            </div>
            <div class="center">
                <input id="num" class="num-time" type="number" min="0" step="15"value="">
            </div>
            <div class="center">
                <button onclick="actualizar()" href="" class="btn btn-large bg-verde center">Realizar Pago</button>
            </div>
    	</div>
    </div>
<?php ?>
<script>    
var centesimas = 0;
var segundos = 0;
var minutos = localStorage.getItem('minutos');
var horas = localStorage.getItem('horas');
window.addEventListener('load', inicio, true);
function actualizar (){
    var total= localStorage.getItem('total');
    num= document.getElementById('num').value;
    minutos=parseInt(minutos)+ parseInt(num);
    if(minutos>60){
        minutos=minutos-60;
        horas=parseInt(horas)+1;
    }
    document.querySelector('#Minutos').innerHTML =":"+ minutos;
    document.querySelector('#Horas').innerHTML = horas;
    tarifa = localStorage.getItem('tarifa');
    var total= parseInt(total)+parseInt(tarifa*(num/60));
    localStorage.setItem('total',total);
    document.querySelector('.monto').innerHTML = "$" + total + "MXN";
    localStorage.setItem('minutos',minutos);
    localStorage.setItem('horas',horas);
}    


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