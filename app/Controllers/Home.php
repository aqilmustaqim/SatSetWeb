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
}
