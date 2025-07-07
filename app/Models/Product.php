<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property float $price
 */
final class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['title', 'price'];
}
