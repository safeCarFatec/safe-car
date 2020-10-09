<?php

namespace App\Controller;
use App\Controller\ControllerHtml;

class Usuario
{
    public function index()
    {
        $value = [
            'css' => ['assets/css/login.css'],
            'js' => []
        ];
        ControllerHtml::createScreen('cadastro/usuario/usuario.html', $value);
    }
}
