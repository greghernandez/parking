<?php
require 'header.php';
?>
	<div class="nav-title">
		<span class="title big">Exteder Tiempo</span>	
	</div>
</div>
</div>
    <div id="contenedor">
    	<div class="card animated bounceInDown">
    		<div class="center card-title">
                <p>Parkimetro #51</p>
                <p>Av. Juarez</p>
    		</div>
    		<div class="center time-cart bg-purple">
    			<p class="bold">Tiempo Restante: <br>
                <span class="cronometro">59:43</span></p>
    		</div>
            <div class="center">
                <p class="bold">Monto Actual:</p>
                <p>$50 MXN</p>
            </div>
            <hr>
            <div class="center">
                <p class="bold">Extender tiempo</p>
            </div>
            <div class="center">
                <input class="num-time" type="number" min="0" step="15"value="15">
            </div>
            <div class="center">
                <a href="" class="btn btn-large bg-verde center">Realizar Pago</a>
            </div>
    	</div>
    </div>
<?php
require 'menu.php';
?>