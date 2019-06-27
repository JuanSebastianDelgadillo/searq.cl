$(document).ready(function(){

    $(".button-top").on('click', function(e) {
        e.preventDefault();
        var top = "#top"; 
       $("HTML, BODY").animate({ scrollTop: 0 }, 1500); 
    }); 

    $(".ancla_obras").on('click', function(e) {
         e.preventDefault();
        var codigo = "#obras";
         $("HTML, BODY").animate({ scrollTop: $(codigo).offset().top }, 1500); 
     });

     $(".ancla_nuestros").on('click', function(e) {
         e.preventDefault();
        var codigo = "#nuestros";
         $("HTML, BODY").animate({ scrollTop: $(codigo).offset().top }, 1500); 
     });
     $(".ancla_proyectos").on('click', function(e) {
         e.preventDefault();
        var codigo = "#proyectos";
         $("HTML, BODY").animate({ scrollTop: $(codigo).offset().top }, 1500); 
     });
     $(".ancla_contacto").on('click', function(e) {
         e.preventDefault();
        var codigo = "#contacto";
         $("HTML, BODY").animate({ scrollTop: $(codigo).offset().top }, 1500); 
     });   

});