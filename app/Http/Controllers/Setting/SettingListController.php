<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SettingList;

use Log;

class SettingListController extends Controller
{
    public function Detail($id)
    {

        try {
            $targetSettingDetail = SettingList::detail($id);

            return view('main.setting_detail')
            ->with('targetSettingDetail' ,$targetSettingDetail);

        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }

    }

    public function allSettingList()
    {
        try {

            $getListCount = config('const.SETTING_LIST.GET_COUNT_ALL');
            $settingList = SettingList::getSettingList($getListCount);

            return view('main.setting_all_list')
            ->with('settingList', $settingList);
        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }
    }

    public function searchSetting($target, $keyword)
    {
        try {
            if (empty($keyword || $target)) {
                return view('404');
            }

            $settingList = SettingList::searchSettingList($target, $keyword);

            return view('main.setting_all_list')
            ->with('settingList', $settingList);

        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }
    }

    public function searchFreeWordSetting(Request $request)
    {
        try {

            $target = $request->category;
            $keyword = $request->freeWord;
            $settingList = SettingList::searchSettingList($target, $keyword);

            return view('main.setting_all_list')
            ->with('settingList', $settingList);

        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }
    }

    public function createNewSetting()
    {
        return view('main.create_new_setting');
    }
}
