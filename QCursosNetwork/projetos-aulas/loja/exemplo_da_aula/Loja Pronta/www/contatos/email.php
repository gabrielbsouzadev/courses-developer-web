<?php
$to      = 'lhcentroautomotivo.com.br, lhcentroautomotivo.com.br';
$subject = 'Loja Virtual';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>