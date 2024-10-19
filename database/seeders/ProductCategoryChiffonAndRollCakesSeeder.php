<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductCategoryChiffonAndRollCakesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Banana Cake
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Banana Cake',
        ]);
        //Bolu Gulung Keju
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Bolu Gulung Keju',
        ]);
        //Bolu Gulung Lemon
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Bolu Gulung Lemon',
        ]);
        //Bolu Gulung Pandan
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Bolu Gulung Pandan',
        ]);
        //Chiffon Cake Keju
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Chiffon Cake Keju',
        ]);
        //Raisin Muffin
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Raisin Muffin',
        ]);
        //Tiger Roll
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Tiger Roll',
        ]);
        //Zebra Cake 19 Cm
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Zebra Cake 19 Cm',
        ]);
        //Chiffon Red Bean
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Chiffon Red Bean',
        ]);
        //Bolu Gulung Strawberry
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Bolu Gulung Strawberry',
        ]);
        //Chocolate Moist Cake
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Chocolate Moist Cake',
        ]);
        //Marbel Cake
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Marbel Cake',
        ]);
        //Ontbijkoek
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Ontbijkoek',
        ]);
        //Bolu Gulung Mocca
        Product::create([
            'status_id'	=> 1,
            'cat_id'	=> 4,
            'name'	=> 'Bolu Gulung Mocca',
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
    }
}
