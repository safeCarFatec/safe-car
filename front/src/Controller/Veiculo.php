<?php

namespace App\Controller;
use App\Controller\ControllerHtml;

class Veiculo
{
    public function index()
    {
        ControllerHtml::createScreen('cadastro/veiculo/veiculo.php');
    }
}
