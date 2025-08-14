<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SettingList;
use App\Models\settingDetail;
use App\Models\settingDetailDevice;
use App\Models\OtherSetting;

use Log;
use DB;
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

            return view('error.http_status.404');
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
                return view('error.http_status.404');
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
        $settingCategory = config('const.SETTING_LIST.CATEGORY');

        return view('main.create_new_setting')
        ->with('settingCategory', $settingCategory);
    }

    public function createNewSettingPost(Request $request) {

        $validateData = $request->validate([
            'PostName' => ['required', 'max:20'],
            'SettingTitle' => ['required', 'max:20'],
            'Comment' => ['required', 'max:255'],
            'Category' => ['required','integer:strict','in:1,2,3,4'],
            'FrontCamber' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'RearCamber' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'FrontToe' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'RearToe' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'FrontCaster' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'RearCaster' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'FrontSkid' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'RearSkid' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'FrontDumperSpring' => ['nullable', 'max:30'],
            'RearDumperSpring' => ['nullable', 'max:30'],
            'FrontDumperOil' => ['nullable', 'max:30'],
            'RearDumperOil' => ['nullable', 'max:30'],
            'FrontHeight' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'RearHeight' => ['nullable','regex:/^[-+]?\d{1,2}(\.\d{1})?$/'],
            'PinionGear' => ['nullable','regex:/^\d{1,2}$/'],
            'SpurGear' => ['nullable','regex:/^\d{1,2}$/'],
            'GearRatio' => ['nullable','regex:/^\d{1,2}(\.\d{2})?$/'],
            'Transmitter' => ['nullable', 'max:30'],
            'Receiver' => ['nullable', 'max:30'],
            'Esc' => ['nullable', 'max:30'],
            'Servo' => ['nullable', 'max:30'],
            'Gyro' => ['nullable', 'max:30'],
            'Motor' => ['nullable', 'max:30'],
            'OtherSetting' => ['nullable', 'max:500'],
        ]);

        try {

            if ($request->file('SettingImg')) {
                $storeImgFile = $request->file('SettingImg')->store(config('const.STORE_IMG.SETTING_MAIN_IMG'), 'public');
            } else {
                $storeImgFile = config('const.STORE_IMG.DEFAULT');
            }

            DB::beginTransaction();

            $registrationSettingList = [
                'PostName' => $request->PostName,
                'SettingTitle' => $request->SettingTitle,
                'Category' => $request->Category,
            ];

            $createSettingListData = SettingList::createSettingList($registrationSettingList, $storeImgFile);
            $settingId = $createSettingListData->setting_id;

            $registrationSettingDetailList = [
                'SettingComment' => $request->Comment,
                'FrontCamber' => $request->FrontCamber,
                'RearCamber' => $request->RearCamber,
                'FrontToe' => $request->FrontToe,
                'RearToe' => $request->RearToe,
                'FrontCaster' => $request->FrontCaster,
                'RearCaster' => $request->RearCaster,
                'FrontSkid' => $request->FrontSkid,
                'RearSkid' => $request->RearSkid,
                'FrontDumperSpring' => $request->FrontDumperSpring,
                'RearDumperSpring' => $request->RearDumperSpring,
                'FrontDumperOil' => $request->FrontDumperOil,
                'RearDumperOil' => $request->RearDumperOil,
                'FrontHeight' => $request->FrontHeight,
                'RearHeight' => $request->RearHeight,
                'PinionGear' => $request->PinionGear,
                'SpurGear' => $request->SpurGear,
                'GearRatio' => $request->GearRatio,
            ];
            $createSettingDetailData = settingDetail::createSettingDetail($registrationSettingDetailList, $settingId);

            $registrationSettingDeviceList = [
                'Transmitter' => $request->Transmitter,
                'Receiver' => $request->Receiver,
                'Esc' => $request->Esc,
                'Servo' => $request->Servo,
                'Gyro' => $request->Gyro,
                'Motor' => $request->Motor,
            ];
            $createSettingDeviceData = settingDetailDevice::createSettingDevice($registrationSettingDeviceList, $settingId);

            $registrationOtherSetting = [
                'OtherSetting' => $request->OtherSetting,
            ];
            $createSettingOtherData = OtherSetting::createSettingOther($registrationOtherSetting, $settingId);


            Log::debug('新規投稿');
            DB::commit();

            return redirect('/');

        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);
            return view('error.http_status.404');
        }
    }
}
