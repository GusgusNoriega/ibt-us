document.addEventListener("DOMContentLoaded", function () {
  const btnMenu = document.getElementById("btn_menu");
  const menuResponsive = document.getElementById("menu-responsive");
  const topMenu = document.getElementById("top-menu");
  const topLine = document.getElementById("top-line");
  const hiddenMenu = document.getElementById("hidden-menu");

  if (btnMenu && menuResponsive) {
    btnMenu.addEventListener("change", function () {
      if (btnMenu.checked) {
        menuResponsive.classList.remove("translate-x-full");
        menuResponsive.classList.add("translate-x-0");
        document.body.classList.add("overflow-hidden");
      } else {
        menuResponsive.classList.remove("translate-x-0");
        menuResponsive.classList.add("translate-x-full");
        document.body.classList.remove("overflow-hidden");
      }
    });
  }

  // Manejo de tamaño de ventana
  function handleWindowResize() {
    if (window.innerWidth < 1023) {
      topMenu.classList.add("hidden");
      topLine.classList.add("hidden");
      hiddenMenu.classList.add("hidden", "opacity-0", "pointer-events-none");
    } else {
      topMenu.classList.remove("hidden");
      topLine.classList.remove("hidden");
      hiddenMenu.classList.remove("hidden", "opacity-0", "pointer-events-none");
    }
  }

  window.addEventListener("resize", handleWindowResize);
  handleWindowResize(); // Ejecutar al cargar la página

  // Manejo del scroll del navbar
  function handleNavbarScroll() {
    const navbar = document.getElementById("navbar");
    let lastScrollTop = 0;

    function updateNavbar() {
      if (window.innerWidth >= 1023) {
        const scrollTop =
          window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop <= 60) {
          topMenu.classList.remove("hidden");
          topLine.classList.remove("hidden");
          hiddenMenu.classList.add(
            "hidden",
            "opacity-0",
            "pointer-events-none"
          );
          navbar.classList.remove("top-[-100px]", "opacity-0");
          navbar.classList.add("translate-y-0");
        } else if (scrollTop > 120 && scrollTop > lastScrollTop) {
          topMenu.classList.add("hidden");
          topLine.classList.add("hidden");
          hiddenMenu.classList.remove(
            "hidden",
            "opacity-0",
            "pointer-events-none"
          );
          navbar.classList.add("opacity-0", "top-[-100px]");
          navbar.classList.remove("translate-y-0");
        } else if (scrollTop < lastScrollTop) {
          navbar.classList.remove("opacity-0", "top-[-100px]");
          navbar.classList.add("translate-y-0");
        }

        lastScrollTop = Math.max(scrollTop, 0);
      }
    }

    window.addEventListener("scroll", updateNavbar);
    updateNavbar(); // Ejecuta la función al cargar la página
  }

  window.addEventListener("DOMContentLoaded", handleNavbarScroll);

  // Destacar enlace activo
  function highlightActiveLink() {
    const currentPath = window.location.pathname;
    const menuLinks = document.querySelectorAll("#top-menu a, #hidden-menu a");
    menuLinks.forEach((link) => {
      const linkPath = link.getAttribute("href");
      if (linkPath === currentPath) {
        link.classList.add("text-primaryBlue");
      } else {
        link.classList.remove("text-primaryBlue");
      }
    });
  }

  highlightActiveLink();

  // Inicializar Swipers solo si existen en la página
  function initializeSwipers() {
    if (document.querySelector(".heroSwiper")) {
      new Swiper(".heroSwiper", {
        navigation: {
          nextEl: ".hero-swiper .swiper-button-next",
          prevEl: ".hero-swiper .swiper-button-prev",
        },
        pagination: {
          el: ".hero-swiper .swiper-pagination",
          dynamicBullets: true,
        },
      });
    }

    if (document.querySelector(".moreNews")) {
      new Swiper(".moreNews", {
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
          nextEl: ".more-news .swiper-button-next",
          prevEl: ".more-news .swiper-button-prev",
        },
      });
    }

    if (document.querySelector(".sliderLateral")) {
      const swiperLateral = new Swiper(".sliderLateral", {
        effect: "cards",
        simulateTouch: false,
        navigation: {
          nextEl: ".benefits .swiper-button-next",
          prevEl: ".benefits .swiper-button-prev",
        },
      });
    }

    if (document.querySelector(".sliderLateralText")) {
      new Swiper(".sliderLateralText", {
        spaceBetween: 30,
        effect: "fade",
        simulateTouch: false,
        navigation: {
          nextEl: ".benefits .swiper-button-next",
          prevEl: ".benefits .swiper-button-prev",
        },
      });
    }
  }

  initializeSwipers();

  // Comportamiento de Popup
  /*document.querySelectorAll(".open-popup").forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(".popup-overlay-happy").classList.remove("hidden");
    });
  });*/

  document.querySelectorAll(".popup-close").forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      button.closest(".popup-overlay-happy").classList.add("hidden");
    });
  });

  document.querySelectorAll(".popup-close2").forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      button.closest(".popup-overlay-sad").classList.add("hidden");
    });
  });

  document.querySelectorAll(".popup-overlay-happy").forEach((overlay) => {
    overlay.addEventListener("click", function (e) {
      if (!e.target.closest(".popup-content-happy")) {
        this.classList.add("hidden");
      }
    });
  });

  // Comportamiento del Accordion
  document.querySelectorAll(".accordion-header").forEach((button) => {
    button.addEventListener("click", () => {
      const content = button.nextElementSibling;
      const icon = button.querySelector(".accordion-icon");
      const title = button.querySelector(".accordion-title");
      const accordionItem = button.closest(".div-accordion-item");

      if (content.classList.contains("hidden")) {
        content.classList.remove("hidden");
        accordionItem.classList.add("bg-[#F0F4F8]");
        title.classList.remove("text-darkGray");
        title.classList.add("text-[#00355F]");
        icon.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <rect x="39.3739" y="39.3739" width="38.7478" height="38.7478" rx="19.3739" transform="rotate(-180 39.3739 39.3739)" stroke="#00355F" stroke-width="1.25216"/>
            <line x1="12.5" y1="19" x2="28.5" y2="19" stroke="#00355F" stroke-linecap="round"/>
          </svg>`;
      } else {
        content.classList.add("hidden");
        accordionItem.classList.remove("bg-[#F0F4F8]");
        title.classList.remove("text-[#00355F]");
        title.classList.add("text-darkGray");
        icon.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <rect x="39.3739" y="39.3739" width="38.7478" height="38.7478" rx="19.3739" transform="rotate(-180 39.3739 39.3739)" stroke="#00355F" stroke-width="1.25216"/>
            <line x1="12.5" y1="19" x2="28.5" y2="19" stroke="#00355F" stroke-linecap="round"/>
            <line x1="20" y1="27.5" x2="20" y2="11.5" stroke="#00355F" stroke-linecap="round"/>
          </svg>`;
      }
    });
  });
  

  // Obtén la URL actual sin la barra final
  var currentUrl = window.location.href.replace(/\/$/, "");

  // Selecciona todos los enlaces del menú
  var menuLinks = document.querySelectorAll('#top-menu a');
  var menuLinks2 = document.querySelectorAll('#hidden-menu a');

  // Recorre todos los enlaces y compara con la URL actual
  menuLinks.forEach(function(link) {
        var linkUrl = link.href.replace(/\/$/, ""); // Elimina la barra final para comparar

        if (linkUrl === currentUrl) {
            link.classList.add('text-primaryBlue'); // Agrega la clase al enlace actual
        }
  });

   menuLinks2.forEach(function(link) {
        var linkUrl = link.href.replace(/\/$/, ""); // Elimina la barra final para comparar

        if (linkUrl === currentUrl) {
            link.classList.add('text-primaryBlue'); // Agrega la clase al enlace actual
        }
  });

  // Inicializar AOS
  AOS.init();
});

