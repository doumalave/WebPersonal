<?php

// the message
$name = $_POST["name"];
$msg = $_POST["text"];
$headers = $_POST["email"];
$phone = $_POST["phone"];

// send email
mail("doumalave@gmail.com", "contacto: $name", $msg . $phone, "From: $headers");

?>