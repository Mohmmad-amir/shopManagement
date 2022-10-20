<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for ($category=0; $category <500 ; $category++) { 
            # code...
            DB::table('product_categories')->insert([
                'category_name'=>Str::random(10)
            ]);

        }
    }
}
