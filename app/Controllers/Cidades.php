<?php

namespace App\Controllers;

class Cidades extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Cidades';
        $data['form'] = 'listar';
        $data['cidades'] = array(
            [
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

        return view('cidades/index', $data);

    }


    public function new()
    {
        $data['titulo'] = 'Cidades';
        $data['form'] = 'cadastrar';
        $data['cidade'] = [
            'id' => '',
            'cidade' => '',
            'estado' => ''
        ];
        
        return view('cidades/form', $data);
    }

    public function create()
    {
        $data['titulo'] = 'Cidades';
        $data['form'] = 'listar';
        $cidade = [
            'id' => 6,
            'cidade' => $_REQUEST['cidades_nome'],
            'estado' => $_REQUEST['cidades_estado']
        ];

        $data['cidades'] = array(
            [
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

        array_push($data['cidades'], $cidade);
        
        return view('cidades/index', $data);
    }

    public function edit($id)
    {
        $data['titulo'] = 'Cidades';
        $data['form'] = 'alterar';
        $data['cidades'] = array(
            [
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
        
        $data['cidade'] = $data['cidades'][$id - 1];
        
 
        return view('cidades/form', $data);
    }
    
}