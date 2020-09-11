<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'vei_placa',
        'vei_cli_cpf', 
        'vei_fabricante',
        'vei_modelo',
        'vei_ano',
        'vei_cor',
    ];
}
