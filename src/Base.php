<?php

namespace ustadev;

class Base
{
    public $token;

    public function reuquest($method, $options = [])
    {
        $curl = curl_init();
        if ($this->token) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $this->token
            ]);
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'notify.eskiz.uz/api/' . $method,
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
        return $response;
    }
}