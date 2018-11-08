window.onload = function() {

  // Defino las funciones para esconder los menús

  var toggleCategorias = function() {
    categoriasDesplegable.classList.toggle("hidden");
    categoriasFlechaAbajo.classList.toggle("hidden");
    categoriasCruz.classList.toggle("hidden");
  }

  var toggleCategoriasMobile = function() {
    categoriasDesplegableMobile.classList.toggle("hidden");
    categoriasFlechaIzquierdaMobile.classList.toggle("hidden");
    categoriasCruzMobile.classList.toggle("hidden");
  }

  var toggleMenuHamburguer = function() {
    hamburguerDesplegable.classList.toggle("hidden");
    imagenHamburguer.classList.toggle("hidden");
    imagenCruz.classList.toggle("hidden");
    if (!categoriasDesplegableMobile.classList.contains("hidden")) {
      toggleCategoriasMobile();
    }
  }


  // Apertura y cierre del menú "Todas las categorías" versión DESKTOP

  var categoriasDisparador = document.querySelector(".todas-las-categorias");
  var categoriasDesplegable = document.querySelector(".menu-categorias");
  var categoriasFlechaAbajo = document.querySelector(".flecha-abajo");
  var categoriasCruz = document.querySelector(".cruz");

  categoriasDisparador.addEventListener("click", toggleCategorias);

  document.addEventListener("click", function(event) {
    if (!event.target.closest(".todas-las-categorias") && !event.target.closest(".menu-categorias") && !categoriasDesplegable.classList.contains("hidden")) {
      toggleCategorias();
    }
  });


  // Apertura y cierre del menú "Todas las categorías" versión MOBILE

  var categoriasDisparadorMobile = document.querySelector(".todas-las-categorias-mobile");
  var categoriasDesplegableMobile = document.querySelector(".menu-categorias-mobile");
  var categoriasFlechaIzquierdaMobile = document.querySelector(".flecha-izquierda-mobile");
  var categoriasCruzMobile = document.querySelector(".cruz-mobile");

  categoriasDisparadorMobile.addEventListener("click", toggleCategoriasMobile);


  // Apertura y cierre del menú "hamburguer" del MOBILE

  var hamburguerDisparador = document.querySelector(".area-menu-hamburger");
  var hamburguerDesplegable = document.querySelector(".menu-mobile");
  var imagenHamburguer = document.querySelector(".menu-hamburger");
  var imagenCruz = document.querySelector(".menu-hamburger-close");

  hamburguerDisparador.addEventListener("click", toggleMenuHamburguer);

  document.addEventListener("click", function(event) {
    if (!event.target.closest(".area-menu-hamburger") && !event.target.closest(".menu-mobile") && !hamburguerDesplegable.classList.contains("hidden")) {
      toggleMenuHamburguer();
    }
  });

}
