$(document).ready(function(){

	$("#boton-acercade").on("click", function(){
		alert("hellow");
		$("#container").css("top","-100%");
	});

	$("#bot-acerca-delante-2").on("click", function(e){
		e.preventDefault();
		$("#contenedor-acercade").css("margin-left", "-150%");
		$("#bot-acerca-delante").css("background", "#333");
		$("#bot-acerca-actual").css("background","#dedede");
	});

	$("#bot-acerca-delante").on("click", function(){
		$("#contenedor-acercade").css("margin-left", "-150%");
		$("#bot-acerca-delante").css("background", "#333");
		$("#bot-acerca-actual").css("background","#dedede");
	});

	$("#bot-acerca-actual").on("click", function(){
		$("#contenedor-acercade").css("margin-left", "0");
		$("#bot-acerca-delante").css("background", "#dedede");
		$("#bot-acerca-actual").css("background","#333");
	});

});