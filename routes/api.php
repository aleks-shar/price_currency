<?php

use App\Http\Controllers\Api\PriceController;
use Illuminate\Support\Facades\Route;

Route::get('/prices', [PriceController::class, 'index']);
