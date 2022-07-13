<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion =[
            [
                'name'  => 'Product Price',
            ],
            [
                'name'  => 'Shipping Cost',
            ],
            [
                'name'  => 'Admin Cost',
            ],
        ];

        DB::table('type_promotions')->insert($promotion);
    }
}
