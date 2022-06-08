<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SatSetWeb || Home'
        ];

        return view('home/index', $data);
    }

    public function ta(){
        return view('portfolio/index');
    }
    public function dashboard(){
        return view('dashboard/index');
    }
}
