$(document).ready(function(){

	// $("#cont-acerca").css("","");
	// $("#cont-de").css("display","none");


	function mover_acerca_de(e){
		e.preventDefault();
		$("#contenedor-acercade").css("margin-left", "-150%");
		$("#bot-acerca-delante").css("background", "#333");
		$("#bot-acerca-actual").css("background","#dedede");
		$("#cont-de").css("display","block");

	}
	$("#bot-acerca-delante-2").on("click", function(e){
		mover_acerca_de(e);
	});

	$("#bot-acerca-delante").on("click", function(e){
		mover_acerca_de(e);
	});

	$("#bot-acerca-actual").on("click", function(){
		$("#contenedor-acercade").css("margin-left", "0");
		$("#bot-acerca-delante").css("background", "#dedede");
		$("#bot-acerca-actual").css("background","#333");
		setTimeout(function(){
			$("#cont-de").css("display","none");
		},1000);
		
	});

});