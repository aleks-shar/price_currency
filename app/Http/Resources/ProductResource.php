<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Enums\Currency;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

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
                Currency::USD => '$' . number_format(
                    $this->price / Config::integer(
                        'price.course_usd',
                        90
                    ),
                    2,
                    '.',
                    '',
                ),
                Currency::EUR => '€' . number_format(
                    $this->price / Config::integer(
                        'price.course_eur',
                        100
                    ),
                    2,
                    '.',
                    '',
                ),
                default => number_format(
                    $this->price / 1.00,
                    0,
                    '.',
                    ' ',
                ) . ' ₽',
            },
        ];
    }
}
