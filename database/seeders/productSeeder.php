<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($product=0; $product <100; $product++) { 
            # code...
            DB::table('products')->insert([
                'product_name'=> Str::random(10),
                'description'=> Str::random(100),
                'category'=> Str::random(10),
                'supplier'=> Str::random(10),
                'stock'=> (10),
                'supplier_price'=> (0.00),
                'sell_price'=> (0.00),
                'product_per_cartoon'=> (5),
            ]);
        }
    }
}
