<?php
if(isset($_POST['email'])){
  $email_to = "contacto@elchiquillan.cl";
  $email_subject = "contacto web";

}
$email_message = "detalles del formulario";
$email_message .= "Nombre: ".$_POST['nombre'] . "\n";
$email_message .= "email: ".$_POST['email'] . "\n";
$email_message .= "Comentarios: ".$_POST['mensaje'] . "\n";
$email_message .= "telefono: ".$_POST['tel'] . "\n\n";

$headers = 'From: '.$email_from."\r\n".
@mail($email_to, $email_subject, $email_message, $headers);

$header("Location: index.html");

?>
