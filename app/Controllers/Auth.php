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
                'username' => [
                    'rules' => 'required|is_unique[users.username]',
                    'errors' =>[
                        'is_unique' => '{field} Sudah dipakai!'
                    ]
                ],
                'password' => 'required',
                'level' => 'required',
            ],
        );
        if(!$val){
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate',$pesanvalidasi );
        }

        $data = array(
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'level' => $this->request->getPost('level'),
        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan','Registrasi berhasil!');
        return redirect()->to('/');
    }

    public function login(){
        $model = new AuthModel;
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username,$table);
        if($row == NULL){
            session()->setFlashdata('pesan','username salah!');
            return redirect()->to('/');
        } 
        if (password_verify($password,$row->password)){
            $data = array(
                'log' => TRUE,
                'nama' => $row->nama,
                'username' => $row->username,
                'level' => $row->level,
            );
            session()->set($data);
            session()->setFlashdata('pesan','Login berhasil!');
            return redirect()->to('/Pages');
        }

            session()->setFlashdata('pesan','Password Salah!');
            return redirect()->to('/');



    }
}