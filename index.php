<!DOCTYPE html>
<html>
<head>
	<title>SEARQ :: Arquitectura y Gestión</title>
	<link rel="icon" type="image/png" href="images/logos/logo.ico" />
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo-estandar.css">
    <link rel="stylesheet" href="css/estilo-portada.css">
    <link rel="stylesheet" href="css/estilo-menu.css">
    <link rel="stylesheet" href="css/estilo-acercade.css">
    <link rel="stylesheet" href="css/estilo-nuestros.css">
    <link rel="stylesheet" href="css/estilo-proyectos-destacados.css">
    <link rel="stylesheet" href="css/estilo-contacto.css">

    

    <!-- JS  -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/acercade.js"></script>
	<script type="text/javascript" src="js/desplazamiento.js"></script>
	<script type="text/javascript" src="js/animacion_portada.js"></script>
	<script type="text/javascript" src="js/proyectos.js"></script>
	<script type="text/javascript" src="js/email.js"></script>
</head>
	<body>
		<a id="top"></a>
		<div class="container" id="container">
			<div class="contenedor-columnas">
				<div class="columna-izq" id="menu-inicio">
					<div class="cont-logo">
						<img src="images/logos/Recurso1-4.png" align="center">
					</div>
					<ul>
						<li><a href="#" class="selected" id="btn_inicio">INICIO</a></li>
						<li><a href="#" class="ancla_obras">OBRAS</a></li>
						<li><a href="#" class="ancla_proyectos">PROYECTOS</a></li>
						<li><a href="#" class="ancla_nuestros">NUESTROS SERVICIOS</a></li>
						<li><a href="#" class="ancla_contacto">CONTACTO</a></li>
					</ul>
					<div class="redes">
						<a target="_blank" href="https://instagram.com/se_arq?igshid=tciakrhdflh5"><img src="images/logos/icono-instagram.png"></a>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=+56998857628&text=Buenas,%20deseo%20contactarme%20para obtener%20más%20información"><img src="images/logos/icono-phone.png"></a>
					</div>
				</div>
				<div class="columna-der">
					<div class="columna-portada">
						<img id="imagen1" src="images/imagenes/1.png">
						<img id="imagen3" src="images/imagenes/3.png">
						<img id="imagen14" src="images/imagenes/14.png">
					</div>
					<div class="columna-portada">
						<img id="imagen2" src="images/imagenes/2.png">
						<img id="imagen6" src="images/imagenes/6.png"></div>
					<div class="columna-portada">
						<img id="imagen4" src="images/imagenes/4.png">
						<img id="imagen7" src="images/imagenes/7.png">
					</div>
				</div>
				<div class="cont-bajo-redes">
					<div class="redes">
						<a target="_blank" href="https://instagram.com/se_arq?igshid=tciakrhdflh5"><img src="images/logos/icono-instagram.png"></a>
						<a target="_blank" href="https://api.whatsapp.com/send?phone=+56998857628&text=hola,%20¿qué%20tal%20estás?"><img src="images/logos/icono-phone.png">
						</a>
					</div>
				</div>
			</div>
			
			<!-- Contenedor titulo obras -->
			<div class="cont-titulo">
				<div class="titulo">
					<a href="#" class="ancla_obras">obras</a>
					<a id="obras"></a>
				</div>
				<div class="cont-botones">
					
					<div class="boton-actual" id="bot-acerca-actual"></div>
					<div class="boton-atras" id="bot-acerca-atras"></div>
					<div class="boton-delante" id="bot-acerca-delante"></div>
				</div>
			</div>
			<!-- Contenedor titulo obras -->
			<div class="contenedor-proyectos-destacados" id="contenedor-proyectos-destacados">
				<div class="contenedor-proyectos-destacados-1" id="contenedor-proyectos-destacados-1">
					<div class="cont-de-letras">
						<div class="proy-s">
							<img src="images/imagenes/s_inactive.png" id="btn-proy-s">
						</div>
						<div class="proy-s">
							<img src="images/imagenes/m_inactive.png" id="btn-proy-m">
						</div>
						<div class="proy-s">
							<img src="images/imagenes/l_inactive.png" id="btn-proy-l">
						</div>
					</div>
					
				</div>
				<div class="contenedor-proyectos-destacados-2" id="contenedor-proyectos-destacados-2">
					<div class="botones-grandes-izq">
						<div class="boton-izq-grande">
							<img src="images/logos/icon-arrow-left.png" id="boton-1-left">
						</div>
					</div>
					<div class="contenedor-de-proyectos">
					<?php

						// $data = file_get_contents("json/proyectos.json");
						$data = file_get_contents("json/proyectos_s.json");
						$con = utf8_encode($data);
						$datos = json_decode($data,true);

						$proyectos = $datos["proyectos"];
						?>
					<div class="colum-proy">
						<div class="colum-proy-1">
							<div class="texto-oculto" style="overflow: hidden;">
								<label id="txt-proy1"><?php echo $proyectos["proy1"]["nombre"]; ?></label>
								<img src="<?php echo $proyectos["proy1"]["foto_portada"]; ?>">
							</div>
							
							<img src="<?php echo $proyectos["proy5"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy8"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-2">
							<img src="<?php echo $proyectos["proy2"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy6"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy9"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-3">
							<img src="<?php echo $proyectos["proy3"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy7"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy8"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-4">
							<img src="<?php echo $proyectos["proy4"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy1"]["foto_portada"]; ?>">
						</div>
					</div>

					?>
				
					</div>
				</div>
				<div class="contenedor-proyectos-destacados-3" id="contenedor-proyectos-destacados-3">
					<div class="botones-grandes-izq">
						<div class="boton-izq-grande">
							<img src="images/logos/icon-arrow-left.png" id="boton-2-left">
						</div>
					</div>
										<div class="contenedor-de-proyectos">
					<?php

						// $data = file_get_contents("json/proyectos.json");
						$data = file_get_contents("json/proyectos_m.json");
						$con = utf8_encode($data);
						$datos = json_decode($data,true);

						$proyectos = $datos["proyectos"];
						?>
					<div class="colum-proy">
						<div class="colum-proy-1">
							<div class="texto-oculto" style="overflow: hidden;">
								<label id="txt-proy1"><?php echo $proyectos["proy1"]["nombre"]; ?></label>
								<img src="<?php echo $proyectos["proy1"]["foto_portada"]; ?>">
							</div>
							
							<img src="<?php echo $proyectos["proy5"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy8"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-2">
							<img src="<?php echo $proyectos["proy2"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy6"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy9"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-3">
							<img src="<?php echo $proyectos["proy3"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy7"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy8"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-4">
							<img src="<?php echo $proyectos["proy4"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy1"]["foto_portada"]; ?>">
						</div>
					</div>

					?>
				
					</div>
				</div>
				<div class="contenedor-proyectos-destacados-4" id="contenedor-proyectos-destacados-4">
					<div class="botones-grandes-izq">
						<div class="boton-izq-grande">
							<img src="images/logos/icon-arrow-left.png" id="boton-3-left">
						</div>
					</div>
										<div class="contenedor-de-proyectos">
					<?php

						// $data = file_get_contents("json/proyectos.json");
						$data = file_get_contents("json/proyectos_l.json");
						$con = utf8_encode($data);
						$datos = json_decode($data,true);

						$proyectos = $datos["proyectos"];
						?>
					<div class="colum-proy">
						<div class="colum-proy-1">
							<div class="texto-oculto" style="overflow: hidden;">
								<label id="txt-proy1"><?php echo $proyectos["proy1"]["nombre"]; ?></label>
								<img src="<?php echo $proyectos["proy1"]["foto_portada"]; ?>">
							</div>
							
							<img src="<?php echo $proyectos["proy5"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy8"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-2">
							<img src="<?php echo $proyectos["proy2"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy6"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy9"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-3">
							<img src="<?php echo $proyectos["proy3"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy7"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy8"]["foto_portada"]; ?>">
						</div>
						<div class="colum-proy-4">
							<img src="<?php echo $proyectos["proy4"]["foto_portada"]; ?>">
							<img src="<?php echo $proyectos["proy1"]["foto_portada"]; ?>">
						</div>
					</div>

					?>
				
					</div>
				</div>
				

			</div>
			<!-- Icono top -->
			<div class="ancla-top"><img class="button-top" src="images/logos/icon-top.png"></div>
			<!-- Icono top -->
			<div class="cont-titulo" id="contenedor-completo-acercade">
				<div class="titulo">
					<a href="#" class="ancla_proyectos">proyectos</a>
					<a id="proyectos"></a>
				</div>
				<div class="cont-botones">
					<div class="boton-actual" id="bot-acerca-actual"></div>
					<div class="boton-delante" id="bot-acerca-delante"></div>
				</div>
			</div>
			<div class="contenedor-acercade" id="contenedor-acercade">
				<div class="cont-acercade" id="cont-acerca">
					<div class="cont-acerca-1" id="cont-acerca-1">
						<img src="images/imagenes/8.png">
					</div>
					<div class="cont-acerca-1" id="cont-acerca-2">
						<img src="images/imagenes/9.png">
					</div>
					<div class="cont-acerca-1" id="cont-acerca-3">
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando <p><a href="#" id="bot-acerca-delante-2">Leer más</a></p>

					</div>
				</div>
				<div class="cont-acercade" id="cont-de">
					Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
				</div>
			</div>
			<!-- Icono top -->
			<div class="ancla-top"><img class="button-top" src="images/logos/icon-top.png"></div>
			<!-- Icono top -->
			
			<!-- Contenedor titulo nuestros servicios -->
			<div class="cont-titulo">
				<div class="titulo">
					<a href="#" class="ancla_nuestros">nuestros servicios</a>
					<a id="nuestros"></a>
				</div>
				<div class="cont-botones">
					<div class="boton-atras" id="bot-acerca-atras"></div>
					<div class="boton-actual" id="bot-acerca-actual"></div>
					<div class="boton-delante" id="bot-acerca-delante"></div>
				</div>
			</div>
			<!-- Contenedor titulo nuestros servicios -->
			<div class="contenedor-nuestros-servicios" id="contenedor-nuestros-servicios">
				<div class="contenedor-nuestros" id="contenedor-nuestros">
					<div class="cont-servicios">
						<div class="servicios">
							<table>
								<tr><td><img src="images/imagenes/icon_plano.png"></td></tr>
								<tr><th>Pericia Interior</th></tr>
								<tr><td>
									Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor
								</td></tr>
							</table>
						</div>
						<div class="servicios">
							<table>
								<tr><td><img src="images/imagenes/icon_diseno.png"></td></tr>
								<tr><th>Experiencia Exterior</th></tr>
								<tr><td>
									Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor
								</td></tr>
							</table>
						</div>
						<div class="servicios">
							<table>
								<tr><td><img src="images/imagenes/icon_otra.png"></td></tr>
								<tr><th>Diseño de oficina</th></tr>
								<tr><td>
									Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor
								</td></tr>
							</table>
						</div>
						<div class="servicios">
							<table>
								<tr><td><img src="images/imagenes/icon_arq.png"></td></tr>
								<tr><th><br>Arquitectura</br></th></tr>
								<tr><td>
									Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor
								</td></tr>
							</table>
						</div>
					</div>
					<div class="servicios-imagen">
						<img src="images/imagenes/10.png">
					</div>
				</div>
			</div>
			<!-- Icono top -->
			<div class="ancla-top"><img class="button-top" src="images/logos/icon-top.png"></div>
			<!-- Icono top -->
			<!-- Contenedor titulo contacto -->
			<div class="cont-titulo">
				<div class="titulo">
					<a href="#" class="ancla_contacto">contacto</a>
					<a id="contacto"></a>
				</div>
				<div class="cont-botones">
					<div class="boton-atras" id="bot-acerca-atras"></div>
					<div class="boton-actual" id="bot-acerca-actual"></div>
					<div class="boton-delante" id="bot-acerca-delante"></div>
				</div>
			</div>
			<!-- Contenedor titulo contacto -->
			<div class="contenedor-contacto" id="contenedor-contacto">
				<div class="contacto">
					<form>
					  <div class="form-group">
					  	<label for="exampleInputEmail1">Nombre Completo</label>
					    <input type="text" class="form-control" id="form-nombre" aria-describedby="emailHelp" placeholder="Nombre Completo"required>   
					  </div>
					  <div class="form-group">
					  	<label for="exampleInputEmail1">Teléfono</label>
					    <input type="number" class="form-control" id="form-telefono" aria-describedby="emailHelp" placeholder="912341234" required>   
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email</label>
					    <input type="email" class="form-control" id="form-email" aria-describedby="emailHelp" placeholder="Enter email" required>
					    <small id="emailHelp" class="form-text text-muted">Ingrese un email válido</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Su consulta</label>
					    <textarea class="form-control" id="FormControlTextarea" rows="3" required></textarea>
					  </div>
					  <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="copia">
					    <label class="form-check-label" for="exampleCheck1">Enviarme una copia</label>
					  </div>
					  <br>
					  <button type="submit" class="btn btn-primary" id="btn-env-email">Enviar</button>
					</form>
					<br><br>
					<p id="resultado"></p>
				</div>
			</div>
			<!-- Icono top -->
			<div class="ancla-top"><img class="button-top" src="images/logos/icon-top.png"></div>
			<!-- Icono top -->
			<div class="row">
				<div class="cont_logo_footer">
					<img src="images/logos/Recurso1-2.png">
				</div>
			</div>
			
		</div>
		<div class="copyright">
			Diseñado por webinfo.cl
		</div>
	</body>
</html>