<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceRequest;
use App\Http\Resources\ProductResource;
use App\Services\PriceService;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class PriceController extends Controller
{
    /**
     * @param PriceRequest $request
     * @param PriceService $service
     * @return ResourceCollection
     */
    public function index(PriceRequest $request, PriceService $service): ResourceCollection
    {
        return ProductResource::collection($service->getAllPrices());
    }
}
