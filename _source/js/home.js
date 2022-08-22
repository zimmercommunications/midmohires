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

})(jQuery);

//Check for empty company field on search
jQuery('#search').submit(function() {
  var company = jQuery('#select-company').val(); 
  if (company === undefined || company === "" || company === "Company") {
    jQuery('#select-company').remove();
  } else {
    jQuery('#select-company').attr('name', 'company');        
  }
});

//Check for empty Category field on search
jQuery('#search').submit(function() {
  var category = jQuery('#select-category').val(); 
  if (category === undefined || category === "" || category === "Category") {
    jQuery('#select-category').remove();
  } else {
    jQuery('#select-category').attr('name', 'category');        
  }
});