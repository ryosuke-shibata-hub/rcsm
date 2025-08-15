<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfomationController extends Controller
{
    public function infomationVeiw()
    {
        return view('main.infomation');
    }
}
