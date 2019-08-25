<?php

require 'PHPMailer/PHPMailerAutoload.php';

// ==== Принудительный захват массива переменных ==========================
// ==== раскомментировать, если письма отправляются без значений полей ====
$text       = '';
$adminEmail = 'kacevnik@yandex.ru';
$email      = $_POST['name'];     		if($email){$text      = 'Имя: '.$email.'<br>';}
$phone      = $_POST['age'];     		if($phone){$text      = $text.'Возраст: '.$phone.'<br>';}
$name       = $_POST['country'];     		if($name){$text       = $text.'Страна: '.$name.'<br>';}
$name       = $_POST['city'];     		if($name){$text       = $text.'Город: '.$name.'<br>';}
$name       = $_POST['rost'];     		if($name){$text       = $text.'Рост: '.$name.'<br>';}
$name       = $_POST['wes'];     		if($name){$text       = $text.'Вес: '.$name.'<br>';}
$name       = $_POST['phone'];     		if($name){$text       = $text.'Телефон: '.$name.'<br>';}
$name       = $_POST['profil'];     		if($name){$text       = $text.'Профиль: '.$name.'<br>';}
$name       = $_POST['message'];     		if($name){$text       = $text.'Сообщение: '.$name.'<br>';}
$form       = $_POST['form'];



$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';                         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'zhk.veneciya@mail.ru';           // SMTP username zhk.veneciya@mail.ru
$mail->Password = 'Z9564665z';                        // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('zhk.veneciya@mail.ru', '');
$mail->addAddress($adminEmail, $adminEmail);          // Add a recipient            

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $form;
$mail->Body    = $text;


if(!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
}