<?php

namespace App;

use App\Attend;

use App\History;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    //
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );

    // // Attend Modelに関連付けを行う
    // public function histories()
    // {
    //     return $this->hasMany('App\History');
    // }    

}