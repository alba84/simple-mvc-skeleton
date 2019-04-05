<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class Home extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = User::find(1);
    }

    public function index($name = '')
    {
        $this->view('home/index', ['name' => $this->user->first_name]);
    }
}
