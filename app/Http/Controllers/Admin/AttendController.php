<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttendController extends Controller
{
    //
    public function add()
    {
        return view('admin.attend.create');
    }
    public function create(Request $request)
    {
      // admin/news/createにリダイレクトする
      return redirect('admin/attend/create');
    } 
}
