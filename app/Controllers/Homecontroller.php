<?php

namespace App\Controllers;

class Homecontroller extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        return view('templates/header', $data)
            . view('home')
            . view('templates/footer');
    }
}