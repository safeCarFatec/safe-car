<?php

namespace App\Controller;
use App\Controller\ControllerHtml;

class NotFound
{
    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        ControllerHtml::createScreen('404/index.html');
    }
}
