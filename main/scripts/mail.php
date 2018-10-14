<?php

$recepient = "kostya.myndra@yandex.by";
$siteName = "Colorwave";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$text = trim($_POST["message"]);
$message = "Имя: $name \nТелефон: $phone \nEmail: $email \nСообщение: $text";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>