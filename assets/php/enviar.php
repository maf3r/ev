<?php
if(isset($_POST['email'])) {

// Debes editar las pr�ximas dos l�neas de c�digo de acuerdo con tus preferencias
$email_to = "mfce16@gmail.com";//"destinatario@sudominio.com";
$email_subject = "Sitio Web";//"Contacto desde el sitio web";
$email_from = "m_fercielo@hotmail.com";

// Aqu� se deber�an validar los datos ingresados por el usuario
if(!isset($_POST['nombres']) ||
!isset($_POST['apellidos']) ||
!isset($_POST['email']) ||
!isset($_POST['numero']) ||
!isset($_POST['motivo'])) {



echo '<script language="javascript">alert("Ocurri� un error y el formulario no ha sido enviado.");</script>';
//echo "<b>Ocurri� un error y el formulario no ha sido enviado. </b><br />";
//echo  "Por favor, vuelva atr�s y verifique la informaci�n ingresada<br />";
echo  '<script language="javascript">alert("Por favor, vuelva atr�s y verifique la informaci�n ingresada.");</script>';
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombres: " . $_POST['nombres'] . "\n";
$email_message .= "Apellidos: " . $_POST['apellidos'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Tel�fono/Celular: " . $_POST['numero'] . "\n";
$email_message .= "Comentario: " . $_POST['motivo'] . "\n\n";


// Ahora se env�a el e-mail usando la funci�n mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo '<script language="javascript">alert("mensaje enviado correctamente");</script>';  
//echo "�El formulario se ha enviado con �xito!";
header("location: ../../contacto.php");
}
?>