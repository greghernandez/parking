<link rel="stylesheet" type="text/css" href="css/mapa.css">
<?php
require 'header.php';
?>
<script src="js/mapa.js"></script>
	<div class="nav-title">
		<span class="title">Parking</span>	
	</div>
</div>
</div>
    <div class="cont-map">
	     <input id="pac-input" class="controls" type="text" placeholder="Busca un lugar...">
    	 <div id="map"></div>
    	 <script>window.addEventListener('load',geolocalizar,true);</script>
    	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtsRprziIxG4nRzFBixVhtkYVcJrb40Bo&libraries=places&callback=initAutocomplete"
         async defer></script>
    </div>
    </div>
<?php
require 'menu.php';
?>
