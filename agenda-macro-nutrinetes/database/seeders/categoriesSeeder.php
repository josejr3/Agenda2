<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Metadata\Group;
require 'C:\Users\grego\Desktop\Agenda2\agenda-macro-nutrinetes\vendor\autoload.php';
use StaticKidz\BedcaAPI\BedcaClient;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new BedcaClient();
        $foodgropus = $client->getFoodGroups()->food;

        foreach( $foodgropus as $group){
            categories::create([
                'food_group_id'=>$group->fg_id,
                'food_name' => $group->fg_ori_name,
            ]);
        }
        
    }
}
