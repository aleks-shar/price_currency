<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Product
 */
final class ProductResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => match ($request->query('currency')) {
                'USD' => '$' . number_format($this->price / 90, 2, '.', ''),
                'EUR' => '€' . number_format($this->price / 100, 2, '.', ''),
                default => number_format($this->price/1.00, 0, '.', ' ') . ' ₽',
            },
        ];
    }
}
