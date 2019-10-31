<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretor extends Model
{
    protected $table="corretores";
    protected $fillable = [
        'nome', 'creci', 'fone', 'email'
    ];
}
