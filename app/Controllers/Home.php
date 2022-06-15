<?php

namespace App\Controllers;

class Home extends BaseController{
    protected portofolioModel;

    public function __construct()
    {
        $this->portofolioModel = new portofolioModel();
    }

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
            'title' => "SatSetWeb || Portofolio",
        ];

        echo view('admin/kelola_portfolio', $title);   
    }

    public function kelolapaket()
    {
        $data = [
            'title' => 'SatSetWeb || kelola Paket'
        ];
        echo view('admin/kelola_paket', $data);
    }

    public function kelolaform()
    {
        $data = [
            'title' => 'SatSetWeb || kelola Form'
        ];
        echo view('admin/kelola_formulir', $data);
    }

    public function kelolaUlasan()
    {
        $data = [
            'title' => 'SatSetWeb || kelola Ulasan'
        ];
        echo view('admin/kelola_ulasan', $data);
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
