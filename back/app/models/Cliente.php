<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'cli_cpf', 
        'cli_nome', 
        'cli_cep', 
        'cli_logradouro', 
        'cli_numero', 
        'cli_bairro', 
        'cli_cidade', 
        'cli_uf', 
        'cli_telefone', 
        'cli_email',
    ];
}
