<link rel="stylesheet" type="text/css" href="css/mapa.css">
<?php
require 'header.php';
?>
	<div class="nav-title">
		<span class="title"><img id="p-logo" src="assets/icons/p-white.png">arking</span>	
	</div>
</div>
</div>
    <div id="contenedor-map">
	    <input id="pac-input" class="controls" type="text" placeholder="Busca un lugar...">
    	<div id="map"></div>
    	<script>window.addEventListener('load',geolocalizar,true);</script>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtsRprziIxG4nRzFBixVhtkYVcJrb40Bo&libraries=places&callback=initAutocomplete"
         async defer></script>
        <script>  
        /**--------------------mapa----------------------**/
function geolocalizar(){            
    //COMPROBAR QUE SE PUEDE GEOLOCALIZAR
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(posicionUsuario);
    }
}
        
function posicionUsuario(coordenadas){
    latUser= coordenadas.coords.latitude;
    longUser= coordenadas.coords.longitude; 
    localStorage.setItem('latUser',latUser);
    localStorage.setItem('longUser',longUser);
}
      function initAutocomplete() {
        lat = localStorage.getItem('latUser');
        long = localStorage.getItem('longUser');
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: parseFloat(lat), lng: parseFloat(long)},
          zoom: 15,
          mapTypeId: 'roadmap',
          disableDefaultUI: true
        });
        <?php
            include ('conexion.php');
            $con = Conectarse();
            $qry= "SELECT * FROM parquimetro WHERE estado = 1;";
            $result = $con->query($qry);
            foreach ($result as $key => $value) {
                
        ?>
          latitud = parseFloat(<?php echo $value['latitud']?>);
          longi = parseFloat(<?php echo $value['longi']?>);
        var marker = new google.maps.Marker({
            position:{lat: latitud,lng: -longi},
            icon: "assets/icons/locationp.png",
            map: map,
            url: "lugar.php"
        });
        <?php } ?>
        google.maps.event.addListener(marker, 'click', function() {
            window.location.href = this.url;
        });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

        
        </script>
    </div>
    </div>
<?php
require 'menu.php';
?>
