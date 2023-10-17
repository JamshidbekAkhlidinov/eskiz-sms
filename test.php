<?php

use ustadev\SmsMessage;

include_once "src/Auth.php";
include_once "src/SmsMessage.php";


$update = new SmsMessage();
$dump = $update->sendMessage("+998911577769","Salom nima gap. akhlidinov.uz");

//$login = new Auth();
//$dump = $login->login();
//file_put_contents("data/token.json", $dump);

file_put_contents("data/message.json", $dump);
