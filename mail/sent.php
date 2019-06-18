<?php
    
    $nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	$consulta = $_POST["consulta"];
	$copia = $_POST["copia"];


    $destinatario = "sebastian@searq.cl";
    $asunto = "Contacto desde www.searq.cl";
    $mensaje = 
        '<html>
        <body>
        <p><img src="http://www.webinfo.cl/searq.cl/images/logos/Recurso1-4.png"></p>
        <table>
        <tr><th>Nombre</th><td>:</td><td>'.$nombre.'</td></tr>
        <tr><th>Teléfono</th><td>:</td><td>'.$telefono.'</td></tr>
        <tr><th>Email</th><td>:</td><td>'.$email.'</td></tr>
        <tr><th>Consulta</th><td>:</td><td>'.$consulta.'</td></tr>
        </table>
        <p>Gracias por su contacto, pronto nos contactaremos con usted.</p>
        </body>
        </html>';
    //para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $headers .= 'From: info@searq.cl' . "\r\n";
    if($copia=="si"){
       $headers .= 'Cc:'.$email."\r\n"; 
    }
    
    $headers .= 'X-Mailer: PHP/' . phpversion();
    mail($destinatario,$asunto,$mensaje,$headers);
    
    echo "<p style='color:green;'>¡ Muchas gracias, pronto tendremos una respuesta para usted !</p>";