<?php

namespace ustadev\sms;

class Auth extends Base
{
    use Cash;

    public $email;
    public $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function login()
    {
        return $this->reuquest("login", [
            'email' => $this->email,
            'password' => $this->password
        ]);
    }

    public function getToken()
    {
        if ($token = $this->getCash()) {
            return $token;
        }

        $data = $this->login();
        if (isset($data['message']) && $data['message'] == "token_generated") {
            $token = $data['data']['token'];
            $this->addCash($token);
            return $token;
        }

        return [
            'success' => false,
            'message' => $data['message'] ?? 'Error request',
        ];
    }


    public function reuquest($method, $options = [])
    {
        return parent::reuquest("auth/" . $method, $options);
    }
}