<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsDog extends Model
{
    protected $fillable = [
        'raca', 'nome', 'idade',
    ];
}