document.querySelectorAll(".toggle-accordion").forEach((element) => {
  element.addEventListener("click", function () {
    const content = this.nextElementSibling;
    const chevron = this.querySelector(".chevron");

    if (content.classList.contains("max-h-0")) {
      content.classList.remove("max-h-0", "opacity-0");
      content.classList.add("max-h-96", "opacity-100");
    } else {
      content.classList.add("max-h-0", "opacity-0");
      content.classList.remove("max-h-96", "opacity-100");
    }

    chevron.classList.toggle("rotate-180");
  });
});

function adjustAccordionBasedOnScreenSize() {
  const isLargeScreen = window.innerWidth > 767;
  document.querySelectorAll(".accordion-content").forEach((content) => {
    const chevron = content.previousElementSibling.querySelector(".chevron");

    if (isLargeScreen) {
      content.classList.remove("max-h-0", "opacity-0");
      content.classList.add("max-h-96", "opacity-100");
      chevron.classList.remove("rotate-180");
    } else {
      content.classList.add("max-h-0", "opacity-0");
      content.classList.remove("max-h-96", "opacity-100");
      chevron.classList.add("rotate-180");
    }
  });
}



// Ajustar cuando se cambia el tamaño de la ventana
window.addEventListener("resize", adjustAccordionBasedOnScreenSize);

