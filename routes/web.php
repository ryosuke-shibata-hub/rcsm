<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Main\NewsController;
use App\Http\Controllers\Main\InfomationController;
use App\Http\Controllers\Setting\SettingListController;
use App\Http\Controllers\Auth\CertificationController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [CertificationController::class, 'loginView'])->name('loginView');
Route::get('/register/account', [CertificationController::class, 'registerAccount'])->name('registerAccount');

Route::get('/',[MainController::class, 'Main'])->name('main');
Route::get('/setting/create', [SettingListController::class, 'createNewSetting'])->name('createNewSetting');//セッティングの新規作成
Route::post('/setting/new/create', [SettingListController::class, 'createNewSettingPost'])->name('createNewSettingPost');//新規セッティング作成

Route::get('/setting/detail/{id}', [SettingListController::class, 'Detail'])->name('setting_detail');//セッティングの詳細画面
Route::get('/setting/list/all', [SettingListController::class, 'allSettingList'])->name('setting_all_list');//すべてのセッティングリストを表示

Route::get('/setting/list/keyword/{target}/{keyword}', [SettingListController::class, 'searchSetting'])->name('searchSetting');
Route::get('/setting/list/search/', [SettingListController::class, 'searchFreeWordSetting'])->name('searchFreeWordSetting');

Route::get('/news/all', [NewsController::class, 'allNewsList'])->name('allNewsList');
Route::get('/news/detail/{id}', [NewsController::class, 'newsDetail'])->name('newsDetail');

Route::get('/infomation', [InfomationController::class, 'infomationVeiw'])->name('infomationView');
