<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

class Home extends BaseController{
    protected $PortModel;

    public function __construct(){
        $this->PortModel = new PortfolioModel();
    }

    public function index(){
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

        $data = $this->PortModel->findAll();

        $title = [ 
            'title' => "SatSetWeb || Portofolio",
            'data' => $data
        ];
        return view('admin/kelola_portfolio', $title);   
    }

    public function createporto(){

        $title = [ 
            'title' => "SatSetWeb || Portofolio",
        ];
        echo view('admin/create_portfolio', $title);   
    }

    public function editporto(){

        $title = [ 
            'title' => "SatSetWeb || Portofolio",
        ];
        echo view('admin/edit_portfolio', $title);   
    }

    public function kelolapaket(){
        $data = [
            'title' => 'SatSetWeb || kelola Paket'
        ];
        echo view('admin/kelola_paket', $data);
    }

    public function kelolaform(){
        $data = [
            'title' => 'SatSetWeb || kelola Form'
        ];
        echo view('admin/kelola_formulir', $data);
    }

    public function kelolaUlasan(){
        $data = [
            'title' => 'SatSetWeb || kelola Ulasan'
        ];
        echo view('admin/kelola_ulasan', $data);
    }

    public function cek(){
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }else{
            session()->setFlashdata('sukses', 'Hehehehehhehehehehehheheheh');
            return redirect()->to(base_url('#Form'));
        }
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