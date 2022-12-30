<?php

namespace Database\Seeders;

use App\Models\Claim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Claim::create([
            'image' => NULL,
            'discount' => '1 Hr Facial Treatment',
            'follow' => 0
           
        ]); 

        Claim::create([
            'image' => NULL,
            'discount' => 'Fresh Saturday - 15% off on vegitables',
            'follow' => 0
           
        ]);
        Claim::create([
            'image' => NULL,
            'discount' => 'Upto 45% Off On Clothings',
            'follow' => 0
           
        ]);
    }
}
