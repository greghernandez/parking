  <?php
    session_start();
    require 'header.php';
    $id_parq = $_GET['id_parq'];
    ?>
        <div class="nav-title">
            <span class="title">Mis tickets</span>  
        </div>
    </div>
    </div>

        <!--Contenedor-->
        <div class="cont-tabs">
            <div class="card animated bounceInDown">
                <p class="card-title">Parkimetro #<?php echo $id_parq ?></p>
                <div class="ticket-cont">
                    <div class="icon-ticket" id="icon-l">
                        <img class="img-ticket" src="assets/icons/parkimeter.png" alt="">
                    </div>
                    <div class="col-4 center">
                        <?php 
                            //conexion con la bd
                            include ('conexion.php');
                            $con = Conectarse();
                            $qry= "SELECT * FROM parquimetro WHERE id_parq = '{$id_parq}';";
                            $result = $con->query($qry);
                            $rows;
 		                    while ($row=$result->fetch_assoc()) {
 		                    	$rows[]=$row;
                            }
                            $qry6= "SELECT * FROM info_parq WHERE id_infoparq = '{$rows[0]['id_infoparq']}';";
                            $result7 = $con->query($qry6);
                            $dato;
                            while ($dato=$result7->fetch_assoc()) {
 		                    	$datos[]=$dato;
                            }
                            if(isset($_GET['pago'])){
                                $tiempo=$_GET['tiempo'];
                                $monto=$_GET['monto'];
                                $id_parq=$_GET['pago'];
                                //datos para fecha
                                $hoy = getdate();
                                $d = $hoy['mday'];
                                $m = $hoy['mon'];
                                $y = $hoy['year'];
                                $fecha= $y."-".$m."-".$d; 
                                $h=$hoy['hours'];
                                $segundos=$hoy['minutes'];
                                //actualiza el estado del parquietro
                                $qry1 = "UPDATE  parquimetro SET estado=0 WHERE id_parq= '{$id_parq}'";
                                mysqli_query($con, $qry1);
                                //guarda el pago
                                $qry2 = "INSERT INTO `pago_parq`( `monto`, `tiempo`, `id_parq`) VALUES ('{$monto}','{$tiempo}','{$id_parq}')";
                                mysqli_query($con, $qry2);
                                //sacar el id de pago guardado
                                echo $qryid  = "SELECT id_pago FROM pago_parq WHERE monto = '{$monto}' and tiempo = '{$tiempo}' and id_parq = '{$id_parq}'";
                                $resultid = $con->query($qryid);
                                 $id_pago = $resultid->fetch_assoc()['id_pago'];
                                echo $id_pago;
                                echo $qry4 = "INSERT INTO `realiza_parq`(`id_cliente`, `id_pago`,`fecha`) VALUES ('{$_SESSION['user']}','{$id_pago}','{$fecha}');";
                                mysqli_query($con, $qry4);
                          }

                        ?>
                        
                        <p><span class="bold">Zona: </span><?php echo $datos[0]['colonia'];?></p>
                        <p><span class="bold">Calle: </span><?php echo $datos[0]['calle'];?></p>
                        <p><span class="bold">Tarifa p/h: $</span><?php echo $datos[0]['tarifa'];?> MXN</p>
                        </div>
                    </div>
                <form action="" method="GET"> 
                  <center><label >¿Cuanto tiempo desea apartar? <select id="opc" name="tiempo" >
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
                    
                    <br><center><p><span class="bold" >Total en MXN:</span></p><div class="center">
                <input id="monto" class="num-time" name="monto" readonly>
            </div></center>
                    <div class="col-12 center">
                        <button class="btn bg-verde center" name="pago" value="<?php echo $id_parq; ?>"> Realizar Pago</button>
                    </div>
                </form>
                <script>
                    //actualiza el pago en la pantalla
                    window.addEventListener('click', monto);
                    tarifa=<?php echo $datos[0]['tarifa']; ?>;
                    localStorage.setItem('tarifa',tarifa);
                    function monto (){
                        time =parseFloat(document.getElementById('opc').value);
                        if(time<1){
                            time=((time*10)/6)*1;
                        }
                        if((time>1)&&(time<2)){
                            time=time-1;
                            time=((time*10)/6)+1;
                        }
                        if((time>2)&&(time<3)){
                            time=time-2;
                            time=((time*10)/6)+2;
                        }
                        if((time>3)&&(time<4)){
                            time=time-3;
                            time=((time*10)/6)+3;
                        }
                        montot=Math.round(parseInt(tarifa)*time);
                        document.getElementById('monto').value =  montot;
                        localStorage.setItem('total',montot);
                    }
                    
                </script>
            </div>
        </div>
    <?php
    require 'menu.php';
    ?>