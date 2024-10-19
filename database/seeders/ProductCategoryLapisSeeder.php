<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductCategoryLapisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Lapis Legit 1/3
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit 1/3',
        ]);
        //Lapis Legit Coklat 1/3
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit Coklat 1/3',
        ]);
        //Lasugit Loyang
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lasugit Loyang',
        ]);
        //Lapis Legit Prunes 1/3
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit Prunes 1/3',
        ]);
        //Lapis Legit Coklat
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit Coklat',
        ]);
        //Lapis Legit Keju
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit Keju',
        ]);
        //Lapis Legit Keju 1/3
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit Keju 1/3',
        ]);
        //Lapis Legit Pandan
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Legit Pandan',
        ]);
        //Lapis Pandan 1/3
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 9,
            'name'	=> 'Lapis Pandan 1/3',
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
    }
}
