<?php

namespace ustadev;

class Auth extends Base
{
    use Cash;

    public function __construct(
        public $email,
        public $password,
    )
    {
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
            return  $token;
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