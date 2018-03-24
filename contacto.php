<?php
	//Se inicializan las variables del formulario
	@$nombre = addslashes($_POST['nombre']);
	@$email = addslashes($_POST['email']);
	@$mensaje = addslashes($_POST['mensaje']);

	//Configuración del mensaje que será enviado
	$cabeceras = "From: ps4nchez"
					. "Reply-To: $email";
	$asunto = "Envío de comentario desde el sitio web";
	$email_to = "pasz5564@gmail.com";
	$contenido = "$nombre ha enviado un mensaje desde la página web"
				. "n"
				. "Nombre: $nombre"
				. "Email: $email"
				. "Mensaje: $mensaje"
				. "n";

	//Se utiliza la función mail, de forma provisional, ya que tiene problemas de seguridad.
	//El problema es que se puede enviar spam modificando las cabeceras
	if (@mail($email_to, $asunto ,$contenido ,$cabeceras))
	{
		//Confirmación mensaje Ok
		die("Éxito: Su mensaje se envió correctamente, nos pondremos en contacto con usted. Gracias.");
	}
	else
	{
		//Error en el envió
		die("Error: Su mensaje no pudo ser enviado, por favor intente nuevamente.");
	}
?>
