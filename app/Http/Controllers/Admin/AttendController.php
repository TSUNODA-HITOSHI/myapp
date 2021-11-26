<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Attend;

class AttendController extends Controller
{
    //
    public function add()
    {
    
        return view('admin.attend.create');
    }
    public function create(Request $request)
    {
        
        $attend = new Attend;
        $form = $request->all();
         // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        // データベースに保存する
        $attend->fill($form);
        $attend->user_id = auth()->id();
        $attend->save();
        // admin//createにリダイレクトする
        return redirect('admin/attend/create');
    } 
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Attend::where('title', $cond_title)->get();
        } else {
          // それ以外はすべての出勤情報を取得する
          $posts = Attend::all();
        }
        return view('admin.attend.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

}
