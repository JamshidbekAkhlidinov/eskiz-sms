<?php

namespace ustadev;

class Base
{
    public function reuquest($method, $options = [])
    {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjUyNzgsInJvbGUiOm51bGwsImRhdGEiOnsiaWQiOjUyNzgsIm5hbWUiOiJBeGxpZGlub3YgSmFtc2hpZGJlayBGYXpsaWRkaW4gbydnJ2xpIiwiZW1haWwiOiJqYW1zaGlkYmVrYXhsaWRpbm92MjAwM0BnbWFpbC5jb20iLCJyb2xlIjpudWxsLCJhcGlfdG9rZW4iOm51bGwsInN0YXR1cyI6ImFjdGl2ZSIsInNtc19hcGlfbG9naW4iOiJlc2tpejIiLCJzbXNfYXBpX3Bhc3N3b3JkIjoiZSQkayF6IiwidXpfcHJpY2UiOjUwLCJ1Y2VsbF9wcmljZSI6MTE1LCJ0ZXN0X3VjZWxsX3ByaWNlIjpudWxsLCJiYWxhbmNlIjo0OTUwLCJpc192aXAiOjAsImhvc3QiOiJzZXJ2ZXIxIiwiY3JlYXRlZF9hdCI6IjIwMjMtMTAtMTZUMDU6NTc6MTguMDAwMDAwWiIsInVwZGF0ZWRfYXQiOiIyMDIzLTEwLTE2VDA1OjU5OjA1LjAwMDAwMFoiLCJ3aGl0ZWxpc3QiOm51bGwsImhhc19wZXJmZWN0dW0iOm51bGwsImJlZWxpbmVfcHJpY2UiOjUwfSwiaWF0IjoxNjk3NDQzMTk0LCJleHAiOjE3MDAwMzUxOTR9.68bnJkDSOvdpdSS_uTde7D1PYEHf6XPW__exfhqTNHI";
        $curl = curl_init();
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
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $token
            ],
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

}