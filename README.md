# eskiz-sms


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
    
    use ustadev\Auth;
    use ustadev\SmsMessage;
    
    include_once "vendor/autoload.php";
    
    $test = new Auth(
        "test@gmail.com",
        "test"
    );
    $token = $test->getToken();
    
    
    $message = new SmsMessage();
    $message->setToken($token);
    $response = $message->sendMessage(
        "+998901234567",
        "ustadev.uz"
    );

