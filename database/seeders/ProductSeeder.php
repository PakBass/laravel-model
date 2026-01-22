<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::create([
            'name' => 'Consumer Laptop',
            'description' => 'laptop konsumer untuk goyim',
            'stock' => '14'
        ]);
        product::create([
            'name' => 'Toys',
            'description' => 'mainan dewasa',
            'stock' => '88'
        ]);
    }
}
