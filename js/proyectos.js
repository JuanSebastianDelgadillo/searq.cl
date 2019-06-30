$(document).ready(function(){	

	$("#btn-proy-s").hover(function() {
	  $( this ).attr("src","images/imagenes/s_active.png");
	  $( this ).fadeIn( 500 );
	   console.log("move");
	}, function(){
		$( this ).fadeIn( 500 );
		$( this ).attr("src","images/imagenes/s_inactive.png");
	});

	$("#btn-proy-m").hover(function() {
	  $( this ).attr("src","images/imagenes/m_active.png");
	  $( this ).fadeIn( 500 );
	}, function(){
		$( this ).fadeIn( 500 );
		$( this ).attr("src","images/imagenes/m_inactive.png");
	});

	$("#btn-proy-l").hover(function() {
	  $( this ).attr("src","images/imagenes/l_active.png");
	  $( this ).fadeIn( 500 );
	}, function(){
		$( this ).fadeIn( 500 );
		$( this ).attr("src","images/imagenes/l_inactive.png");
	});

	$("#boton-1-left").click(function() {
    	
		 $("#contenedor-proyectos-destacados-1").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-2").animate({left:'100%'},500);
	});

	$("#boton-2-left").click(function() {
    	
		 $("#contenedor-proyectos-destacados-1").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-3").animate({left:'100%'},500);
	});

	$("#boton-3-left").click(function() {
    	
		 $("#contenedor-proyectos-destacados-1").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-4").animate({left:'100%'},500);
	});

	$("#btn-proy-s").click(function() {
    	
		 $("#contenedor-proyectos-destacados-2").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-1").animate({left:'-100%'},500);
		

	});

	$("#btn-proy-m").click(function() {
    	
		 $("#contenedor-proyectos-destacados-3").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-1").animate({left:'-100%'},500);
	});

	$("#btn-proy-l").click(function() {
    	
		 $("#contenedor-proyectos-destacados-4").animate({left:'0px'},500);
		 $("#contenedor-proyectos-destacados-1").animate({left:'-100%'},500);
	});

});