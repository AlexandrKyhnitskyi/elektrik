$(document).ready(function() {

    $('form').submit(function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
       // //  var request = $.ajax({
       // //      url: url,
       // //      method: "POST",
       // //      data: data
       // //  });
       //
       //  console.log('kjhgliuhgilu');
       //  console.log($(this).attr('id'));
       //
       //  return false;
       //
       //  request.done(function( msg ) {
       //      alert( "Прибыли данные: " + msg );
       //  });
       //
       //  request.fail(function( jqXHR, textStatus ) {
       //      alert( "Request failed: " + textStatus );
       //  });

         $.ajax({
             type: "POST",
             url: url,
             data: data,
             success: function(msg){
                 console.log( "Прибыли данные: " + msg );
             }
          });
    });
});