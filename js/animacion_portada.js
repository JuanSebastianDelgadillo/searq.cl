$(document).ready(function(){
	efectoImagen();

	$("#btn_inicio").on("click",function(e){
		 e.preventDefault();
		efectoImagen();
	});

	function efectoImagen(){
		var img1 = $("#imagen1");
		var img2 = $("#imagen2");
		var img3 = $("#imagen3");
		var img4 = $("#imagen4");
		var img6 = $("#imagen6");
		var img14 = $("#imagen14");
		var img7 = $("#imagen7");


		img1.fadeOut();
		


		setTimeout(function(){
			img2.fadeOut();
			img3.fadeOut();
			img1.fadeIn();
			
		},300);

		setTimeout(function(){
			img4.fadeOut();
			img6.fadeOut();
			img14.fadeOut();
			img2.fadeIn();
			img3.fadeIn();
		},500);

		setTimeout(function(){
			img7.fadeOut();
			img4.fadeIn();
			img6.fadeIn();
			img14.fadeIn();
		},800);

		setTimeout(function(){
			img7.fadeIn();
		},1100);


	}


});