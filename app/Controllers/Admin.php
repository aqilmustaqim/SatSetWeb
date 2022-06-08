<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }


    public function index()
    {
        if (!session()->get('role_id') == 1) {
            //Arahkan Ke Halaman Home
            //Cek Rolenya
            return redirect()->to(base_url());
        }

        $data = [
            'title' => "SatSetWeb || Admin",
            'validation' => \Config\Services::validation()
        ];

        return view('admin/index', $data);
    }
}
