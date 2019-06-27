$(document).ready(function(){	

	$("#btn-proy-s").click(function() {
    	
		 // $("#contenedor-proyectos-destacados-2").animate({left:'0px'},500);
		 // $("#contenedor-proyectos-destacados-1").animate({left:'-100%'},500);
		 alert("move");

	});

	$("#boton-1-right").click(function() {
    	
		 $("#contenedor-proyectos-destacados-2").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-1").animate({left:'-100%'},500);
	});

	$("#boton-2-left").click(function() {
    	
		 $("#contenedor-proyectos-destacados-1").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-2").animate({left:'100%'},500);
	});

	$("#boton-2-right").click(function() {
    	
		 $("#contenedor-proyectos-destacados-3").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-2").animate({left:'-100%'},500);
	});

	$("#boton-3-left").click(function() {
    	
		 $("#contenedor-proyectos-destacados-2").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-3").animate({left:'100%'},500);
	});

});