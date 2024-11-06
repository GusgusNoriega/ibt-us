<?php 

 /*

 *

 *Template Name: pagina check availability

 *

 */






$titulo_1 = get_field('titulo');

$titulo_2 = get_field('sub_titulo');

$titulo_3 = get_field('titutlo_3');

$titulo_pop_1 = get_field('titulo_pop_up');
$titulo_pop_2 = get_field('titulo_pop_up_2');

$contenido_pop_up = get_field('contenido_pop_up');
$contenido_pop_up_2 = get_field('contenido_pop_up_2');


$placeholder_1 = get_field('placeholder_1');

$placeholder_2 = get_field('placeholder_2');

$placeholder_3 = get_field('placeholder_3');

$placeholder_4 = get_field('placeholder_4');

$placeholder_5 = get_field('placeholder_5');

$placeholder_6 = get_field('placeholder_6');

$texto_del_boton = get_field('texto_del_boton');

$gracias = get_field('gracias');



// Obtener el idioma actual

$current_language = pll_current_language();



// Definir el texto en función del idioma

if ($current_language == 'en') {

    $texto1 = 'By clicking the Check button above, you agree to the'; 

    $texto2 = 'and'; 

    $texto3 = 'Terms &amp; Conditions';

    $texto4 = 'Privacy Policy';

    $si = 'yes';

    $no = 'no';

} elseif ($current_language == 'es') {

    $texto1 = 'Al hacer clic en el botón Verifica que acepta los'; 

    $texto2 = 'y'; 

    $texto3 = 'Terminos y condiciones';

    $texto4 = 'Politicas de privacidad';

    $si = 'si';

    $no = 'no';

} else {

    $texto1 = 'By clicking the Check button above, you agree to the'; 

    $texto2 = 'and'; 

    $texto3 = 'Terms &amp; Conditions';

    $texto4 = 'Privacy Policy';

    $si = 'yes';

    $no = 'no';

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

                        <img src="<?php echo get_template_directory_uri() . '/img/icon-12.svg'; ?>" alt="icono de brujula" class="mx-auto top-0 lg:hidden block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" />

                        <h3 class="text-[30px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center lg:hidden block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                            <?php echo $titulo_1;?>

                        </h3>

                        <p class="text-[#5B5B5B] text-[16px] font-normal text-center mt-[10px] mb-[30px] hidden md:block lg:hidden"data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                           <?php echo $titulo_2;?>

                        </p>
                         <!--<p class="text-[#5B5B5B] text-[16px] font-normal text-center mt-[10px] mb-[30px] hidden lg:block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
hola 2
                                <?php echo $titulo_2;?>

                          </p>-->

                    </div>

                    <div class="flex flex-col md:flex-row gap-[30px] justify-between items-center">

                         <div class="md:w-[60%] lg:w-1/2 w-full relative">

                            <img src="<?php echo get_template_directory_uri() . '/img/icon-12.svg'; ?>" alt="icono de brujula" class="mx-auto top-0 hidden lg:block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" />

                            <h3 class="text-[30px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center hidden lg:block" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                               <?php echo $titulo_1;?>

                            </h3>
                            <p class="text-[#5B5B5B] text-[16px] font-normal text-center mt-[10px] mb-[30px] " data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                                  <?php echo $titulo_2;?>

                            </p>

                           

                            <div class="md:px-[15px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                               

                                 <form id="checkAvailabilityForm" class="space-y-5 w-full">

                                      <div>

                                            <div class="flex gap-2">

                                              <input type="text" id="pac-input" name="stret" placeholder="<?php echo $placeholder_1; ?>" class="input-custom !w-[75%] pac-target-input" autocomplete="off" required>

                                              <input type="text" id="unit" name="unit" placeholder="<?php echo $placeholder_2; ?>" class="input-custom !w-[20%]" >

                                              <input type="hidden" id="zip" name="zip" placeholder="<?php echo $placeholder_3; ?>">

                                            </div>

                                            <div class="flex gap-2 pt-[14px]">

                                              <input type="hidden" id="city" name="city" placeholder="<?php echo $placeholder_4; ?>">

                                              <input type="hidden" id="state" name="state" placeholder="<?php echo $placeholder_5; ?>">

                                              <input type="hidden" id="lat" name="lat" class="input-custom !w-[20%]">

                                              <input type="hidden" id="lng" name="lng" class="input-custom !w-[20%]">

                                              <input type="hidden" id="insidePolygon" name="insidePolygon" class="input-custom">
                                              
                                              <input type="email" name="email" placeholder="<?php echo $placeholder_6; ?>" class="input-custom" required>
                                            </div>

                                      </div>

           

                                      <div class="flex items-start">

                                          <label class="checkbox-label items-start w-full">

                                          <input type="checkbox" id="checkbox" class="checkbox hidden">

                                          <span class="custom-checkbox w-auto"></span>

                                          <span class="checkbox-text text-[14px] text-[#4f4f4f] ml-2">
 
                                            <?php echo $texto1; ?>
                                              <a href="/termsOfUse.html" class="text-darkGray font-medium underline"> <?php echo $texto3; ?></a>

                                             <?php echo $texto2; ?>

                                              <a href="/privacyPolicy.html" class="text-darkGray font-medium underline"> <?php echo $texto4; ?></a>.

                                          </span>

                                          </label>

                                      </div>

                                      <div class="flex justify-center pt-[10px]">

                                          <button type="submit" class="btn open-popup" disabled>

                                          Check

                                          </button>

                                      </div>

                                  </form>

                                      

                            </div>

                        </div>

                       

                        <div class="md:w-[40%] lg:w-1/2 w-full min-h-[270px] md:min-h-[370px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                            <div id="map"></div>


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


  <input type="hidden" id="pagina-gracias" name="pagina-gracias" value="<?php echo $gracias;?>">

<div class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 z-40 hidden popup-overlay-happy">

            <div

                class="bg-white rounded-[20px] shadow-lg max-w-[90%] sm:max-w-md w-full py-[36px] px-6 relative popup-content">

                

                <div class="text-center max-w-[350px] mx-auto flex flex-col">

                    <img src="<?php echo get_template_directory_uri() . '/img/icon-13.svg'; ?>" alt="carita feliz" class="mx-auto mb-[10px]" />

                    <h3 class="text-[24px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center">

                       <? echo $titulo_pop_2; ?>

                    </h3>

                    <p class="text-darkGray text-base mt-[10px] mb-[20px]">

                        <? echo $contenido_pop_up_2; ?>

                    </p>

                    <div class="flex justify-center botones-yes-no">

                        <button class="btn button-si"><? echo $si; ?></button>

                        <button class="btn button-no"><? echo $no; ?></button>

                    </div>

                </div>

            </div>

</div>

<div class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 z-40 hidden popup-overlay-sad">

            <div

                class="bg-white rounded-[20px] shadow-lg max-w-[90%] sm:max-w-md w-full py-[36px] px-6 relative popup-content">

                

                <div class="text-center max-w-[350px] mx-auto flex flex-col">

                    <img src="https://ibt.us/wp-content/uploads/2024/10/wrong.svg" alt="carita triste" class="mx-auto mb-[10px]" />

                    <h3 class="text-[24px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center">
                        <? echo $titulo_pop_1; ?>                       
                    </h3>

                    <p class="text-darkGray text-base mt-[10px] mb-[20px]">

                        <? echo $contenido_pop_up; ?> 

                    </p>

                    <div class="flex justify-center botones-yes-no">

                        <button class="btn button-si"><? echo $si; ?> </button>

                        <button class="btn button-no"><? echo $no; ?></button>

                    </div>

                </div>

            </div>

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

  function getComponent(components, types) {
    for (const component of components) {
      for (const type of types) {
        if (component.types.includes(type)) {
          return component.long_name;
        }
      }
    }
    return null;
  }

  function buildFormattedAddress(components) {
    const streetNumber = getComponent(components, ['street_number']);
    const route = getComponent(components, ['route']);
    const locality = getComponent(components, ['locality', 'administrative_area_level_2', 'sublocality']);
    const administrativeArea = getComponent(components, ['administrative_area_level_1']);
    const country = getComponent(components, ['country']);
    const postalCode = getComponent(components, ['postal_code']);

    let addressParts = [];

    if (streetNumber && route) {
      addressParts.push(`${streetNumber} ${route}`);
    } else if (route) {
      addressParts.push(route);
    }

    if (locality) {
      addressParts.push(locality);
    }

    if (administrativeArea) {
      addressParts.push(administrativeArea);
    }

    if (country) {
      addressParts.push(country);
    }

    if (postalCode) {
      addressParts.push(postalCode);
    }

    return addressParts.join(', ');
  }

  function updateInfoDiv(location, place = null) {
    document.getElementById('lat').value = location.lat().toFixed(6);
    document.getElementById('lng').value = location.lng().toFixed(6);

    if (place) {
      const components = place.address_components;
      document.getElementById('pac-input').value = buildFormattedAddress(components);

      const zip = getComponent(components, ['postal_code']);
      if (zip) {
        document.getElementById('zip').value = zip;
      }

      const city = getComponent(components, ['locality', 'administrative_area_level_2', 'sublocality']);
      if (city) {
        document.getElementById('city').value = city;
      }

      const state = getComponent(components, ['administrative_area_level_1']);
      if (state) {
        document.getElementById('state').value = state;
      }
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
          const components = place.address_components;
          document.getElementById('pac-input').value = buildFormattedAddress(components);

          const zip = getComponent(components, ['postal_code']);
          if (zip) {
            document.getElementById('zip').value = zip;
          }

          const city = getComponent(components, ['locality', 'administrative_area_level_2', 'sublocality']);
          if (city) {
            document.getElementById('city').value = city;
          }

          const state = getComponent(components, ['administrative_area_level_1']);
          if (state) {
            document.getElementById('state').value = state;
          }
        }
      } else {
        console.error('Geocoder failed due to: ' + status);
      }
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('checkAvailabilityForm');
    const inputs = form.querySelectorAll('input[required]');
    const submitButton = form.querySelector('button[type="submit"]');

    // Función para verificar si todos los campos obligatorios están completos
    function validateForm() {
      let allFilled = true;

      inputs.forEach(input => {
        if (input.value.trim() === '') {
          allFilled = false;
        }
      });

      // Habilitar o deshabilitar el botón de enviar
      submitButton.disabled = !allFilled;

      // Cambiar clases del botón según el estado del formulario
      if (allFilled) {
        submitButton.classList.remove('vacio');
        submitButton.classList.add('lleno');
      } else {
        submitButton.classList.remove('lleno');
        submitButton.classList.add('vacio');
      }
    }

    // Escuchar los eventos de entrada y cambio para validar el formulario en tiempo real
    inputs.forEach(input => {
      input.addEventListener('input', validateForm);
      input.addEventListener('change', validateForm);
    });

    // Validar inicialmente en caso de que algunos campos ya estén llenos
    validateForm();
  });
</script>



    <script src="https://maps.googleapis.com/maps/api/js?key=tu_api&libraries=geometry,places&callback=initMap" async defer loading="lazy"></script>

  

<?php get_footer(); ?>
