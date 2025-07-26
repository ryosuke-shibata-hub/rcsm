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
}