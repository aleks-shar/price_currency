<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class PriceRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'currency' => ['nullable', 'in:RUB,USD,EUR'],
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'currency.in' => 'Currency must be one of: RUB, USD, EUR',
        ];
    }
}
