<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }


    public function login()
    {
        if (session()->get('logged_in')) {
            //Arahkan Ke Halaman Home
            //Cek Rolenya
            if (session()->get('role_id') == 2) {
                return redirect()->to(base_url());
            } else {
                return redirect()->to(base_url('admin'));
            }
        }

        $data = [
            'title' => "SatSetWeb || Login",
            'validation' => \Config\Services::validation()
        ];

        return view('auth/login', $data);
    }
    public function register()
    {
        if (session()->get('logged_in')) {
            //Arahkan Ke Halaman Home
            //Cek Rolenya
            if (session()->get('role_id') == 2) {
                return redirect()->to(base_url());
            } else {
                return redirect()->to(base_url('admin'));
            }
        }

        $data = [
            'title' => "SatSetWeb || Register",
            'validation' => \Config\Services::validation()
        ];

        return view('auth/register', $data);
    }

    public function loginSave()
    {
        //Validasi Form Terlebih Dahulu
        if (!$this->validate([
            //Field Yang mau divalidasi
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi ! '
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi ! '
                ]
            ]

        ])) {
            //Kalau tidak tervalidasi
            return redirect()->to(base_url('login'))->withInput();
        }


        //Kalau Lolos Validasi
        //1. Ambil Inputan email Dan Password
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        //2. Cocokkan Dengan Yang Ada DiDatabase
        $user = $this->usersModel->where(['email' => $email])->first();
        if ($user) {
            //Kalau ada user nya cek passwordnya sama atau tidak dengan inputan 
            if (password_verify($password, $user['password'])) {
                //Kalau Password Nya sama maka cek apakah usernya aktif ?
                if ($user['is_active'] == 1) {
                    //Kalau usernya aktif maka login berhasil
                    //1.Simpan session usernya
                    $dataSession = [
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'logged_in' => TRUE
                    ];
                    session()->set($dataSession);
                    //2. Redirect Kehalaman Role id masing masing
                    if ($user['role_id'] == 1) {
                        return redirect()->to(base_url('admin'));
                    } else if ($user['role_id'] == 2) {
                        return redirect()->to(base_url());
                    }
                } else {
                    //Kalau usernya gak aktif
                    session()->setFlashdata('loginsave', 'Akun anda dinonaktifkan, harap hubungi admin ! ');
                    return redirect()->to(base_url('login'));
                }
            } else {
                //Kalau Passwordnya gak sama , kasih pesan error
                session()->setFlashdata('loginsave', 'Password yang di masukkan salah ! ');
                return redirect()->to(base_url('login'));
            }
        } else {
            //Kalau user nya gak ada
            session()->setFlashdata('loginsave', 'email Belum Terdaftar ! ');
            return redirect()->to(base_url('login'));
        }
    }

    public function registerSave()
    {
        //Validasi Form Terlebih Dahulu
        if (!$this->validate([
            //Field Yang mau divalidasi
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi ! '
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi ! '
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi ! '
                ]
            ]
        ])) {
            //Kalau tidak tervalidasi
            return redirect()->to(base_url('auth/register'))->withInput();
        }

        //Kalau Lolos Validasi
        //1. Input Database
        if ($this->usersModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1
        ])) {

            //Jika Berhasil Tampilkan Pesan
            session()->setFlashdata('login', 'Register Berhasil Silahkan Login ! ');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        //Hancurkan session
        //Hapus Session
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
