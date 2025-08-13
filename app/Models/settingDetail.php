<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class settingDetail extends Model
{

    protected $dates = [
        'create_date',
        'update_date'
    ];

    public $timestamps = false;

    public static function createSettingDetail($createSettingDetailData, $settingId)
    {
        $resultSettingDetail = new settingDetail();
        $resultSettingDetail->setting_id = $settingId;
        $resultSettingDetail->setting_comment = $createSettingDetailData['SettingComment'];
        $resultSettingDetail->camber_angle_f = $createSettingDetailData['FrontCamber'];
        $resultSettingDetail->camber_angle_r = $createSettingDetailData['RearCamber'];
        $resultSettingDetail->toe_angle_f = $createSettingDetailData['FrontToe'];
        $resultSettingDetail->toe_angle_r = $createSettingDetailData['RearToe'];
        $resultSettingDetail->caster_angle_f = $createSettingDetailData['FrontCaster'];
        $resultSettingDetail->caster_angle_r = $createSettingDetailData['RearCaster'];
        $resultSettingDetail->skid_angle_f = $createSettingDetailData['FrontSkid'];
        $resultSettingDetail->skid_angle_r = $createSettingDetailData['RearSkid'];
        $resultSettingDetail->dumper_spring_f = $createSettingDetailData['FrontDumperSpring'];
        $resultSettingDetail->dumper_spring_r = $createSettingDetailData['RearDumperSpring'];
        $resultSettingDetail->dumper_oil_f = $createSettingDetailData['FrontDumperOil'];
        $resultSettingDetail->dumper_oil_r = $createSettingDetailData['RearDumperOil'];
        $resultSettingDetail->height_f = $createSettingDetailData['FrontHeight'];
        $resultSettingDetail->height_r = $createSettingDetailData['RearHeight'];
        $resultSettingDetail->pinion_gear = $createSettingDetailData['PinionGear'];
        $resultSettingDetail->spur_gear = $createSettingDetailData['SpurGear'];
        $resultSettingDetail->gear_ratio = $createSettingDetailData['GearRatio'];
        $resultSettingDetail->delete_flg = config('const.COMMON.DELETE_FLG.ENABLE');
        $resultSettingDetail->create_date = now();
        $resultSettingDetail->update_date = now();
        $resultSettingDetail->save();

        return $resultSettingDetail;
    }
}
