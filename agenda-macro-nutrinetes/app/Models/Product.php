<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'calorias',
        'grasa_Saturada',
        'colesterol',
        'grasa_Poliinsaturada',
        'grasa_Monoinsaturada',
        'grasa_trans',
        'Fibra',
        'proteinas',
    ];

    public function products(){

        return $this->belongsTo(categories::class);

    }
}
