<?php
header('Content-type: application/json; charset=utf-8');

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ENCODED);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_ENCODED);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_ENCODED);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_ENCODED);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_ENCODED);

$answer = array(
    'name' => $name,
    'email' => $email,
    'tel' => $tel,
    'message' => $message,
    'quantity' => $quantity
);
die(json_encode($answer));