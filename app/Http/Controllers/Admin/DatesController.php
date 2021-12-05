<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Date;

class DatesController extends Controller
{
    public function index(Request $request)
    {
        //日付が選択されたら
        if (!empty($request['from']) && !empty($request['until'])) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
            $date = Date::getDate($request['from'], $request['until']);
        } else {
            //リクエストデータがなければそのままで表示
            $date = Date::get();
        }

        //取得したデータをviewに渡す
        return view('date', [
            "date" => $date
        ]);
    }
}