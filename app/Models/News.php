<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static function getAllNews()
    {
        $data = News::where('delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
        ->orderby('create_date', 'desc')
        ->get();

        return $data;
    }

    public static function newsDetail($id)
    {
        $data = News::where('delete_flg', config('const.COMMON.DELETE_FLG.ENABLE'))
        ->where('news_id', $id)
        ->first();

        return $data;
    }
}
