<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Home';
        $data['conteudo'] = 'Senta pro jet desgraça';

        $data['cidades'] = array([
            'id' => 1,
            'cidade' => 'Curitiba',
            'estado' => 'PR' 
        ],
        [
            'id' => 2,
            'cidade' => 'São Paulo',
            'estado' => 'SP' 
        ],
        [
            'id' => 3,
            'cidade' => 'Rio de Janeiro',
            'estado' => 'RJ' 
        ],
        [
            'id' => 4,
            'cidade' => 'Belo Horizonte',
            'estado' => 'MG' 
        ],
        [
            'id' => 5,
            'cidade' => 'Porto Alegre',
            'estado' => 'RS' 
        ]
    );
        return view('home', $data);

    }
}