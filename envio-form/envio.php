<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "jairo@pretech.mx";
$email_subject = "Contacto desde el sitio web";


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['telefono']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "<table><tr><td colspan='2'>Detalles del formulario de contacto:</td></tr>";
$email_message .= "<tr><td><strong>Nombre: </strong></td><td>" . $_POST['nombre'] . "</td></tr>";
$email_message .= "<tr><td><strong>E-mail:</strong></td><td> " . $_POST['email'] . "</td></tr>";
$email_message .= "<tr><td><strong>Teléfono:</strong></td><td> " . $_POST['telefono'] . "</td></tr>";
$email_message .= "<tr><td colspan='2'><strong>Mensaje:</strong></td></tr> ";
$email_message .= "<tr><td colspan='2'>" . $_POST['mensaje'] . "</td></tr></table>";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: hola@wayuume.com'."\r\n".
'Reply-To: hola@wayuume.com'."\r\n" .
"Content-Type: text/html; charset=UTF-8"."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>