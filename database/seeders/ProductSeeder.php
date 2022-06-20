<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::create([
            'name' => 'Gizidat',
            'price' => 68000,
            'sku' => 'GIZ111',
            'admin_id' => 1,
            'product_link' => null,
            'image' => null,
        ]);
    }
}
