<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('hello/{name}', function($name) {

    return 'Hi ' . $name; 

});

Route::resource('/inventory', InventoryController::class);

