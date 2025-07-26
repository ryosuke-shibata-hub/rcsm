<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SettingList;
class MainController extends Controller
{
    public function Main() {

        try {

            $getListCount = config('const.SETTING_LIST.GET_COUNT');
            $settingList = SettingList::getSettingList($getListCount);

            return view('main.main')
            ->with('settingList', $settingList);

        } catch (\Throwable $th) {
            // return view('main.main');
        }

    }
}