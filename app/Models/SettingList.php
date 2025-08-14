<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class SettingList extends Model
{
    protected $dates = [
        'create_date',
        'update_date'
    ];

    public $timestamps = false;

    public static function getSettingList($getListCount)
    {
        $settingList = SettingList::where('delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
        ->orderby('create_date', 'desc')
        ->limit($getListCount)
        ->get();

        return $settingList;
    }

    public static function detail($id)
    {
        $targetSettingDetail = SettingList::where('setting_lists.delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
        ->where('setting_lists.setting_id', $id)
        ->leftJoin('setting_details','setting_details.setting_id', '=', 'setting_lists.setting_id')
        ->leftJoin('setting_detail_devices','setting_detail_devices.setting_id', '=', 'setting_lists.setting_id')
        ->leftJoin('other_settings','other_settings.setting_id', '=', 'setting_lists.setting_id')
        ->where('setting_details.delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
        ->first();

        return $targetSettingDetail;
    }

    public static function searchSettingList($target, $keyword)
    {
        $targetSettingList = [];

        if ($target == 'category') {
            $targetSettingList = SettingList::where('delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
            ->where('category', $keyword)
            ->orderby('create_date', 'desc')
            ->get();
        }

        if ($target == 'freeWord') {
            $targetSettingList = SettingList::where('delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
            ->where('setting_title','like', '%'.$keyword.'%')
            ->orderby('create_date', 'desc')
            ->get();
        }

        return $targetSettingList;
    }

    public static function createSettingList($registrationSettingList, $storeImgFile)
    {
        $resultSettingList = new SettingList;
        $resultSettingList->setting_id = Str::uuid();
        $resultSettingList->create_user_id = Str::uuid();
        $resultSettingList->create_user_name = $registrationSettingList['PostName'];
        $resultSettingList->setting_title = $registrationSettingList['SettingTitle'];
        $resultSettingList->category = $registrationSettingList['Category'];
        $resultSettingList->setting_img_main = "/storage/" . $storeImgFile;
        $resultSettingList->delete_flg = config('const.COMMON.DELETE_FLG.ENABLE');
        $resultSettingList->create_date = now();
        $resultSettingList->update_date = now();
        $resultSettingList->save();

        return $resultSettingList;
    }
}
