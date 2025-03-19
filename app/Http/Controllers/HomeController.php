<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
       //flash()->info('Hello');
        return view('home');
    }
}
