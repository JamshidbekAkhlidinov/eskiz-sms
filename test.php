<?php

use ustadev\sms\Auth;
use ustadev\sms\SmsMessage;

include_once "vendor/autoload.php";

$test = new Auth(
    "test@gmail.com",
    "test"
);
$token = $test->getToken();


$message = new SmsMessage();
$message->setToken($token);
$response = $message->sendMessage(
    "+998*********",
    "ustadev.uz"
);

print_r($response);

