<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Controller\NotFound;

require __DIR__ . "/../autoload.php";
$routes = require __DIR__ . "/../config/router.php";

$path = isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO'] : null;

if (is_null($path) || !array_key_exists($path, $routes)) {
    new NotFound();
    exit();
}

session_start();

$ehRotaDeLogin = strpos($path, 'login');
if (isset($_SESSION['logado']) and $ehRotaDeLogin === false) {
    $redirecionar = $_SERVER['SCRIPT_NAME'] . "/login";
    header("Location: $redirecionar");
    exit();
}

$route = $routes[$path];
(new $route)->index();
