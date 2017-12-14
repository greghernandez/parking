<?php
    require 'header.php';
    session_start();
    estaLogeado();//El usuario esta logeado
        include ('conexion.php');
        $con = Conectarse();
        $qry1 = "SELECT `id_pago` FROM `realiza_parq` WHERE id_cliente = '{$_SESSION['user']}'";
        $result1 = $con->query($qry1);
        $id_pago = $result1->fetch_assoc()['id_pago'];
        $qry2 = "SELECT `id_parq` FROM `pago_parq` WHERE id_pago = '{$id_pago}'";
        $result2 = $con->query($qry2);
        $locacion = $result2->fetch_assoc()['id_parq'];
        $qry2 = "SELECT `tiempo` FROM `pago_parq` WHERE id_pago = '{$id_pago}'";
        $result2 = $con->query($qry2);
        $tiempo = $result2->fetch_assoc()['tiempo'];
        switch ($tiempo){
            case 0.15:
                $horas=0;
                $minutos=0.15;
            break;
            case 0.30:
                $horas=0;
                $minutos=0.30;
            break;   
            case 0.45:
                $horas=0;
                $minutos=0.45;
            break;
            case 1:
                $horas=1;
                $minutos=0;
            break;
            case 1.15:
                $horas=1;
                $minutos=0.15;
            break;
            case 1.30:
                $horas=1;
                $minutos=0.30;
            break;   
            case 1.45:
                $horas=1;
                $minutos=0.45;
            break;
            case 2:
                $horas=2;
                $minutos=0;
            break;
            case 2.15:
                $horas=2;
                $minutos=0.15;
            break;
            case 2.30:
                $horas=2;
                $minutos=0.30;
            break;   
            case 2.45:
                $horas=2;
                $minutos=0.45;
            break;
            case 3:
                $horas=3;
                $minutos=0;
            break;
            case 3.15:
                $horas=3;
                $minutos=0.15;
            break;
            case 3.30:
                $horas=3;
                $minutos=0.30;
            break;   
            case 3.45:
                $horas=3;
                $minutos=0.45;
            break;
            case 4:
                $horas=4;
                $minutos=0;
            break;
        }
    ?>
<script>
    horas=<?php echo $horas ?>;
    minutos=<?php echo $minutos ?>;
    localStorage.setItem('horas',horas);
    localStorage.setItem('minutos',minutos);
</script>
        <div class="nav-title">
            <span class="title">Mis tickets</span>  
        </div>
    </div>
    </div>
        <!--Tabs-->
        <div class="tabs">
            <button id="btn-act" class="tab-opt" onclick="openTab('activos');">
                Activos
            </button>
            <button id="btn-hist" class="tab-opt" onclick="openTab('historial');">
                Historial
            </button>
        </div>
        <!--Contenedor-->
        <div id="activos" class="cont-tabs">
            <?php 
            if (empty($locacion)) {
            ?>
                <p class="center">No tienes tickets activos</p>
            <?php
            }else{
            ?>
            <div class="card animated bounceInDown">
                <p class="card-title">Parkimetro #<?php echo $locacion ?></p>
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
                        <a class="btn bg-verde center" href="ticket.php?id_parq=<?php echo $locacion ?>&id_pago=<?php echo $id_pago ?>">Extender Tiempo</a>
                    </div>

            </div>
            <?php
            }
            ?>
            
        </div>
        <div id="historial" class="cont-tabs" style="display: none;">
            <?php
            $con = Conectarse();
            $id_cliente = $_SESSION['user'];
            $qry= "SELECT * FROM `pago_parq` WHERE id_pago IN (SELECT id_pago FROM realiza_parq WHERE id_cliente = 7 )";
            $result = $con->query($qry);

            while ($row = mysqli_fetch_array($result)) {
                
                ?>
                <div class="card animated bounceInDown">
                    <p class="card-title">Parkimetro #</p>
                    <p><span class="bold">Calle: </span></p>
                    <p><span class="bold">Tiempo: </span></p>
                    <p><span class="bold">Monto: </span></p>
                    <p><span class="bold">fecha: </span><?php echo $row['fecha']?></p>
                    <button class="btn bg-azul" type="">Factura</button>
                </div>
                <?php
            } 
            ?>
        </div>
<script>
window.addEventListener('load', inicio, true)
var centesimas = 0;
    var segundos = localStorage.getItem('segundos');
    var minutos = localStorage.getItem('minutos');
    var horas = localStorage.getItem('horas');
function inicio () {
	control = setInterval(cronometro,10);
    var segundos = localStorage.getItem('segundos');
    var minutos = localStorage.getItem('minutos');
    var horas = localStorage.getItem('horas');
}
function parar () {
	clearInterval(control);
    <?php
        //$qry = "UPDATE  parquimetro SET estado=1 WHERE id_parq= '{$locacion}'";
       // mysqli_query($con, $qry);
                    
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
<script>
function openTab(tabName) {
    var d = document.getElementById("btn-act");
    var b = document.getElementById("btn-hist");
    if (tabName == 'activos') {
        document.getElementById('activos').style.display = "block";
        //d.className += " act-tab";
        document.getElementById('historial').style.display = "none";
    }else{
        document.getElementById('activos').style.display = "none";
        document.getElementById('historial').style.display = "block"
        //b.className += " act-tab";
    }
}
</script>
    <?php
    require 'menu.php';
    ?>