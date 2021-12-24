<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
 
$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('uk', 'phpmailer/language/');
$mail->IsHTML(true);

// от кого письмо
$mail->setFrom($_POST['email'], $_POST['name']);
// кому отпoравить
$mail->addAddress('volodymyryablonskyi@gmail.com');
// тема письма
$mail->Subject = "Ключ активації ПЗ 'Математика' ";
 
// обработчик фрмы
$body = "<h1>Форма для отримання ключа</h1>";
if(trim(!empty($_POST['name']))) {
   $body.="<p><strong>Ім'я та призвіще:</strong> ".$_POST['name'].'</p>'; 
}
if(trim(!empty($_POST['email']))) {
    $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>'; 
}
if(trim(!empty($_POST['numer']))) {
    $body.="<p><strong>Номер телефону:</strong> ".$_POST['numer'].'</p>'; 
}
if(trim(!empty($_POST['kod']))) {
    $body.="<p><strong>Код компю'тера:</strong> ".$_POST['kod'].'</p>'; 
}
if(trim(!empty($_POST['message']))) {
    $body.='<p><strong>Повідомлення:</strong> '.$_POST['message'].'</p>'; 
}


$mail->Body = $body;
 
// отправляем
if(!$mail->send()) {
    $message = 'Помилка';
} else {
    $message = 'Дані відправлено';
}
 
$response = ['message' => $message];
 
header('Content-type: application/json');
echo json_encode($response);
?>