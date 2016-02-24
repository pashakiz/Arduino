<?php

$recepient = "pashakiz@gmail.com";
$sitename = "Arduino";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$org = trim($_POST["org"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name\r\nEmail: $email\r\nТелефон: $phone\r\nУчебное заведение: $org";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"$EOL From: $name <$email>");