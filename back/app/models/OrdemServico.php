<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $primaryKey = 'ord_ser_id';

    protected $fillable = [
        'ord_ser_id', 
        'ord_ser_CliCpf', 
        'ord_ser_orcamentoDescricao',
        'ord_ser_execucaoDescricao',
    ];
}
