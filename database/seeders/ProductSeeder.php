<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Barang 1',
                'details' => 'Detail 1',
                'price' => 100,
                'stock' => 10,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 2',
                'details' => 'Detail 2',
                'price' => 200,
                'stock' => 20,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 3',
                'details' => 'Detail 3',
                'price' => 300,
                'stock' => 30,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 4',
                'details' => 'Detail 4',
                'price' => 400,
                'stock' => 40,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 5',
                'details' => 'Detail 5',
                'price' => 500,
                'stock' => 50,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 6',
                'details' => 'Detail 6',
                'price' => 600,
                'stock' => 60,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 7',
                'details' => 'Detail 7',
                'price' => 700,
                'stock' => 70,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 8',
                'details' => 'Detail 8',
                'price' => 800,
                'stock' => 80,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 9',
                'details' => 'Detail 9',
                'price' => 900,
                'stock' => 90,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Barang 10',
                'details' => 'Detail 10',
                'price' => 1000,
                'stock' => 100,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
