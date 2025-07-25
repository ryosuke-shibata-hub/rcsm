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
            $setting_list = SettingList::getSettingList($getListCount);

            return view('main.main')
            ->with('setting_list', $setting_list);

        } catch (\Throwable $th) {
            // return view('main.main');
        }

    }
}
