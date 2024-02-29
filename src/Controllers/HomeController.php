<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class HomeController extends Controller
{

    public function index(): void
    {
            $this->view('index');

    }

    public function buy(): void
    {
            $this->view('buyFlower');

    }

    public function basket(): void
    {
            $this->view('basket');

    }
    

}