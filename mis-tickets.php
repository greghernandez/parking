    <?php
    require 'header.php';
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
                        <p class="bold">Tiempo Restante: <br> <span class="time">53:04</span></p>
                    </div>
                </div>
                    <div class="col-12 center">
                        <a class="btn bg-verde center" href="ticket.php">Extender Tiempo</a>
                    </div>

            </div>
            
        </div>
    <?php
    require 'menu.php';
    ?>