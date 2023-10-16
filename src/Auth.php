<?php

namespace ustadev;

class Auth
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
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'notify.eskiz.uz/api/auth/' . $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $options,
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;    }
}