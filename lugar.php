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
                    <div class="icon-ticket">
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
                       
 		                    }
                        ?>
                        
                        <p><span class="bold">Zona: </span><?php echo $rows[0]['colonia'];?></p>
                        <p><span class="bold">Calle: </span><?php echo $rows[0]['calle'];?></p>
                    </div>
                       
                    <div class="col-4 center">
                        <p class="bold">¿Cuanto tiempo desea apartar? <br></p>
                      
                        
                    </div>
                </div>
                <form  action="mis-tickets.php" method="GET"> 
                  <label><select  name="Tiempo" >
		                  <option id="time" value="0.15">15 minutos</option>
		                  <option id="time" value="0.30">30 minutos</option>
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
	                   </select></label>
                    <div class="col-12 center">
                        <button class="btn bg-verde center" name="locacion" value="<?php echo $locacion; ?>"> Apartar</button>
                    </div>
                </form>
                                <script>
                    time =document.getElementById('time').value;
                </script>
                    <?php 
                $time = 2;
                          if(isset($_GET['aparta'])){
                          echo $locacion;
                          echo $qry1 = "UPDATE  parquimetro SET estado=0 WHERE locacion= '{$_GET['locacion']}'";
                          mysqli_query($con, $qry1);
                          }
                    ?>
            </div>
        </div>
    <?php
    require 'menu.php';
    ?>