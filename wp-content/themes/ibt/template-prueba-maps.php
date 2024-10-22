<?php 
 /*
 *
 *Template Name: pagina prueba maps
 *
 */

?>

<!DOCTYPE html>

<html>
  <head>
    <title>Mapa con Autocomplete y GeoJSON</title>
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 80%;
      }

      #info {
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        background: #f9f9f9;
      }
    </style>
  </head>
  <body>
    <form id="checkAvailabilityForm" class="space-y-5 w-full">
      <div>
        <p class="pb-[14px] text-darkGray text-base font-normal">
          Street Address:
        </p>
        <div class="flex gap-2">
          <input type="text" id="pac-input" placeholder="Street*" class="input-custom !w-[55%] pac-target-input" autocomplete="off">
          <input type="text" id="unit" placeholder="Unit #*" class="input-custom !w-[20%]">
          <input type="text" id="zip" placeholder="Zip code*" class="input-custom !w-[20%]">
        </div>
        <div class="flex gap-2 pt-[14px]">
          <input type="text" id="city" placeholder="Town (City)*" class="input-custom">
          <input type="text" id="state" placeholder="State*" class="input-custom">
          <input type="text" id="lat" placeholder="Latitude" class="input-custom !w-[20%]">
          <input type="text" id="lng" placeholder="Longitude" class="input-custom !w-[20%]">
          <input type="text" id="insidePolygon" placeholder="Dentro del Polígono" class="input-custom">
        </div>
      </div>
      <div>
        <input type="email" placeholder="Email address*" class="input-custom">
      </div>
      <div class="flex items-start">
        <label class="checkbox-label items-start w-full">
          <input type="checkbox" id="checkbox" class="checkbox hidden">
          <span class="custom-checkbox w-auto"></span>
          <span class="checkbox-text text-[14px] text-[#4f4f4f] ml-2">
            By clicking the Check button above, you agree to the
            <a href="/termsOfUse.html" class="text-darkGray font-medium underline">Terms &amp; Conditions</a>
            and
            <a href="/privacyPolicy.html" class="text-darkGray font-medium underline">Privacy Policy</a>.
          </span>
        </label>
      </div>
      <div class="flex justify-center pt-[10px]">
        <button type="submit" class="btn open-popup">
          Check
        </button>
      </div>
    </form>
    <div id="map"></div>
    <div id="info">
      <strong>Lat:</strong> -- <br>
      <strong>Lng:</strong> -- <br>
      <strong>Dirección:</strong> -- <br>
      <strong>Dentro del Polígono:</strong> --
    </div>

    <script>
      let map;
      let marker;
      let polygons = [];
      let geocoder;

      function initMap() {
        const centerPosition = { lat: 40.749933, lng: -73.98633 };

        map = new google.maps.Map(document.getElementById('map'), {
          center: centerPosition,
          zoom: 13,
          mapTypeControl: false,
        });

        geocoder = new google.maps.Geocoder();

        // Carga el GeoJSON
        map.data.loadGeoJson('https://ibt.us/wp-content/uploads/mapa.geojson');
        map.data.setStyle({ visible: false });

        map.data.addListener('addfeature', function (event) {
          const geometry = event.feature.getGeometry();
          processGeometry(geometry);
        });

        function processGeometry(geometry) {
          if (geometry.getType() === 'Polygon') {
            geometry.getArray().forEach(function (path) {
              const polygon = new google.maps.Polygon({ paths: path.getArray() });

              polygons.push(polygon);
      
            });
          } else if (geometry.getType() === 'MultiPolygon') {
            geometry.getArray().forEach(function (polygonGeometry) {
              processGeometry(polygonGeometry);
            });
          }
        }

        // Crea un marcador arrastrable
        marker = new google.maps.Marker({
          position: centerPosition,
          map: map,
          draggable: true,
          title: '¡Arrástrame!',
        });

        // Actualiza la información al arrastrar el marcador
        marker.addListener('dragend', () => {
          const position = marker.getPosition();
          updateInfoDiv(position);
          reverseGeocode(position); // Obtener detalles de la dirección
        });

        // Inicializa la información
        updateInfoDiv(marker.getPosition());
        reverseGeocode(marker.getPosition());

        // Crear el Autocomplete y asociarlo al input
        const input = document.getElementById('pac-input');
        const autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        // Evento cuando se selecciona un lugar
        autocomplete.addListener('place_changed', function () {
          const place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert('No se encontró información sobre el lugar seleccionado.');
            return;
          }

          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }

          // Mover el marcador a la nueva ubicación
          marker.setPosition(place.geometry.location);
          updateInfoDiv(marker.getPosition(), place);
        });
      }

      function updateInfoDiv(location, place = null) {
        const infoDiv = document.getElementById('info');
        infoDiv.innerHTML = `<strong>Lat:</strong> ${location.lat().toFixed(6)}<br>
                             <strong>Lng:</strong> ${location.lng().toFixed(6)}<br>`;

        document.getElementById('lat').value = location.lat().toFixed(6);
        document.getElementById('lng').value = location.lng().toFixed(6);

        if (place) {
          place.address_components.forEach(component => {
            const types = component.types;
            if (types.includes('postal_code')) {
              document.getElementById('zip').value = component.long_name;
            }
            if (types.includes('locality')) {
              document.getElementById('city').value = component.long_name;
            }
            if (types.includes('administrative_area_level_1')) {
              document.getElementById('state').value = component.short_name;
            }
            if (types.includes('street_number') || types.includes('route')) {
              document.getElementById('pac-input').value = place.formatted_address;
            }
          });
        }

        let insidePolygon = false;
        polygons.forEach(function (polygon) {
          if (google.maps.geometry.poly.containsLocation(location, polygon)) {
            insidePolygon = true;
          }
        });

        document.getElementById('insidePolygon').value = insidePolygon ? 'Sí' : 'No';

        infoDiv.innerHTML += `<strong>Dentro del Polígono:</strong> ${insidePolygon ? 'Sí' : 'No'}`;
      }

      // Nueva función para obtener dirección a partir de lat/lng
      function reverseGeocode(location) {
        geocoder.geocode({ location: location }, function (results, status) {
          if (status === 'OK') {
            if (results[0]) {
              const place = results[0];
              document.getElementById('pac-input').value = place.formatted_address;

              place.address_components.forEach(component => {
                const types = component.types;
                if (types.includes('postal_code')) {
                  document.getElementById('zip').value = component.long_name;
                }
                if (types.includes('locality')) {
                  document.getElementById('city').value = component.long_name;
                }
                if (types.includes('administrative_area_level_1')) {
                  document.getElementById('state').value = component.short_name;
                }
              });
            }
          } else {
            console.error('Geocoder failed due to: ' + status);
          }
        });
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAod_9IB6QOdtJRmEz1ntIrw8VaPW_-EQM&libraries=geometry,places&callback=initMap" async defer loading="lazy"></script>
  </body>
</html>