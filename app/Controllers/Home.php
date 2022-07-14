<?php

namespace App\Controllers;

use App\Database\Migrations\Daftarpaket;
use App\Models\PortfolioModel;
use App\Models\FormulirModel;
use App\Models\UsersModel;
use App\Models\UlasanModel;
use App\Models\DaftarPaketModel;


class Home extends BaseController
{
    protected $PortModel;
    protected $FormModel;
    protected $usersModel;
    protected $UlasModel;
    protected $DaftarPaketModel;

    public function __construct()
    {
        $this->PortModel = new PortfolioModel();
        $this->FormModel = new FormulirModel();
        $this->usersModel = new UsersModel();
        $this->UlasModel = new UlasanModel();
        $this->DaftarPaketModel = new DaftarPaketModel();
    }

    public function index()
    {
        $portfolio = $this->PortModel->findAll();
        $ulasan = $this->UlasModel->findAll();
        $daftarpaket = $this->DaftarPaketModel->findAll();
        $datas = [
            'title' => 'SatSetWeb || Home',
            'portfolio'  => $portfolio,
            'ulasan' => $ulasan,
            'daftarpaket' => $daftarpaket
        ];
        return view('home/index', $datas);
    }

    public function profile()
    {
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

        //1. Masukkan File foto Ke Dalam Folder
        $fileFoto = $this->request->getFile('gambar_website');
        //Ambil Namanya
        $namaFileFoto = $fileFoto->getRandomName();
        //Masukkan Ke Folder
        $fileFoto->move('assets/img/portfolio', $namaFileFoto);

        //Ambil Data Form
        //Masukkan Data Ke Website
        if ($this->PortModel->save([
            'nama' => $this->request->getVar('nama_website'),
            'deskripsi' => $this->request->getVar('deskripsi_website'),
            'jenis' => $this->request->getVar('jenis_website'),
            'gambar' => $namaFileFoto,
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

        //1. Cek Foto Di Ubah Atau Tidak
        $fileFoto = $this->request->getFile('gambar_website');
        $fotoLama = $this->request->getVar('fotoLama');
        if ($fileFoto->getError() == 4) {
            //Ambil Nama Foto Lamanya
            $namaFoto = $fotoLama;
        } else {
            //Kalau Foto Nya Diubah
            //Ambil Nama File Foto Barunya
            $namaFoto = $fileFoto->getRandomName();
            //Masukkan Ke Dalam Folder Image
            $fileFoto->move('assets/img/portfolio', $namaFoto);
            //Hapus File Foto Lama
            unlink("assets/img/portfolio/$fotoLama");
        }

        if ($this->PortModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama_website'),
            'deskripsi' => $this->request->getVar('deskripsi_website'),
            'jenis' => $this->request->getVar('jenis_website'),
            'gambar' => $namaFoto,
            'link' => $this->request->getVar('link_website')
        ])) {
            session()->setFlashdata('porto', 'Di Update! ');
            return redirect()->to(base_url('Home/porto'));
        }
    }

    public function kelolapaket()
    {

        $daftarpaket = $this->DaftarPaketModel->findAll();

        $data = [
            'title' => 'SatSetWeb || kelola Paket',
            'data' => $daftarpaket
        ];
        return view('admin/kelola_paket', $data);
    }
    public function createpaket()
    {
        $title = [
            'title' => "SatSetWeb || Daftar Paket",
        ];
        return view('admin/create_paket', $title);
    }

    public function tambahDaftarpaket()
    {
        //Masukkan Data Ke Website
        if ($this->DaftarPaketModel->save([
            'namapaket' => $this->request->getVar('nama_paket'),
            'hargapaket' => $this->request->getVar('harga_paket'),
            'deskripsi1' => $this->request->getVar('deskripsi_1'),
            'deskripsi2' => $this->request->getVar('deskripsi_2'),
            'deskripsi3' => $this->request->getVar('deskripsi_3'),
            'deskripsi4' => $this->request->getVar('deskripsi_4'),
            'deskripsi5' => $this->request->getVar('deskripsi_5'),
            'deskripsi6' => $this->request->getVar('deskripsi_6'),
            'deskripsi7' => $this->request->getVar('deskripsi_7'),
            'deskripsi8' => $this->request->getVar('deskripsi_8'),
            'deskripsi9' => $this->request->getVar('deskripsi_9')

        ])) {
            session()->setFlashdata('porto', 'Di Tambahkan! ');
            return redirect()->to(base_url('Home/kelolapaket'));
        }
    }

    public function edit_paket($id)
    {

        $daftarpaket = $this->DaftarPaketModel->where('id', $id)->first();
        $data = [
            'title' => "SatSetWeb || Edit Daftar Paket",
            'daftarpaket' => $daftarpaket
        ];
        return view('admin/edit_paket', $data);
    }

    public function updatePaket($id)
    {
        //Masukkan Data Ke Website
        if ($this->DaftarPaketModel->save([
            'id' => $id,
            'namapaket' => $this->request->getVar('nama_paket'),
            'hargapaket' => $this->request->getVar('harga_paket'),
            'deskripsi1' => $this->request->getVar('deskripsi_1'),
            'deskripsi2' => $this->request->getVar('deskripsi_2'),
            'deskripsi3' => $this->request->getVar('deskripsi_3'),
            'deskripsi4' => $this->request->getVar('deskripsi_4'),
            'deskripsi5' => $this->request->getVar('deskripsi_5'),
            'deskripsi6' => $this->request->getVar('deskripsi_6'),
            'deskripsi7' => $this->request->getVar('deskripsi_7'),
            'deskripsi8' => $this->request->getVar('deskripsi_8'),
            'deskripsi9' => $this->request->getVar('deskripsi_9')

        ])) {
            session()->setFlashdata('porto', 'Di Tambahkan! ');
            return redirect()->to(base_url('Home/kelolapaket'));
        }
    }

    public function hapus_paket($id)
    {
        if ($this->DaftarPaketModel->delete($id)) {
            session()->setFlashdata('porto', 'Di Hapus! ');
            return redirect()->to(base_url('Home/kelolapaket'));
        }
    }

    public function kelolaform()
    {
        $formdata = $this->FormModel->findAll();
        $datas = [
            'title' => 'SatSetWeb || kelola Form',
            'formdata' => $formdata
        ];
        return view('admin/kelola_formulir', $datas);
    }

    public function TambahForm()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        } else if ($this->FormModel->save([
            'nama' => $this->request->getVar('inputNama'),
            'email' => $this->request->getVar('inputEmail'),
            'nomor_wa' => $this->request->getVar('inputWA'),
            'jenis_paket' => $this->request->getVar('inputPaket'),
            'status' => "Baru"
        ])) {
            session()->setFlashdata('Formsukses', 'Formulir Permintaan Anda Sudah Masuk, Harap Tunggu Info Selanjutnya via Whatsapp !');
            return redirect()->to(base_url('Home/index'));
        } else {
            session()->setFlashdata('Formgagal', 'Formulir Gagal Di Submit!');
            return redirect()->to(base_url('Home/index'));
        }
    }

    public function UpdateFormProses($id)
    {
        if ($this->FormModel->save([
            'id' => $id,
            'status' => "Proses"
        ])) {
            session()->setFlashdata('Formsukses', 'Berhasil Update Status :)');
            return redirect()->to(base_url('Home/kelolaform'));
        } else {
            session()->setFlashdata('Formgagal', 'Gagal Update Status !!!');
            return redirect()->to(base_url('Home/kelolaform'));
        }
    }

    public function UpdateFormDone($id)
    {
        if ($this->FormModel->save([
            'id' => $id,
            'status' => "Done"
        ])) {
            session()->setFlashdata('Formsukses', 'Berhasil Update Status :)');
            return redirect()->to(base_url('Home/kelolaform'));
        } else {
            session()->setFlashdata('Formgagal', 'Gagal Update Status !!!');
            return redirect()->to(base_url('Home/kelolaform'));
        }
    }

    public function UpdateFormTolak($id)
    {
        if ($this->FormModel->save([
            'id' => $id,
            'status' => "Tolak"
        ])) {
            session()->setFlashdata('Formsukses', 'Berhasil Update Status :)');
            return redirect()->to(base_url('Home/kelolaform'));
        } else {
            session()->setFlashdata('Formgagal', 'Gagal Update Status !!!');
            return redirect()->to(base_url('Home/kelolaform'));
        }
    }

    public function kelolaulas()
    {
        $ulasdata = $this->UlasModel->findAll();
        $datas = [
            'title' => 'SatSetWeb || kelola Ulas',
            'ulasdata' => $ulasdata
        ];
        echo view('admin/kelola_ulasan', $datas);
    }

    public function tambahulas()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        } else if ($this->UlasModel->save([
            'nama' => $this->request->getVar('inputNamaUlas'),
            'email' => $this->request->getVar('inputEmailUlas'),
            'deskripsiulasan' => $this->request->getVar('inputUlas')
        ])) {
            session()->setFlashdata('Ulassukses', 'Ulasan Anda Sudah Masuk, Terimakasih');
            return redirect()->to(base_url('Home/index'));
        } else {
            session()->setFlashdata('Ulasgagal', 'Ulasan Gagal Di Submit!');
            return redirect()->to(base_url('Home/index'));
        }
    }

    public function deleteulas($id)
    {
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

    public function deleteform($id)
    {
        if ($this->FormModel->delete($id)) {
            session()->setFlashdata('Form', 'Form Di Hapus! ');
            return redirect()->to(base_url('Home/kelolaform'));
        }
    }


    public function updatePassword($email)
    {
        $user = $this->usersModel->where('email', $email)->first();
        $password = $this->request->getVar('password');
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('Pass', 'Password Salah !');
            return redirect()->to(base_url('Home/profile'));
        } else if ($this->request->getVar('newpassword') !== $this->request->getVar('confirmpassword')) {
            session()->setFlashdata('KonfirmPass', 'Konfirmasi Password Tidak Sama !');
            return redirect()->to(base_url('Home/profile'));
        } else if ($this->usersModel->save([
            'id'    => $user['id'],
            'password' => password_hash($this->request->getVar('confirmpassword'), PASSWORD_DEFAULT)
        ])) {
            session()->setFlashdata('ChangePass', 'Password Berhasil diubah !');
            return redirect()->to(base_url('Home/profile'));
        }
    }


    public function updateBio($email)
    {
        //kurang upload gambar admin :V
        $user = $this->usersModel->where('email', $email)->first();
        if ($this->usersModel->save([
            'id'   => $user['id'],
            'nama' => $this->request->getVar('namaganti'),
            'email' => $this->request->getVar('emailganti')
        ])) {
            session()->setFlashdata('ChangeBio', 'Biodata Berhasil diubah !');
            return redirect()->to(base_url('Home/profile'));
        } else {
            session()->setFlashdata('FailChangeBio', 'Gagal Update Bio !');
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
