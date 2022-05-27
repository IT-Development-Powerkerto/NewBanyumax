<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name'  => 'Admin',
            ],
            [
                'name'  => 'CEO',
            ],
            [
                'name'  => 'Manager',
            ],
            [
                'name'  => 'Advertiser',
            ],
            [
                'name'  => 'Customer Service',
            ],
            [
                'name'  => 'Design Graphic Multimedia',
            ],
            [
                'name'  => 'Content Web Marketing',
            ],
            [
                'name'  => 'IT Developer',
            ],
            [
                'name'  => 'Budgeting',
            ],
            [
                'name'  => 'Inputer',
            ],
            [
                'name'  => 'Human Resource',
            ],
            [
                'name'  => 'Junior Advertiser',
            ],
            [
                'name'  => 'CS External',
            ],
        ];

        DB::table('roles')->insert($role);
    }
}
