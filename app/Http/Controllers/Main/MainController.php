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
            dd($getListCount);
            $setting_list = SettingList::getSettingList();


            return view('main.main');
        } catch (\Throwable $th) {
            // return view('main.main');
        }

    }
}
