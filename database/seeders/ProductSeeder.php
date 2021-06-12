<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            ['code' => Str::upper(Str::random(5)), 'name' => 'Produk 1', 'price' => 1000, 'desc' => 'Deskripsi Produk 1', 'created_at' => date('Y-m-d H:i:s')],
            ['code' => Str::upper(Str::random(5)), 'name' => 'Produk 2', 'price' => 2000, 'desc' => '', 'created_at' => date('Y-m-d H:i:s')],
            ['code' => Str::upper(Str::random(5)), 'name' => 'Produk 3', 'price' => 3000, 'desc' => 'Deskripsi Produk 3', 'created_at' => date('Y-m-d H:i:s')],
            ['code' => Str::upper(Str::random(5)), 'name' => 'Produk 4', 'price' => 4000, 'desc' => '', 'created_at' => date('Y-m-d H:i:s')],
            ['code' => Str::upper(Str::random(5)), 'name' => 'Produk 5', 'price' => 5000, 'desc' => 'Deskripsi Produk 5', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
