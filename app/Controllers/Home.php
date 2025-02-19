<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        #return view('Teste Bem Feito');
        return 'welcome_message';
    }
}