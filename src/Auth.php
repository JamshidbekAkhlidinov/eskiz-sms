<?php

namespace ustadev;

class Auth extends Base
{
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

    public function reuquest($method, $options = [])
    {
        return parent::reuquest("auth/" . $method, $options);
    }
}