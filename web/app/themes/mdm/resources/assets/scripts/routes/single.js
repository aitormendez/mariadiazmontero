/* eslint-disable no-unused-vars */
import 'lightgallery/dist/js/lightgallery';
import 'lightgallery/modules/lg-fullscreen';
import 'lightgallery/modules/lg-hash';

export default {
  init() {
    // JavaScript to be fired on the about us page

    $('.lightbox').lightGallery({
      selector: 'a',
      mode: 'lg-slide',
      speed: 1000,
      preload: 2,
      download: false,
      thumbContHeight: 60,
      hideBarsDelay: 1000,
    });
  },
};
