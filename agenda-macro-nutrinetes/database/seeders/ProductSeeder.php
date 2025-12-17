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

        $todasLasCategorias = categories::select('food_group_id', 'food_name')->get();

        foreach ($todasLasCategorias as $categoria) {
            $foods = $client->getFoodsInGroup($categoria->food_group_id);
            $p = json_decode(json_encode($foods), true);
            if (!empty($p)) {
                foreach ($p["food"] as  $fooood) {
                    
                    Product::created([
                        'category_id' => $categoria->food_group_id,
                        'name' => $fooood["f_ori_name"],
                        'calorias' => null,
                        'grasa_Saturada' => null,
                        'colesterol' => null,
                        'grasa_Poliinsaturada' => null,
                        'grasa_Monoinsaturada' => null,
                        'grasa_trans' => null,
                        'Fibra' => null,
                        'proteinas' => null,
                    ]);
                }
            }
        }
    }
}
