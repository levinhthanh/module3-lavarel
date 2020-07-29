<?php

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
        DB::table('products')->insert([
            'name' => 'Hoa mai',
            'image' => 'sp1.jpg',
            'price' => 140000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa lan',
            'image' => 'sp2.jpg',
            'price' => 100000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa cúc',
            'image' => 'sp3.jpg',
            'price' => 105000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa đào',
            'image' => 'sp4.jpg',
            'price' => 130000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa nhài',
            'image' => 'sp5.jpg',
            'price' => 101000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa lay ơn',
            'image' => 'sp6.jpg',
            'price' => 190000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa sen',
            'image' => 'sp7.jpg',
            'price' => 108000,
        ]);
        DB::table('products')->insert([
            'name' => 'Hoa hồng',
            'image' => 'sp8.jpg',
            'price' => 170000,
        ]);
    }
}
