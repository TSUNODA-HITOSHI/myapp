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
         // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $attend->fill($form);
      $attend->save();
      // admin//createにリダイレクトする
      return redirect('admin/attend/create');
    } 
}
