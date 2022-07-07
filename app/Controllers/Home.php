<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

class Home extends BaseController
{
    protected $PortModel;

    public function __construct()
    {
        $this->PortModel = new PortfolioModel();
    }

    public function index()
    {
        $data = [
            'title' => 'SatSetWeb || Home'
        ];

        echo view('home/index', $data);
    }

    public function profile()
    {
        $title = [
            'title' => "SatSetWeb || Profile",
            'nama'  => session()->get('nama')
        ];
        return view('admin/profile', $title);
    }

    public function porto()
    {

        $data = $this->PortModel->findAll();

        $title = [
            'title' => "SatSetWeb || Portofolio",
            'data' => $data
        ];
        return view('admin/kelola_portfolio', $title);
    }

    public function createporto()
    {

        $title = [
            'title' => "SatSetWeb || Portofolio",
        ];
        return view('admin/create_portfolio', $title);
    }

    public function tambahPortfolio()
    {
        //Ambil Data Form
        //Masukkan Data Ke Website
        if ($this->PortModel->save([
            'nama' => $this->request->getVar('nama_website'),
            'deskripsi' => $this->request->getVar('deskripsi_website'),
            'jenis' => $this->request->getVar('jenis_website'),
            'gambar' => $this->request->getVar('gambar_website'),
            'link' => $this->request->getVar('link_website')
        ])) {
            session()->setFlashdata('porto', 'Di Tambahkan! ');
            return redirect()->to(base_url('Home/porto'));
        }
    }

    public function hapusPortfolio($id)
    {
        if ($this->PortModel->delete($id)) {
            session()->setFlashdata('porto', 'Di Hapus! ');
            return redirect()->to(base_url('Home/porto'));
        }
    }

    public function editporto($id)
    {

        $data = $this->PortModel->where('id', $id)->first();
        $title = [
            'title' => "SatSetWeb || Portofolio",
            'data' => $data
        ];
        return view('admin/edit_portfolio', $title);
    }

    public function updatePortfolio($id)
    {
        if ($this->PortModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama_website'),
            'deskripsi' => $this->request->getVar('deskripsi_website'),
            'jenis' => $this->request->getVar('jenis_website'),
            'gambar' => $this->request->getVar('gambar_website'),
            'link' => $this->request->getVar('link_website')
        ])) {
            session()->setFlashdata('porto', 'Di Update! ');
            return redirect()->to(base_url('Home/porto'));
        }
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

    public function cek()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('sukses', 'Hehehehehhehehehehehheheheh');
            return redirect()->to(base_url('#Form'));
        }
    }

    public function logout()
    {
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
