<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainController::class, 'Main'])->name('main');
