<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

class UserController extends Controller
{

    public function index():void
    {
        $this->view('register');

    }

    public function profile():void
    {
        $this->view('profile');

    }

   public function post():void
    {
       
    }
    
}