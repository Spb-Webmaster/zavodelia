<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function contacts()
    {
       //flash()->info('Hello');
        return view('contacts');
    }
}
