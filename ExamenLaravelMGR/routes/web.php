<?php

use App\Http\Controllers\ProductMGRController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductMGRController::class);

