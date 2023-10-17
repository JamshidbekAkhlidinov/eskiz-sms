<?php

use ustadev\Auth;
use ustadev\SmsMessage;

include_once "vendor/autoload.php";

$test = new Auth(
    "jamshidbekaxlidinov2003@gmail.com",
    "uqxDu2V3yoRcyiuQIN56fSAEssHkOEl4fjFYWHfY"
);
$token = $test->getToken();


$message = new SmsMessage();
$message->setToken($token);
$response = $message->sendMessage(
    "+998911577769",
    "ustadev.uz"
);

