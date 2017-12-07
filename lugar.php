  <?php
    require 'header.php';
    ?>
        <div class="nav-title">
            <span class="title">Mis tickets</span>  
        </div>
    </div>
    </div>

        <!--Contenedor-->
        <div class="cont-tabs">
            <div class="card animated bounceInDown">
                <p class="card-title">Parkimetro #10</p>
                <div class="ticket-cont">
                    <div class="icon-ticket" id="icon-l">
                        <img class="img-ticket" src="assets/icons/parkimeter.png" alt="">
                    </div>
                    <div class="col-4 center">
                        <?php 
                            $locacion = $_GET['locacion'];
                            include ('conexion.php');
                            $con = Conectarse();
                            $qry= "SELECT * FROM parquimetro WHERE locacion = '{$locacion}';";
                            $result = $con->query($qry);
                            $rows;
 		                    while ($row=$result->fetch_assoc()) {
 		                    	$rows[]=$row;
                            if(isset($_GET['locacion'])){
                                $locacion;
                    /*cambiar esta parte */
                                $qry1 = "UPDATE  parquimetro SET estado=1 WHERE locacion= '{$locacion}'";
                                mysqli_query($con, $qry1);
                          }
 		                    }
                        ?>
                        
                        <p><span class="bold">Zona: </span><?php echo $rows[0]['colonia'];?></p>
                        <p><span class="bold">Calle: </span><?php echo $rows[0]['calle'];?></p>
                        <p><span class="bold">Tarifa p/h: $</span><?php echo $rows[0]['tarifa'];?> MXN</p>
                        </div>
                    </div>
                <form action="mis-tickets.php" method="GET"> 
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
                        <button class="btn bg-verde center" name="locacion" value="<?php echo $locacion; ?>"> Realizar Pago</button>
                    </div>
                </form>
                <script>
                    window.addEventListener('click', monto);
                    tarifa=<?php echo $rows[0]['tarifa']; ?>;
                    localStorage.setItem('tarifa',tarifa);
                    time =document.getElementById('opc').value;
                    montot=parseInt(tarifa);
                    function monto (){
                        
                        alert(montot);
                        document.getElementById('monto').innerHTML = "Total: $" + montot + "MXN";
                    }
                    
                </script>
            </div>
        </div>
    <?php
    require 'menu.php';
    ?>