<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherSetting extends Model
{
    protected $dates = [
        'create_date',
        'update_date'
    ];

    public $timestamps = false;

    public static function createSettingOther($registrationOtherSetting, $settingId)
    {
        $resultSettingOther = new OtherSetting();
        $resultSettingOther->setting_id = $settingId;
        $resultSettingOther->other_meta_1 = $registrationOtherSetting['OtherSetting'];
        $resultSettingOther->delete_flg = config('const.COMMON.DELETE_FLG.ENABLE');
        $resultSettingOther->create_date = now();
        $resultSettingOther->update_date = now();
        $resultSettingOther->save();

        return $resultSettingOther;
    }
}
