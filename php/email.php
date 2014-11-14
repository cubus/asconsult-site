<?php
require_once('../layouts/_utils.php');
define('EMAIL_ADMIN_SENT_TO', 'office@asconsult.ro');
define('EMAIL_ADMIN_SUBJECT', 'Formular de contact asconsult.ro');
define('EMAIL_CLIENT_SUBJECT', 'Formular de contact asconsult.ro');

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: formular-de-contact@asconsult.ro\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$errors = array();
$name    = strip_tags(trim(!empty($_POST['name'])  ? $_POST['name']  : ''));
$email   = strip_tags(trim(!empty($_POST['email']) ? $_POST['email'] : ''));
$message = nl2br(strip_tags(trim(!empty($_POST['message']) ? $_POST['message'] : '')));

if (empty($name)) {
    $errors[] = 'name';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email';
}

if (empty($message)) {
    $errors[] = 'message';
}

$response = array('status' => 'ok');

$datetime = date('Y-m-d H:i:s');

$letterToAdmin = <<<MSG
<html>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

    <strong>Mesaj de pe formularul de contact</strong><br/>
    De la: {$name} <a href="mailto:{$email}">{$email}</a><br/>
    Mesaj: <br/>
    {$message} <br/><br/>
    Trimis la {$datetime}
</body>
</html>
MSG;

if (empty($errors)) {
    mail(EMAIL_ADMIN_SENT_TO, EMAIL_ADMIN_SUBJECT, $letterToAdmin, $headers);
} else {
    $response = array('status' => 'error', 'errors' => $errors);
}

die(json_encode($response));