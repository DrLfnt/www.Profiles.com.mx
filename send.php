<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Contacto Profiles</title> <!-- Aquí va el título de la página -->

</head>

<body>
<?php


$Nombre = $_POST['nombre'];
$Correo = $_POST['email'];
$Mensaje = $_POST['comentario'];

if ($Nombre=='' || $Correo=='' || $Mensaje==''){

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require("includes/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = "enviar@profiles.com.mx";   
    $mail->FromName = $Nombre; 
    $mail->AddAddress("dr.lfnt@gmail.com"); // Dirección a la que llegaran los mensajes, este lo puedes cambiar para test



    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br />".
    "Email: $Correo \n<br />".
    "Mensaje: $Mensaje \n<br />";



    $mail->IsSMTP(); 
    $mail->Host = "profiles.com.mx";  
    $mail->SMTPAuth = true; 
    $mail->Username = "enviar@profiles.com.mx";  
    $mail->Password = "GB7sTG7QMmG("; 

    if ($mail->Send())
        
    echo "<script>alert('Mensaje enviado correctamente');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>
