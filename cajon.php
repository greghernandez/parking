<?php
require 'header.php';
include ('conexion.php');
session_start();
estaLogeado();//El usuario esta logeado
//busca y guarda los datos de la plaza
$id_est = $_GET['id_est'];
$id_caj = $_GET['id_caj'];
$con = Conectarse();
$qry= "SELECT * FROM estacionamiento WHERE id_est = '{$id_est}';";
$result = $con->query($qry);
$rows;
while ($row=$result->fetch_assoc()) {
    $rows[]=$row;
}
?>
	<div class="nav-title">
		<span class="title big"><?php echo $rows[0]['nom_plaza'] ?></span>	
	</div>
</div>
</div>

<div class="cont-tabs">
            <div class="card animated bounceInDown">
                <p class="card-title">Cajón #<?php echo $id_caj ?></p>
                <div class="ticket-cont">
                    <div class="icon-ticket" id="icon-l">
                        <img class="img-ticket" src="assets/icons/parkimeter.png" alt="">
                    </div>
                    <div class="col-4 center">
                        <?php 
                            $monto=22.5;
                            $hoy = getdate();
                            //datos para fecha
                            $d = $hoy['mday'];
                            $m = $hoy['mon'];
                            $y = $hoy['year'];
                            $fecha= $y."-".$m."-".$d; 
                            $h=$hoy['hours'];
                            $hs=5;
                            if(isset($_GET['id_parq'])){
                                //actualiza el estado del parquietro
                                $qry1 = "UPDATE  estacionamiento SET estado=0 WHERE id_est= '{$id_est}'";
                                mysqli_query($con, $qry1);
                                //guarda el pago
                                $qry2 = "INSERT INTO `pago_est`( `monto`, `fecha`, `h_inicio`, `h_salida`, `id_est`) VALUES ('{$monto}','{$fecha}','{$h}','{$hs}','{$id_est}')";
                                mysqli_query($con, $qry2);
                                $qry3 = "INSERT INTO `realiza_est`(`no_usuario`, `id_pago`) VALUES ('{$_SESSION['user']}','{$id_pago}');";
                                mysqli_query($con, $qry3);
                          }
 		                    
                        ?>
                        <p><span class="bold">Tarifa p/h: $</span><?php echo $rows[0]['tarifa'];?> MXN</p>
                        </div>
                    </div>
                <form action="index.php" method="GET"> 
                  <center><label >¿Cuanto tiempo desea apartar? <select id="opc" name="Tiempo" >
		                  <option value="0.15" selected>15 minutos</option>
		                  <option value="0.30">30 minutos</option>
		                  <option value="0.45">45 minutos</option>
		                  <option value="1">1 hora</option>
                          <option value="1.15">1 h. 15 minutos</option>
		                  <option value="1.30">1 h. 30 minutos</option>
		                  <option value="1.45">1 h. 45 minutos</option>
		                  <option value="2">2 horas</option>
                          <option value="2.15">2 h. 15 minutos</option>
		                  <option value="2.30">2 h. 30 minutos</option>
		                  <option value="2.45">2 h. 45 minutos</option>
		                  <option value="3">3 horas</option>
                          <option value="3.15">3 h. 15 minutos</option>
		                  <option value="3.30">3 h. 30 minutos</option>
		                  <option value="3.45">3 h. 45 minutos</option>
		                  <option value="4">4 hora</option>
	                   </select></label></center>
                    
                    <br><center><p><span class="bold" id="monto">Total: $0 MXN</span></p></center>
                    <div class="col-12 center">
                        <button class="btn bg-verde center" name="id_parq" value="<?php echo $id_parq; ?>"> Realizar Pago</button>
                    </div>
                </form>
                <script>
                    //actualiza el pago en la pantalla
                    window.addEventListener('click', monto);
                    tarifa=<?php echo $rows[0]['tarifa']; ?>;
                    localStorage.setItem('tarifa',tarifa);
                    time =document.getElementById('opc').value;
                    
                    function monto (){
                        time =document.getElementById('opc').value;
                        montot=parseInt(tarifa)*parseFloat(time);
                        document.getElementById('monto').innerHTML = "Total: $" + montot + " MXN";
                        localStorage.setItem('total',montot);
                    }
                    
                </script>
            </div>
        </div>
    <?php
    require 'menu.php';
    ?>