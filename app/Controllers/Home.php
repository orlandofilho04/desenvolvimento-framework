<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Home';
        $data['conteudo'] = 'Senta pro jet desgraça';
        return view('home/index', $data);

    }
}