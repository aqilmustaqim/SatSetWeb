<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SatSetWeb || Home'
        ];

        echo view('home/index', $data);
    }

    public function profile(){
        $title = [
            'title' => "SatSetWeb || Profile",
            'nama'  => session()->get('nama')
        ];
        echo view('admin/profile', $title);
    }

    public function porto(){
        $title = [ 
            'title' => "SatSetWeb || Portofolio"
        ];

        echo view('admin/kelola_portfolio', $title);   
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

    public function kelolapaket()
    {
        $data = [
            'title' => 'SatSetWeb || kelola Paket'
        ];

        echo view('admin/kelola_paket', $data);
    }
}
