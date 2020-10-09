<?php

namespace App\Controller;
use App\Controller\ControllerHtml;

class Login
{
    public function index()
    {
        $value = [
            'css' => ['assets/css/login.css'],
            'js' => []
        ];
        ControllerHtml::createScreen('login/index.html', $value);
    }
}
