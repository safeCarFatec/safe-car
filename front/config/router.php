<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Controller\Login;
use App\Controller\Usuario;
use App\Controller\Veiculo;

return [
    '/login' => Login::class,
    '/veiculo' => Veiculo::class,
    '/usuario' => Usuario::class,
];