<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class PriceController extends Controller
{
    /**
     * @return ResourceCollection
     */
    public function index(): ResourceCollection
    {
        return ProductResource::collection(Product::all());
    }
}
