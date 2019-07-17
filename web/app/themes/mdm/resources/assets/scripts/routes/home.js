/* eslint-disable no-unused-vars */
var jQueryBridget = require('jquery-bridget');
var Isotope = require('isotope-layout');
jQueryBridget( 'isotope', Isotope, $ );
var imagesLoaded = require('imagesloaded');

export default {
  init() {
    // JavaScript to be fired on the home page


    // Isotope
    // ------------------------------------------------------------

    let $grid = $('.grid');

    $grid.isotope({
      // options
    });

    $('.filter-button-group').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
