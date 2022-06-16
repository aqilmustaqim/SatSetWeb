<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController{

    public function index(){
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

    public function cek(){
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }else if (session()->get('logged_in')) {
            session()->setFlashdata('sukses', 'Hehehehehhehehehehehheheheh');
            return redirect()->to(base_url('#Form'));
        }
    }
}