<?php

namespace Database\Seeders;

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
        DB::table('products_1')->insert([
            [
                'name' => 'Sản phẩm 1',
                'price' => 100000,
                'image' => 'product1.jpg',
                'cate_id' => 1, // Đảm bảo cate_id này tồn tại trong bảng categories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sản phẩm 2',
                'price' => 200000,
                'image' => 'product2.jpg',
                'cate_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
