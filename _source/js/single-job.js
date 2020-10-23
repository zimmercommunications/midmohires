(function ($) {

  $(document).ready(function(){

    //Record an apply click.
    $('.apply-button').on('click', function(e){
      var jid = $(this).attr('data-jid');
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
        }
      });
    });
  });

})(jQuery);
