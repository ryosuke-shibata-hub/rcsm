<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class settingDetailDevice extends Model
{

    protected $dates = [
        'create_date',
        'update_date'
    ];

    public $timestamps = false;

    public static function createSettingDevice($registrationSettingDeviceList, $settingId)
    {
        $resultSettingDevice = new settingDetailDevice();
        $resultSettingDevice->setting_id = $settingId;
        $resultSettingDevice->transmitter = $registrationSettingDeviceList['Transmitter'];
        $resultSettingDevice->receiver = $registrationSettingDeviceList['Receiver'];
        $resultSettingDevice->esc = $registrationSettingDeviceList['Esc'];
        $resultSettingDevice->servo = $registrationSettingDeviceList['Servo'];
        $resultSettingDevice->gyro = $registrationSettingDeviceList['Gyro'];
        $resultSettingDevice->motor = $registrationSettingDeviceList['Motor'];
        $resultSettingDevice->delete_flg = config('const.COMMON.DELETE_FLG.ENABLE');
        $resultSettingDevice->create_date = now();
        $resultSettingDevice->update_date = now();
        $resultSettingDevice->save();

        return $resultSettingDevice;
    }
}
