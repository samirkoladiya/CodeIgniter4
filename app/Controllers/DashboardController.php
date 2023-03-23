<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('templates/header', $data)
            . view('dashboard')
            . view('templates/footer');
    }
}
