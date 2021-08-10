<?php
$nombre = $_POST['nombre'];  
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$consulta = $_POST['consulta'];
$menu = $_POST['menu'];

//creamos un identificador único
//para indicar que las partes son idénticas
$uniqueid= uniqid('np');
 
//indicamos las cabeceras del correo
$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: Foo \r\n";
$headers .= "Subject: Test mail\r\n";
//lo importante es indicarle que el Content-Type
//es multipart/alternative para indicarle que existirá
//un contenido alternativo
$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid. "\r\n";
 
$message = "";
 
$message .= "\r\n\r\n--" . $uniqueid. "\r\n";
$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
$message .= "Nombre de contacto:".$nombre;
 
$message .= "\r\n\r\n--" . $uniqueid. "\r\n";
$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
$message .= "<strong>Nombre contacto:</strong>".$nombre.'<br>';
$message .= "<strong>Apellido contacto:</strong>".$apellido.'<br>';
$message .= "<strong>Email contacto:</strong>".$nombre.'<br>';
$message .= "<strong>Opción de contacto:</strong>".$menu.'<br>';
$message .= "<strong>Empresa de contacto:</strong>".$empresa.'<br>';
$message .= "<strong>Consulta de contacto:</strong>".$consulta.'<br>';
$message .= "\r\n\r\n--" . $uniqueid. "--";
 
//con la función mail de PHP enviamos el mail.
mail('sacabe02@hotmail.com, contact@iterway.com', 'correo para todos', $message, $headers);









 
              echo "$email"." "."¡Gracias por comunicarse con nosotros, le respoderemos a la brevedad!";
          ?>
     


