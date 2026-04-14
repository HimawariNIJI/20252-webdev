<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Clothing',
                'description' => 'Men and Women apparel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books',
                'description' => 'Fiction and non-fiction books',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
