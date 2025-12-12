<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'food_group_id',
        'food_name'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
