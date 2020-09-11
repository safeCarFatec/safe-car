<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExecucaoServico extends Model
{
    use HasFactory;

    protected $fillable = [
        'exe_ser_id', 
        'exe_ser_OrdSerId', 
        'exe_ser_CliCpf',
        'exe_ser_descricao',
        'exe_ser_preco',
        'exe_ser_pagamento',
    ];
}
