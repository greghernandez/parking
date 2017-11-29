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
            <p class="cart-title">Parkimetro #54</p>
            <div class="col-6">
                <p>Zona: Centro</p>
                <p>Calle: Av. Juarez</p>
            </div>
            <div class="col-6">
                <p>Tiempo Restante: <br> <span class="time">53:04</span></p>
            </div>
            <a class="btn bg-verde center" href="ticket.php">Extender Tiempo</a>
        </div>
        
    </div>
<?php
require 'menu.php';
?>