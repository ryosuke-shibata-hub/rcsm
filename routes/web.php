<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Setting\SettingListController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainController::class, 'Main'])->name('main');
Route::get('/setting/detail/{id}', [SettingListController::class, 'Detail'])->name('setting_detail');//セッティングの詳細画面
Route::get('/setting/list/all', [SettingListController::class, 'allSettingList'])->name('setting_all_list');//すべてのセッティングリストを表示
Route::get('/setting/list/keyword/{target}/{keyword}', [SettingListController::class, 'searchSetting'])->name('searchSetting');
Route::get('/setting/list/search/', [SettingListController::class, 'searchFreeWordSetting'])->name('searchFreeWordSetting');
