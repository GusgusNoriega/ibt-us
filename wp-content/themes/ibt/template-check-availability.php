<?php 
 /*
 *
 *Template Name: pagina check availability
 *
 */


$titulo_1 = get_field('titulo');
$titulo_2 = get_field('sub_titulo');
$titulo_3 = get_field('titutlo_3');

$placeholder_1 = get_field('placeholder_1');
$placeholder_2 = get_field('placeholder_2');
$placeholder_3 = get_field('placeholder_3');
$placeholder_4 = get_field('placeholder_4');
$placeholder_5 = get_field('placeholder_5');
$placeholder_6 = get_field('placeholder_6');
$texto_del_boton = get_field('texto_del_boton');

// Obtener el idioma actual
$current_language = pll_current_language();

// Definir el texto en función del idioma
if ($current_language == 'en') {
    $texto1 = 'By clicking the Check button above, you agree to the'; 
    $texto2 = 'and'; 
    $texto3 = 'Terms &amp; Conditions';
    $texto4 = 'Privacy Policy';
} elseif ($current_language == 'es') {
    $texto1 = 'Al hacer clic en el botón Verifica que acepta las'; 
    $texto2 = 'y'; 
    $texto3 = 'Terminos y condiciones';
    $texto4 = 'Politicas de privacidad';
} else {
    $texto1 = 'By clicking the Check button above, you agree to the'; 
    $texto2 = 'and'; 
    $texto3 = 'Terms &amp; Conditions';
    $texto4 = 'Privacy Policy';
} 
get_header();
?>

 <style>
      #map {
        height: 400px;
      }
    </style>
<section class="flex items-center">
            <div class="container-w">
                <div class="py-[30px] md:py-[50px] lg:py-[130px]">
                    <div class="relative flex flex-col justify-center">
                        <img src="<?php echo get_template_directory_uri() . '/img/icon-12.svg'; ?>" alt="" class="mx-auto top-0 lg:hidden block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" />
                        <h3 class="text-[30px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center lg:hidden block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <?php echo $titulo_1;?>
                        </h3>
                        <p class="text-[#5B5B5B] text-[16px] font-normal text-center mt-[10px] mb-[30px] hidden md:block lg:hidden"data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                           <?php echo $titulo_2;?>
                        </p>
                    </div>
                    <div class="flex flex-col md:flex-row gap-[0px] justify-between items-center">
                         <div class="md:w-[60%] lg:w-1/2 w-full relative">
                            <img src="<?php echo get_template_directory_uri() . '/img/icon-12.svg'; ?>" alt="" class="mx-auto top-0 hidden lg:block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" />
                            <h3 class="text-[30px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center hidden lg:block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                               <?php echo $titulo_1;?>
                            </h3>
                            <p class="text-[#5B5B5B] text-[16px] font-normal text-center mt-[10px] mb-[30px] hidden lg:block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                <?php echo $titulo_2;?>
                            </p>
                            <div class="md:px-[15px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                               
                                 <form id="checkAvailabilityForm" class="space-y-5 w-full">
                                      <div>
                                          <p class="pb-[14px] text-darkGray text-base font-normal">
                                          Street Address:
                                          </p>
                                            <div class="flex gap-2">
                                              <input type="text" id="pac-input" name="stret" placeholder="Street*" class="input-custom !w-[55%] pac-target-input" autocomplete="off" required>
                                              <input type="text" id="unit" name="unit" placeholder="Unit #*" class="input-custom !w-[20%]" required>
                                              <input type="text" id="zip" name="zip" placeholder="Zip code*" class="input-custom !w-[20%]" required>
                                            </div>
                                            <div class="flex gap-2 pt-[14px]">
                                              <input type="text" id="city" name="city" placeholder="Town (City)*" class="input-custom" required>
                                              <input type="text" id="state" name="state" placeholder="State*" class="input-custom" required>
                                              <input type="hidden" id="lat" name="lat" class="input-custom !w-[20%]">
                                              <input type="hidden" id="lng" name="lng" class="input-custom !w-[20%]">
                                              <input type="hidden" id="insidePolygon" name="insidePolygon" class="input-custom">
                                            </div>
                                      </div>
                                      <div>
                                          <input type="email" name="email" placeholder="Email address*" class="input-custom" required>
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
                                      
                            </div>
                        </div>
                        <p class="text-[#5B5B5B] text-[16px] font-normal text-center mb-[30px] block md:hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <?php echo $titulo_2;?>
                        </p>
                        <div class="md:w-[40%] lg:w-1/2 w-full min-h-[270px] md:min-h-[370px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <div id="map"></div>
                            <p class="texto-mapa">
                              Please confirm that the pin is correctly placed at your address. If it’s not, simply drag the pin to the right location.
                            </p>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
</section>
<form id="actualizar-busqueda">
    <input type="hidden" name="action" value="actualizar_publicidad">
    <input type="hidden" id="id-post-busqueda" name="id-post-busqueda">
    <input type="hidden" id="validacion-publicidad" name="publicidad">
</form>

<div class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 z-40 hidden popup-overlay-happy">
            <div
                class="bg-white rounded-[20px] shadow-lg max-w-[90%] sm:max-w-md w-full py-[36px] px-6 relative popup-content">
                <button class="absolute top-3 right-3 text-black popup-close w-10 h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M10.2085 10.2085L24.7918 24.7918M10.2085 24.7918L24.7918 10.2085" stroke="black" stroke-width="2.91667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="text-center max-w-[350px] mx-auto flex flex-col">
                    <img src="<?php echo get_template_directory_uri() . '/img/icon-13.svg'; ?>" alt="" class="mx-auto mb-[10px]" />
                    <h3 class="text-[24px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center">
                        Good news! Our fiber Internet will be available in this area very
                        soon
                    </h3>
                    <p class="text-darkGray text-base mt-[10px] mb-[20px]">
                        We will notify you when there are updates about our service in
                        this area.
                    </p>
                    <div class="flex justify-center botones-yes-no">
                        <button class="btn button-si">YES</button>
                        <button class="btn button-no">NO</button>
                    </div>
                </div>
            </div>
</div>
<div class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 z-40 hidden popup-overlay-sad">
            <div
                class="bg-white rounded-[20px] shadow-lg max-w-[90%] sm:max-w-md w-full py-[36px] px-6 relative popup-content">
                <button class="absolute top-3 right-3 text-black popup-close2 w-10 h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                        <path d="M10.2085 10.2085L24.7918 24.7918M10.2085 24.7918L24.7918 10.2085" stroke="black" stroke-width="2.91667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="text-center max-w-[350px] mx-auto flex flex-col">
                    <img src="<?php echo get_template_directory_uri() . '/img/icon-14.svg'; ?>" alt="" class="mx-auto mb-[10px]" />
                    <h3 class="text-[24px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center">
                        Our fiber Internet service isn’t available in this area
                    </h3>
                    <p class="text-darkGray text-base mt-[10px] mb-[20px]">
                        We will notify you when there are updates about our service in
                        this area.
                    </p>
                    <div class="flex justify-center botones-yes-no">
                        <button class="btn button-si">YES</button>
                        <button class="btn button-no">NO</button>
                    </div>
                </div>
            </div>
</div>
<!-- Include the Google Maps JavaScript API -->
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
  
<?php get_footer(); ?>