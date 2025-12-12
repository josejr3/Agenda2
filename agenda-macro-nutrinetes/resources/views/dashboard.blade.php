<?php
require 'C:\Users\grego\Desktop\Agenda2\agenda-macro-nutrinetes\vendor\autoload.php';
use App\Models\categories;

use StaticKidz\BedcaAPI\BedcaClient;

$client = new BedcaClient();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
                <?php
                        $client = new BedcaClient();
                        $foodGroups = $client->getFoodGroups();
                        //dump($foodGroups->food);
                        //$food = $client->getFoodsInGroup(10);
                        $food = $client->getFood(2645);
                         $todasLasCategorias = categories::all()->first()->food_group_id;
                        dump($food);
                    ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
