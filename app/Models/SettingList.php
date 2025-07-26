<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingList extends Model
{
    public static function getSettingList($getListCount)
    {
        $settingList = SettingList::where('delete_flg', config('const.SETTING_LIST.SETTING_MAIN_IMG_PASS'))
        ->orderby('create_date', 'desc')
        ->limit($getListCount)
        ->get();

        return $settingList;
    }

    public static function detail($id)
    {
        $targetSettingDetail = SettingList::where('delete_flg', config('const.SETTING_LIST.SETTING_MAIN_IMG_PASS'))
        ->where('setting_id', $id)
        ->first();

        return $targetSettingDetail;
    }
}