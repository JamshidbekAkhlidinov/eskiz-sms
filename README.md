# eskiz-sms

[![wakatime](https://wakatime.com/badge/user/d3110f77-d926-4238-8cdc-a8991b6685c0/project/018b3716-2c96-4a0c-acdc-44282e485800.svg)](https://wakatime.com/badge/user/d3110f77-d926-4238-8cdc-a8991b6685c0/project/018b3716-2c96-4a0c-acdc-44282e485800)

## Installation

    composer require ustadev/eskiz-sms

Or

    {
        "require": {
            "ustadev/eskiz-sms": "dev-main"
        }
    }


#### Example

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



