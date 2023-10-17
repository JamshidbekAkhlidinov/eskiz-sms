<?php

use ustadev\Auth;
use ustadev\SmsMessage;

include_once "vendor/autoload.php";

$test = new Auth("jamshidbekaxlidinov2003@gmail.com", "uqxDu2V3yoRcyiuQIN56fSAEssHkOEl4fjFYWHfY");
$data = $test->login();

$token = $data['data']['token'];

$message = new SmsMessage();
$message->setToken($token);
$response = $message->sendMessage("+998911577769", "Ustadev.uz");

print_r($response);
