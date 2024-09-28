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
        echo view('Pages/userReport/index');
        echo view('Layout/footer');
    }
    public function grup()
    {
        echo view('Layout/header');
        echo view('Pages/grupReport/index');
        echo view('Layout/footer');
    }
    public function talk()
    {
        echo view('Layout/header');
        echo view('Pages/talkReport/index');
        echo view('Layout/footer');
    }
    public function chat()
    {
        echo view('Layout/header');
        echo view('Pages/chatReport/index');
        echo view('Layout/footer');
    }
    public function manage()
    {
        echo view('Layout/header');
        echo view('Pages/manageAccount/index');
        echo view('Layout/footer');
    }

}