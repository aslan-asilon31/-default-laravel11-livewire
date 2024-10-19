<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductCategoryPudingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Kelapa Pandan Pudding Log
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Kelapa Pandan Pudding Log',
        ]);
        //Pudding Coklat (20 Ptg)
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Coklat (20 Ptg)',
        ]);
        //Pudding Kelengkeng
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Kelengkeng',
        ]);
        //Kelapa Pandan Pudding
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Kelapa Pandan Pudding',
        ]);
        //Pudding Buah Segar
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Buah Segar',
        ]);
        //Pudding Coffee Jelly Cup
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Coffee Jelly Cup',
        ]);
        //Pudding Mellon Jelly Cup
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Mellon Jelly Cup',
        ]);
        //Pudding Orange Jelly Cup
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Orange Jelly Cup',
        ]);
        //Pudding Strawberry Jelly Cup
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Pudding Strawberry Jelly Cup',
        ]);
        //Panna Cotta Cendol Cup
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 7,
            'name'	=> 'Panna Cotta Cendol Cup',
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
    }
}
