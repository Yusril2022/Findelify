<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('Layout/header');
        echo view('Pages/dashboard/index');
        echo view('Layout/footer');
    }

    public function user()
    {
        echo view('Layout/header');
        echo view('Pages/lostItem/index');
        echo view('Layout/footer');
    }
    public function grup()
    {
        echo view('Layout/header');
        echo view('Pages/foundItem/index');
        echo view('Layout/footer');
    }
    public function manage()
    {
        echo view('Layout/header');
        echo view('Pages/manageAccount/index');
        echo view('Layout/footer');
    }

}