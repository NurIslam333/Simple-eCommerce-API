<?php

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'getAllProducts']);
Route::get('/categories', [ProductController::class, 'getAllCategories']);
Route::get('/products/category/{category}', [ProductController::class, 'getProductsByCategory']);
Route::get('/products/{id}', [ProductController::class, 'getProductDetails']);
