(function($){
   $(' .addPanier').click(function(event){

       event.preventDefault();

       $.get($(this).attr('href'),{},function(data){
           if(data.error){
               alert(data.message);
           }else{
               location.href = 'carte.php';
           }

       }, 'jason');
       return false;
   })
})(jQuery);
  
