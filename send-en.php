<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Contacto Profiles</title>

</head>

<body>
<?php


$Nombre = $_POST['nombre'];
$Correo = $_POST['email'];
$Oficina = $_POST['oficina'];
$Movil = $_POST['movil'];
$Asunto = $_POST['asunto'];
$Mensaje = $_POST['comentario'];

if ($Nombre=='' || $Correo=='' || $Oficina=='' || $Movil=='' || $Asunto=='' || $Mensaje==''){

echo "<script>alert('Fields marked with * are required');location.href ='javascript:history.back()';</script>";

}else{
    require("includes/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->From     = "enviar@profiles.com.mx";   
    $mail->FromName = $Nombre; 
    $mail->AddAddress("edgar.rivas@profiles.com.mx");
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Name: $Nombre \n<br />".
    "Email: $Correo \n<br />".
    "Office: $Oficina \n<br />".
    "Mobile: $Movil \n<br />".
    "Matter: $Asunto \n<br />".
    "Message: $Mensaje \n<br />";
    $mail->IsSMTP(); 
    $mail->Host = "mail.profiles.com.mx";  
    $mail->SMTPAuth = true; 
    $mail->Username = "enviar@profiles.com.mx";  
    $mail->Password = "GB7sTG7QMmG("; 

    if ($mail->Send())
        
    echo "<script>location.href ='javascript:history.back()';</script>";
    else
    echo "<script>location.href ='javascript:history.back()';</script>";

}

?>
</body>
</html>