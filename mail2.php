<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'osm-group-out@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'LaHUUsvpgYp4SVcT2xUA'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('osm-group-out@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('info@ocm-expert.com');     // Кому будет уходить письмо 
//   


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта OСM-group';
$mail->Body    = '' .$name . ' оставил заявку о том, чтобы с ним связались.<br> Телефон заказчика:' .$phone. '<br>Почта заказчика: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you-en.html');
}
?>