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
    public function profile(){
        $title = [
            'title' => "SatSetWeb || Profile"
        ];

        return view('admin/profile', $title);
    }

    public function porto(){
        $title = [ 
            'title' => "SatSetWeb || Portofolio"
        ];

        return view('admin/kelola_portfolio', $title);   
    }

    public function logout(){
        $dataSession = [
            'nama',
            'email',
            'role_id',
            'logged_in'
        ];
        session()->remove($dataSession);
        return redirect()->to(base_url());
    }
}