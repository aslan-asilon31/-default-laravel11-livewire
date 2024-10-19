<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductCategoryTraditionalSnackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Bika Ambon Cup
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Bika Ambon Cup',
        ]);
        //Bika Ambon Ptg
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Bika Ambon Ptg',
        ]);
        //Nastar Jambu
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Nastar Jambu',
        ]);
        //Pia Khas Nyonya Kacang Hijau
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Pia Khas Nyonya Kacang Hijau',
        ]);
        //Pia Khas Nyonya Original
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Pia Khas Nyonya Original',
        ]);
        //Lemper Ikan
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Lemper Ikan',
        ]);
        //Onde Kacang Hijau
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Onde Kacang Hijau',
        ]);
        //Arem-arem (lontong)
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 3,
            'name'	=> 'Arem-arem (lontong)',
        ]);
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
        //
    }
}
