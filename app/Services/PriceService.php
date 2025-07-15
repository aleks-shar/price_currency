<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

final class PriceService
{
    /**
     * @return Collection<int, Product>
     */
    public function getAllPrices(): Collection
    {
        return Product::all();
    }
}
