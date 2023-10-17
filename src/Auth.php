<?php

namespace ustadev;

class Auth extends Base
{
    public function login()
    {
        return $this->reuquest("login", [
            'email' => 'test@gmail.com',
            'password' => 'test'
        ]);
    }

    public function reuquest($method, $options = [])
    {
        return parent::reuquest("auth/" . $method, $options);
    }
}