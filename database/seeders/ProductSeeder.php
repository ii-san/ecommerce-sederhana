<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                "name" => 'Sony Refrigator',
                "price" => '200',
                "description" => 'Refrigator with cool design',
                "category" => 'Frigade',
                'gallery'=> 'refrigator.jpg'
            ], [
                "name" => 'Panasonic TV',
                "price" => '250',
                "description" => 'A slim television for family',
                "category" => 'TV',
                'gallery'=> 'tv.jpg'
            ]
        ]);
    }
}
