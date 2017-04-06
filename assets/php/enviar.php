<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "mfce16@gmail.com";//"destinatario@sudominio.com";
$email_subject = "Sitio Web";//"Contacto desde el sitio web";
$email_from = "m_fercielo@hotmail.com";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombres']) ||
!isset($_POST['apellidos']) ||
!isset($_POST['email']) ||
!isset($_POST['numero']) ||
!isset($_POST['motivo'])) {



echo '<script language="javascript">alert("Ocurrió un error y el formulario no ha sido enviado.");</script>';
//echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
//echo  "Por favor, vuelva atrás y verifique la información ingresada<br />";
echo  '<script language="javascript">alert("Por favor, vuelva atrás y verifique la información ingresada.");</script>';
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombres: " . $_POST['nombres'] . "\n";
$email_message .= "Apellidos: " . $_POST['apellidos'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono/Celular: " . $_POST['numero'] . "\n";
$email_message .= "Comentario: " . $_POST['motivo'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo '<script language="javascript">alert("mensaje enviado correctamente");</script>';  
//echo "¡El formulario se ha enviado con éxito!";
header("location: ../../contacto.php");
}
?>