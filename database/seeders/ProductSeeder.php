<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

final class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Product::query()->create(['title' => 'Product 1', 'price' => 100]);
        Product::query()->create(['title' => 'Product 2', 'price' => 200]);
        Product::query()->create(['title' => 'Product 3', 'price' => 300]);
        Product::query()->create(['title' => 'Product 4', 'price' => 500]);
        Product::query()->create(['title' => 'Product 5', 'price' => 1000]);
        Product::query()->create(['title' => 'Product 6', 'price' => 2000]);
        Product::query()->create(['title' => 'Product 7', 'price' => 5000]);
        Product::query()->create(['title' => 'Product 8', 'price' => 10000]);
        Product::query()->create(['title' => 'Product 9', 'price' => 50000]);
        Product::query()->create(['title' => 'Product 10', 'price' => 100000]);
    }
}
