<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function allNewsList() {

        try {
             $data = News::getAllNews();

             return view('main.news_letter')
             ->with('data', $data);
        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }
    }

    public function newsDetail($id)
    {
        try {
             $data = News::newsDetail($id);

             return view('main.news_detail')
             ->with('data', $data);
        } catch (\Throwable $th) {
            Log::error("例外処理",[$th]);

            return view('main.main');
        }
    }
}
