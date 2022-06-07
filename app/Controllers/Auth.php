<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        $data = [
            'title' => "SatSetWeb || Login",
            'validation' => \Config\Services::validation()
        ];

        return view('auth/login', $data);
    }
}
