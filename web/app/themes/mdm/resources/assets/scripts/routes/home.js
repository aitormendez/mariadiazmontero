/* eslint-disable no-unused-vars */
var jQueryBridget = require('jquery-bridget');
var Isotope = require('isotope-layout');
jQueryBridget( 'isotope', Isotope, $ );
var imagesLoaded = require('imagesloaded');

export default {
  init() {
    // JavaScript to be fired on the home page

    let viewportWidth = $(window).width();

    // banner navegación
    // ------------------------------------------------------------
    let $banner = $('.banner');

    const banner = {
      estado: 'abierto',
      cerrar: function() {
        this.estado = 'cerrado';
        $banner.addClass('cerrado');
      },
      abrir: function() {
        this.estado = 'abierto';
        $banner.removeClass('cerrado');
      },
    }

    // detectar dirección scroll
    let w = $(window),
        lastY = w.scrollTop();

    w.on('scroll', function() {
      let
          currY = w.scrollTop(),
          currDireccion = (currY > lastY) ? 'down' : 'up';
          if (viewportWidth > 1000) {
            if (currY === 0 && banner.estado === 'cerrado') {
              banner.abrir();
            } else if (currY != 0) {
              switch (currDireccion + ' ' + banner.estado) {
                case 'down abierto':
                  banner.cerrar();
                  break;

                case 'up cerrado':
                  banner.abrir();
                  break;

                default:
                  break;
              }
            }
          }
          lastY = currY;
    });


    // Isotope
    // ------------------------------------------------------------

    let $grid = $('.grid');

    $grid.isotope({
      // options
    });

    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
      $(this).addClass('active');
      $('.button-group button').not(this).removeClass('active');
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
