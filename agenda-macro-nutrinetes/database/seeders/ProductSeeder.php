<?php

namespace Database\Seeders;
require 'C:\Users\grego\Desktop\Agenda2\agenda-macro-nutrinetes\vendor\autoload.php';
use StaticKidz\BedcaAPI\BedcaClient;

use App\Models\categories;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        $client = new BedcaClient();
        $primeraCtegoria = categories::all()->first()->food_group_id;
        
        foreach ($primeraCtegoria->food as $alimento) {

            Product::created([
            //'category_id'=> ,
            'name'=>$alimento->f_ori_name,
            'calorias',
            'grasa_Saturada',
            'colesterol',
            'grasa_Poliinsaturada',
            'grasa_Monoinsaturada',
            'grasa_trans',
            'Fibra',
            'proteinas',
            ]);
    }
    }
}
