<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingList extends Model
{
    protected $dates = ['create_date', 'update_date'];

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
        $targetSettingDetail = SettingList::where('setting_lists.delete_flg', config('const.SETTING_LIST.SETTING_MAIN_IMG_PASS'))
        ->where('setting_lists.setting_id', $id)
        ->leftJoin('setting_details','setting_details.setting_id', '=', 'setting_lists.setting_id')
        ->leftJoin('setting_detail_devices','setting_detail_devices.setting_id', '=', 'setting_lists.setting_id')
        ->leftJoin('other_settings','other_settings.setting_id', '=', 'setting_lists.setting_id')
        ->where('setting_details.delete_flg', config('const.SETTING_LIST.SETTING_MAIN_IMG_PASS'))
        ->first();

        return $targetSettingDetail;
    }

    public static function searchSettingList($target, $keyword)
    {
        $targetSettingList = [];

        if ($target == 'category') {
            $targetSettingList = SettingList::where('delete_flg', config('const.SETTING_LIST.SETTING_MAIN_IMG_PASS'))
            ->where('category', $keyword)
            ->orderby('create_date', 'desc')
            ->get();
        }

        if ($target == 'freeWord') {
            $targetSettingList = SettingList::where('delete_flg', config('const.SETTING_LIST.SETTING_MAIN_IMG_PASS'))
            ->where('setting_title','like', '%'.$keyword.'%')
            ->orderby('create_date', 'desc')
            ->get();
        }

        return $targetSettingList;
    }
}
