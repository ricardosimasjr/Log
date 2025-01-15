<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';
    protected $fillable = [
        'emissao',
        'nfe',
        'cpfcnpj',
        'razaosocial',
        'municipio',
        'ufcliente',
        'vendedor',
        'representante',
        'volumes',
        'peso',
        'vfrete',
        'vnota',
        'transportadora',
        'status',
        'tpfrete',
        'vfretecotado',
        'previsaoentrega',
        'canhoto',
    ];
}
