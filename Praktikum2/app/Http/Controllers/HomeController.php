<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = "Selamat Datang";
        $number = 5;
        return view('home', compact('data', 'number'));
    }
}
