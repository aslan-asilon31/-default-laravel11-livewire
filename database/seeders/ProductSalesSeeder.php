<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Inventory;


class ProductSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 1; $i <= 225; $i++) {
            Inventory::create([
                'product_sales_id' => $i, 
                'amount' => rand(10, 50), 
                'workspace_id' => 5,
            ]);
        }


    }

    
}
