/* Theme Name: Jobya - Responsive Landing Page Template
   Author: Themesdesign
   Version: 1.0.0
*/


(function ($) {

    'use strict';

    //owlCarousel
    $("#owl-testi").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [979, 2]
    });

    $('body').on('loaded', function(){
      setTimeout(function(){
        $('.bg-home .back').addClass('loaded');
      }, 800);
    });

})(jQuery)
