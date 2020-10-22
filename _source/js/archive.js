(function ($) {

  $(document).ready(function(){

    //Grab categories
    $("#search-simple").on('submit', function(e){
      $(this).find('input[type="checkbox"]').remove();
      $('#companiesjobcat input, #companiescollapse input').each(function(){
        if($(this).prop('checked')){
          $(this).clone().appendTo('#search-simple');
        }
      });
    });

    //Listen for checked filter
    $('#companiesjobcat input[type="checkbox"], #companiescollapse input[type="checkbox"]').on('change', function(){
      $('#search-simple input[type="submit"]').trigger('click');
    });
  });

})(jQuery);
