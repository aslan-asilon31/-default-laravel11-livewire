<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductCategoryDonutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Twisted Doughnut
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Twisted Doughnut',
        ]);
        //Banana Chocolate
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Banana Chocolate',
        ]);
        //Donut Holland / Donut Paket ( Isi 6 Pcs )
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Donut Holland / Donut Paket ( Isi 6 Pcs )',
        ]);
        //Donut Sapi
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Donut Sapi',
        ]);
        //Donut Sate
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Donut Sate',
        ]);
        //Donut Sosis
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Donut Sosis',
        ]);
        //Donut Ring Tiramisu
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 5,
            'name'	=> 'Donut Ring Tiramisu',
        ]);
        
    }
}
