<?php

use Illuminate\Support\Facades\Route;
use Nyxon\Http\Controllers\NyxonController;

Route::group(['prefix' => 'nyxon',], function () {
    Route::get('/', [NyxonController::class, 'index'])->name('nyxon.index');
});
