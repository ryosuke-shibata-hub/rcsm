<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingList;
use App\Models\News;

use Log;

class MainController extends Controller
{
    public function Main() {

        try {

            $getListCount = config('const.SETTING_LIST.GET_COUNT');
            $settingList = SettingList::getSettingList($getListCount);
            $newsList = News::topNewsList();

            return view('main.main')
            ->with('settingList', $settingList)
            ->with('newsList', $newsList);

        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }

    }
}
