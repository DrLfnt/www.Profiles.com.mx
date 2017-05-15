<?php
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) ){
$to = "contacto@profiles.com.mx";
$subject = "Mensaje Enviado";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Comentario: ".$_POST["comentario"]."\n\n";
$header = "From: contacto@profiles.com.mx\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo "Mail Enviado.";
}
}
?>