<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'calorias',
        'grasa_Saturada',
        'colesterol',
        'grasa_Poliinsaturada',
        'grasa_Monoinsaturada',
        'grasa_trans',
        'Fibra',
        'proteinas',
    ];
}
