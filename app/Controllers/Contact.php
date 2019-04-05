<?php

namespace App\Controllers;

use App\Core\Controller;

class Contact extends Controller 
{
    public function index(...$params)
    {
        echo 'Section "contact"  action "index"';
    }

    public function phone(...$params)
    {
        echo 'Section "contact"  action "phone"';
    }
}