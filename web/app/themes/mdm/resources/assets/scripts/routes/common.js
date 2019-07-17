/* eslint-disable no-unused-vars */
import {
  TweenMax,
  Elastic,
} from 'gsap/src/minified/TweenMax.min';

export default {
  init() {
    // JavaScript to be fired on all pages

    // hamburger js
    // ------------------------------------------------------------

    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
    });

    // Particles js
    // ------------------------------------------------------------

    const url = 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js';

    /* eslint-disable no-undef */

    $.getScript( url )
        .done(function(  ) {
            particlesJS('particles-js', {
                'particles': {
                    'number': {
                        'value': 80,
                        'density': {
                            'enable': true,
                            'value_area': 700,
                        },
                    },
                    'color': {
                        'value': '#ffffff',
                    },
                    'shape': {
                        'type': 'circle',
                        'stroke': {
                            'width': 0,
                            'color': '#000000',
                        },
                        'polygon': {
                            'nb_sides': 5,
                        },
                    },
                    'opacity': {
                        'value': 0.5,
                        'random': false,
                        'anim': {
                            'enable': false,
                            'speed': 1,
                            'opacity_min': 0.1,
                            'sync': false,
                        },
                    },
                    'size': {
                        'value': 3,
                        'random': true,
                        'anim': {
                            'enable': false,
                            'speed': 40,
                            'size_min': 0.1,
                            'sync': false,
                        },
                    },
                    'line_linked': {
                        'enable': true,
                        'distance': 150,
                        'color': '#ffffff',
                        'opacity': 0.4,
                        'width': 1,
                    },
                    'move': {
                        'enable': true,
                        'speed': 1,
                        'direction': 'none',
                        'random': false,
                        'straight': false,
                        'out_mode': 'out',
                        'bounce': false,
                        'attract': {
                            'enable': false,
                            'rotateX': 600,
                            'rotateY': 1200,
                        },
                    },
                },
                'interactivity': {
                    'detect_on': 'canvas',
                    'events': {
                        'onhover': {
                            'enable': true,
                            'mode': 'bubble',
                        },
                        'onclick': {
                            'enable': true,
                            'mode': 'push',
                        },
                        'resize': true,
                    },
                    'modes': {
                        'grab': {
                            'distance': 140,
                            'line_linked': {
                                'opacity': 1,
                            },
                        },
                        'bubble': {
                            'distance': 50,
                            'size': 10,
                            'duration': 2,
                            'opacity': 8,
                            'speed': 3,
                        },
                        'repulse': {
                            'distance': 50,
                            'duration': 0.4,
                        },
                        'push': {
                            'particles_nb': 4,
                        },
                        'remove': {
                            'particles_nb': 2,
                        },
                    },
                },
                'retina_detect': true,
            })
        })
        .fail(function( ) {
            alert()
        });



    console.log(particlesJS)
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
