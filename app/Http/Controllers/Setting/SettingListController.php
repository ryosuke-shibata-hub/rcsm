<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\RedirectResponse;
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
        $settingCategory = config('const.SETTING_LIST.CATEGORY');

        return view('main.create_new_setting')
        ->with('settingCategory', $settingCategory);
    }

    public function createNewSettingPost(Request $request) {

        $validateData = $request->validate([
            'PostName' => ['required', 'max:20'],
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
            'GearRatio' => ['nullable','regex:/^\d{1,2}(\.\d{1})?$/'],
            'Transmitter' => ['nullable', 'max:30'],
            'Receiver' => ['nullable', 'max:30'],
            'Esc' => ['nullable', 'max:30'],
            'Servo' => ['nullable', 'max:30'],
            'Gyro' => ['nullable', 'max:30'],
            'Motor' => ['nullable', 'max:30'],
            'OtherSetting' => ['nullable', 'max:500'],
        ]);
        dd($request);
    }
}
