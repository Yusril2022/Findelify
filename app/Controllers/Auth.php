<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;


class Auth extends Controller
{    
    public function register()
{
    $val = $this->validate(
        [
            'nama' => 'required',
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' =>[
                    'is_unique' => '{field} sudah dipakai!',
                    'valid_email' => 'Format {field} tidak valid!'
                ]
            ],
            'password' => 'required',
        ],
    );
    if (!$val) {
        $pesanvalidasi = \Config\Services::validation();
        return redirect()->to('/register')->withInput()->with('validate', $pesanvalidasi);
    }

    $data = array(
        'nama' => $this->request->getPost('nama'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    );
    
    $model = new UsersModel;
    $model->insert($data);
    session()->setFlashdata('pesan', 'Registrasi berhasil!');
    return redirect()->to('/');
}


public function login()
{
    $model = new AuthModel;
    $table = 'users';
    $email = $this->request->getPost('email'); // Ganti username dengan email
    $password = $this->request->getPost('password');
    $row = $model->get_data_login($email, $table); // Ganti username dengan email
    if ($row == NULL) {
        session()->setFlashdata('pesan', 'Email salah!');
        return redirect()->to('/');
    } 
    if (password_verify($password, $row->password)) {
        $data = array(
            'log' => TRUE,
            'nama' => $row->nama,
            'email' => $row->email, // Ganti username dengan email
        );
        session()->set($data);
        session()->setFlashdata('pesan', 'Login berhasil!');
        return redirect()->to('/Pages');
    }

    session()->setFlashdata('pesan', 'Password salah!');
    return redirect()->to('/');
}

}