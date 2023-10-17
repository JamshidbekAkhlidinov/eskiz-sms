<?php

namespace ustadev;

class SmsMessage extends Base
{
    public function setFunction($token)
    {
        $this->token = $token;
    }

    public function sendMessage($phone_number, $text)
    {
        return $this->reuquest('send', [
            'mobile_phone' => str_replace("+", '', $phone_number),
            'message' => $text,
            'from' => '4546',
            'callback_url' => 'http://0000.uz/test.php'
        ]);
    }

    public function sendMessageGlobal($phone_number, $text)
    {
        return $this->reuquest('send', [
            'mobile_phone' => str_replace("+", '', $phone_number),
            'message' => $text,
            'from' => '4546',
            'country_code' => 'UZ',
            'callback_url' => 'http://0000.uz/test.php'
        ]);
    }

    public function reuquest($method, $options = [])
    {
        return parent::reuquest("message/sms/" . $method, $options);
    }
}