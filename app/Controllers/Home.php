<?php

namespace App\Controllers;

use App\Models\PortfolioModel;
use App\Models\FormulirModel;
use App\Models\UsersModel;
use App\Models\UlasanModel;


class Home extends BaseController
{
    protected $PortModel;
    protected $FormModel;
    protected $usersModel;
    protected $UlasModel;

    public function __construct(){
        $this->PortModel = new PortfolioModel();
        $this->FormModel = new FormulirModel();
        $this->usersModel = new UsersModel();
        $this->UlasModel = new UlasanModel();
    }

    public function index(){
        $data = $this->PortModel->findAll();
        $datas = [
            'title' => 'SatSetWeb || Home',
            'data'  => $data
        ];
        echo view('home/index', $datas);
    }

    public function profile(){
        $title = [
            'title' => "SatSetWeb || Profile",
            'nama'  => session()->get('nama'),
            'email' => session()->get('email')
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

    public function kelolaform(){
        $formdata = $this->FormModel->findAll();
        $datas = [
            'title' => 'SatSetWeb || kelola Form',
            'formdata' => $formdata
        ];
        echo view('admin/kelola_formulir', $datas);
    }

    public function TambahForm(){
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }else if ($this->FormModel->save([
            'nama' => $this->request->getVar('inputNama'),
            'email' => $this->request->getVar('inputEmail'),
            'nomor_wa' => $this->request->getVar('inputWA'),
            'jenis_paket' => $this->request->getVar('inputPaket'),
            'status' => "Baru"
        ])) {
            session()->setFlashdata('Formsukses', 'Formulir Permintaan Anda Sudah Masuk, Harap Tunggu Info Selanjutnya via Whatsapp !');
            return redirect()->to(base_url('Home/index'));
        }else{
            session()->setFlashdata('Formgagal', 'Formulir Gagal Di Submit!');
            return redirect()->to(base_url('Home/index'));
        }
    }

    public function UpdateFormProses($id){
     if ($this->FormModel->save([
            'id' => $id,
            'status' => "Proses"
        ])) {
            session()->setFlashdata('Formsukses', 'Berhasil Update Status :)');
            return redirect()->to(base_url('Home/kelolaform'));
        }else{
            session()->setFlashdata('Formgagal', 'Gagal Update Status !!!');
            return redirect()->to(base_url('Home/kelolaform'));
        }   
    }

    public function UpdateFormDone($id){
     if ($this->FormModel->save([
            'id' => $id,
            'status' => "Done"
        ])) {
            session()->setFlashdata('Formsukses', 'Berhasil Update Status :)');
            return redirect()->to(base_url('Home/kelolaform'));
        }else{
            session()->setFlashdata('Formgagal', 'Gagal Update Status !!!');
            return redirect()->to(base_url('Home/kelolaform'));
        }   
    }

    public function UpdateFormTolak($id){
        if ($this->FormModel->save([
            'id' => $id,
            'status' => "Tolak"
        ])) {
            session()->setFlashdata('Formsukses', 'Berhasil Update Status :)');
            return redirect()->to(base_url('Home/kelolaform'));
        }else{
            session()->setFlashdata('Formgagal', 'Gagal Update Status !!!');
            return redirect()->to(base_url('Home/kelolaform'));
        }   
    }

    public function kelolaulas(){
        $ulasdata = $this->UlasModel->findAll();
        $datas = [
            'title' => 'SatSetWeb || kelola Ulas',
            'ulasdata' => $ulasdata
        ];
        echo view('admin/kelola_ulasan', $datas);
    }

    public function tambahulas(){
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }else if ($this->UlasModel->save([
            'nama' => $this->request->getVar('inputNamaUlas'),
            'email' => $this->request->getVar('inputEmailUlas'),
            'deskripsiulasan' => $this->request->getVar('inputUlas')
        ])) {
            session()->setFlashdata('Ulassukses', 'Ulasan Anda Sudah Masuk, Terimakasih');
            return redirect()->to(base_url('Home/index'));
        }else{
            session()->setFlashdata('Ulasgagal', 'Ulasan Gagal Di Submit!');
            return redirect()->to(base_url('Home/index'));
        }
    }

    public function deleteulas($id){
        if ($this->UlasModel->delete($id)) {
            session()->setFlashdata('ulas', 'ulas Di Hapus! ');
            return redirect()->to(base_url('Home/kelolaulas'));
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

    public function deleteform($id){
        if ($this->FormModel->delete($id)) {
            session()->setFlashdata('Form', 'Form Di Hapus! ');
            return redirect()->to(base_url('Home/kelolaform'));
        }
    }


    public function updatePassword($email)
    {
        $user = $this->usersModel->where('email',$email)->first();
        $password = $this->request->getVar('password');
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('Pass', 'Password Salah !');
            return redirect()->to(base_url('Home/profile'));
        }else if ($this->request->getVar('newpassword') !== $this->request->getVar('confirmpassword')) {
            session()->setFlashdata('KonfirmPass','Konfirmasi Password Tidak Sama !');
            return redirect()->to(base_url('Home/profile'));
        }else if ($this->usersModel->save([
            'id'    => $user['id'],
            'password' => password_hash($this->request->getVar('confirmpassword'), PASSWORD_DEFAULT)
        ])) {
            session()->setFlashdata('ChangePass','Password Berhasil diubah !');
            return redirect()->to(base_url('Home/profile'));
        }
    }


    public function updateBio($email)
    {   
        //kurang upload gambar admin :V
        $user = $this->usersModel->where('email',$email)->first();
        if ($this->usersModel->save([
            'id'   => $user['id'],
            'nama' => $this->request->getVar('namaganti'),
            'email' => $this->request->getVar('emailganti')
        ])) {
            session()->setFlashdata('ChangeBio','Biodata Berhasil diubah !');
            return redirect()->to(base_url('Home/profile'));   
        }else{
            session()->setFlashdata('FailChangeBio','Gagal Update Bio !');
            return redirect()->to(base_url('Home/profile'));
        }
    }

    public function DeletePaketPage()
    {

        return redirect()->to(base_url('Home/kelolapaket'));
    }

    public function CreatePaketPage()
    {
        return view('admin/KelolaDaftarPaket/create');
    }
    
    public function EditPaketPage()
    {
        return view('admin/KelolaDaftarPaket/update');
    }
}