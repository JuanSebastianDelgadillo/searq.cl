$(document).ready(function(){

    $(".button-top").on('click', function(e) {
        e.preventDefault();
        var top = "#top"; 
       $("HTML, BODY").animate({ scrollTop: 0 }, 1500); 
    }); 

    $(".ancla_acercade").on('click', function(e) {
         e.preventDefault();
        var codigo = "#acercade";
         $("HTML, BODY").animate({ scrollTop: $(codigo).offset().top }, 1500); 
     });

     $(".ancla_nuestros").on('click', function(e) {
         e.preventDefault();
        var codigo = "#nuestros";
         $("HTML, BODY").animate({ scrollTop: $(codigo).offset().top }, 1500); 
     }); 

});


// <script>
//   //Cuando cargue la página completamente
//   $(document).ready(function(){
//     //Creamos un evento click para el enlace
//     $(".ancla").click(function(evento){
//       //Anulamos la funcionalidad por defecto del evento
//       evento.preventDefault();
//       //Creamos el string del enlace ancla
//       var codigo = "#" + $(this).data("ancla");
//       //Funcionalidad de scroll lento para el enlace ancla en 3 segundos
//       $("html,body").animate({scrollTop: $(codigo).offset().top}, 3000);
//     });
//   });
// </script>