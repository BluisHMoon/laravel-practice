
$(document).ready(function(){
    wdth=$(window).width();
    if(wdth >991){
        $( ".dropdown" ).hover(
          function() {
            $( this ).addClass( "open" );
          }, function() {
            $( this ).removeClass( "open" );
          }
        );
    }

});