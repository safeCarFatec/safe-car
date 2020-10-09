<?php

namespace App\Controller;

class ControllerHtml
{
    /*
        * createScreen quando chamada adiciona sua pagina html
        * pathHTML caminho da pasta onde esta o arquivo
        * data e seu css ou js
    */
    public static function createScreen($pathHTML, $data = [])
    {
        // extract($data);
        require __DIR__ . "/../../View/" . $pathHTML;
    }

    public static function flashMessage($type, $mensage)
    {
        $_SESSION['tipo_mensagem'] = ($type)? 'success' : 'danger';
        $_SESSION['mensagem'] = $mensage;
    }
}
