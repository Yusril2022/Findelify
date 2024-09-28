<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Logreg extends Controller
{
    public function index(): string
    {
        return view('auth/login');
    }
    
    public function register()
    {
        session();
        $data = [
            'validate'=> \Config\Services::validation(),
        ];
        return view('auth/register',$data);
    }
}
