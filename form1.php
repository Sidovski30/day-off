<?php
$way = $_POST['way'];
$name = $_POST['name'];
$date = $_POST['date'];
$dateBack = $_POST['dateBack'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$from = $_POST['from'];
$to = $_POST['to'];

$message = "Вариант поездки: " . $way . "<br/>" . "От: ". $name . "<br/>" . "Номер телефона: " . $phone . "<br/>" . "Откуда: " . $from . "<br/>" . "Куда: " . $to . "<br/>" . "Когда туда: " . $date . "<br/>" . "Когда обратно: " . $dateBack . "<br/>" . "Примечание: " . $_POST['message'];


$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$success = mail("contact@dayoff-krakow.com", $subject, $message, $headers);
echo $success;

?>