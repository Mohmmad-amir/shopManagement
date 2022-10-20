<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($customer=0; $customer < 500; $customer++) { 
            # code...
            DB::table('customers')->insert([
                'customer_name'=> Str::random(10),
                'customer_email'=> Str::random(10) .'@gmail.com',
                'customer_mobile'=> '+8801900003200',
                'customer_address'=> Str::random(100),
                'customer_balance'=> (10000.00),
            ]);
        }
    }
}
