$(document).ready(function(){

	$('#btn-env-email').on('click',function(e){
		e.preventDefault();

		var nombre = $('#form-nombre').val();
		var telefono = $('#form-telefono').val();
		var email = $('#form-email').val();
		var consulta = $('#FormControlTextarea').val();
		var copia = null;

		var chkNombre=false;
		var chkTelefono=false;
		var chkEmail=false;
		var chkConsulta=false;


		if( $('#copia').prop('checked') ) {
    		copia = "si";
		}else{
			copia = "no";
		}

		if (nombre!="") { chkNombre=true; }else{ colorear("#form-nombre"); }
		if (telefono!="") { chkTelefono=true; }else{ colorear("#form-telefono"); }
		if (email!="") { chkEmail=true; }else{ colorear("#form-email"); }
		if (consulta!="") { chkConsulta=true; }else{ colorear("#FormControlTextarea"); }
		

		if (chkNombre==true && chkNombre==true && chkEmail==true && chkConsulta==true) {

			 var datos = {
	                "nombre" : nombre,
	                "telefono" : telefono,
	                "email":email,
	                "consulta":consulta,
	                "copia":copia
	        };

	        $.ajax({
	                data:  datos, //datos que se envian a traves de ajax
	                url:   'mail/sent.php', //archivo que recibe la peticion
	                type:  'post', //método de envio
	                beforeSend: function () {
	                        $("#resultado").html("Enviando, por favor espere ...");
	                },
	                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
	                        $("#resultado").html(response);
	                        $('#form-nombre').val("");
							$('#form-telefono').val("");
							$('#form-email').val("");
							$('#FormControlTextarea').val("");
							$('#copia').prop('checked', false);
							
	                }
	        });

	    }else{
	    	$("#resultado").html("¡ Debe completar los datos del formulario");
	    }

		function colorear(inp){

			$(inp).css("border","1px solid red");

		}


	});

});