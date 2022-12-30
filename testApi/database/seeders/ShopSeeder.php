<?php

namespace Database\Seeders;

use App\Models\shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        shop::create([
            'image' => NULL,
            'shop_name' => 'Fashion',
            'product' => 'Starest',
            'description' => 'Get 1000 pts + 1 pc extra on RM 1000 spend',
            'quantity' => '1x',
            'location' => 'Penang',
            'follow'=> '0',         
        ]); 

        shop::create([
            'image' => NULL,
            'shop_name' => 'Fashion',
            'product' => 'starest',
            'description' => 'Get 1000 pts + 1 pc extra on RM 1000 spend',
            'quantity' => '2x',
            'location' => 'Penang',
            'follow'=> '1',    
        ]); 

        shop::create([
            'image' => NULL,
            'shop_name' => 'Grocery',
            'product' => 'Grocery',
            'description' => 'Get 1000 pts +  25% of on extra on RM 1000 spend',
            'quantity' => '3x',
            'location' => 'Penang',
            'follow'=>  '0' ,     
        ]); 

        shop::create([
            'image' => NULL,
            'shop_name' => 'Fashion',
            'product' => 'starest',
            'description' => 'Get 4000 pts +  25% of on extra on RM 1000 spend',
            'quantity' => '3x',
            'location' => 'Penang',
            'follow'=>  '0' ,     
        ]); 

        shop::create([
            'image' => NULL,
            'shop_name' => 'Grocery',
            'product' => 'Grocery',
            'description' => 'Get 1000 pts +  25% of on extra on RM 1000 spend',
            'quantity' => '3x',
            'location' => 'Penang',
            'follow'=>  '1' ,     
        ]); 
    }
}