document.addEventListener('DOMContentLoaded', function() {
    var langButtons = document.querySelectorAll('.hidden.md\\:flex button');
    langButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var langUrl = this.getAttribute('data-lang-url');
            if (langUrl) {
                window.location.href = langUrl;
            }
        });
    });
});

document.getElementById('checkAvailabilityForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Evita el envío tradicional del formulario.
  console.log("Se intentó enviar el formulario");

  const formData = new FormData(this);
  console.log("Datos del formulario:", [...formData.entries()]);

  // Obtener el checkbox por su ID.
  const checkbox = document.getElementById('checkbox');
  // Validar que todos los campos tengan contenido.
  let missingFields = [];
  
  formData.forEach((value, key) => {
    if (!value.trim()) { // Si el campo está vacío.
      missingFields.push(key);
    }
  });

  // Si hay campos faltantes, mostrar un alert y no enviar el formulario.
  if (missingFields.length > 0) {
    alert('Los siguientes campos están vacíos: ' + missingFields.join(', '));
    return; // Detener la ejecución y no enviar el formulario.
  }

  // Verificar si el checkbox está marcado.
  if (!checkbox.checked) {
    alert('Debes aceptar los términos y condiciones.');
    return; // Detener la ejecución y no enviar el formulario.
  }

  formData.append('action', 'check_availability'); // Añade el parámetro 'action' para WordPress.
  
 // Buscar el valor de insidePolygon en los datos del formulario
  const insidePolygonEntry = [...formData.entries()].find(entry => entry[0] === 'insidePolygon');
  const insidePolygonValue = insidePolygonEntry ? insidePolygonEntry[1] : null;

  // Verificar si insidePolygon es igual a "No"
  if (insidePolygonValue === 'No') {
      // Mostrar el popup sad si el valor es "No"
      document.querySelector(".popup-overlay-sad").classList.remove("hidden");
  } else {
      // Mostrar el popup happy si el valor no es "No"
      document.querySelector(".popup-overlay-happy").classList.remove("hidden");
  }
  
  // Enviar el formulario vía AJAX si todos los campos están completos.
  fetch('/wp-admin/admin-ajax.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    console.log("Respuesta del servidor:", data);
      // Verificamos que la respuesta sea exitosa
      if (data.success) {
          // Establecemos el valor del input con el post_id recibido
          document.getElementById('id-post-busqueda').value = data.post_id;
      } else {
          // Manejo de errores si success es false
          console.error("Error en la respuesta del servidor:", data.message);
      }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

// Función para manejar el clic en los botones
document.querySelectorAll('.button-si, .button-no').forEach(button => {
    button.addEventListener('click', function () {
        // Actualiza el valor de "validacion-publicidad"
        const valorPublicidad = this.classList.contains('button-si') ? 'si' : 'no';
        document.getElementById('validacion-publicidad').value = valorPublicidad;

        // Intenta enviar el formulario
        enviarFormulario();
    });
});

// Función para validar y enviar el formulario
function enviarFormulario() {
    const idPostBusqueda = document.getElementById('id-post-busqueda').value;

    // Verifica que el campo "id-post-busqueda" tenga contenido
    if (idPostBusqueda) {
        // Recolecta los datos del formulario
        const formData = new FormData(document.getElementById('actualizar-busqueda'));
        
        // Envía el formulario mediante AJAX
        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Formulario enviado exitosamente:', data.message);
                window.location.href = "https://ibt.us/gracias/";
                // Aquí puedes manejar el éxito de la actualización, por ejemplo, mostrar un mensaje de éxito
            } else {
                console.error('Error al enviar el formulario:', data.message);
                // Aquí puedes manejar el error, por ejemplo, mostrar un mensaje de error
            }
        })
        .catch(error => console.error('Error en la petición AJAX:', error));
    } else {
        console.warn('No se puede enviar el formulario. Falta el ID de post.');
        // Aquí puedes manejar el caso en el que no hay un "id-post-busqueda" válido
    }
}