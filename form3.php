<?php
$name = $_POST['name'];
$email = $_POST['email'];
$faqReason = $_POST['faqReason'];
$faqNamedate = $_POST['faqNamedate'];


$message = "От: ". $name . "<br/>" . "Название или дата поездки" . $faqNamedate . "<br/>" . "Причина: " . $faqReason . "<br/>" . "Подробности: " . $_POST['faqDetail'];


$subject = "=?utf-8?B?".base64_encode("Жалоба с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$success = mail("contact@dayoff-krakow.com", $subject, $message, $headers);
echo $success;

?>