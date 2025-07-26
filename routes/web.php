<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Setting\SettingListController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainController::class, 'Main'])->name('main');
Route::get('/setting/detail/{id}', [SettingListController::class, 'Detail'])->name('setting_detail');
