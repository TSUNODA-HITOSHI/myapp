<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Attend;

class AttendController extends Controller
{
    public function index()
    {
        $attends = Attend::all();
        return view ('attend.index' , 
        ['attends' => $attends]);
    }      
}
