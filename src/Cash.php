<?php

namespace ustadev\sms;

trait Cash
{
    public function addCash($token)
    {
        if (!file_exists("cash")) {
            mkdir("cash");
        }

        file_put_contents("cash/data.dat", $token);
    }

    public function getCash()
    {
        try {
            $token = file_get_contents("cash/data.dat");
            if (empty($token)) {
                return false;
            }
            return $token;
        } catch (\Exception $e) {
            return false;
        }
    }
}