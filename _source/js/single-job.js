(function ($) {

  $(document).ready(function(){

    //Record an apply click.
    $('.apply-button').on('click', function(e){
      var jid = $(this).attr('data-jid');
      var href = $(this).attr('href');
      $.ajax({
        url: ajaxurl,
        type: "POST",
        dataType: "json",
        data:{
          action: "record_connection",
          job_id: jid
        },
        success: function(data){
          console.log(data);
          gtag('event', 'conversion', { 'send_to': 'AW-462592228/VxjOCKHr3PkBEOSxytwB' });
        }
      });
    });
  });

})(jQuery);
