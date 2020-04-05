<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');
    
    //PHP_14 課題5
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
    //ProfileHistory Modelに関連付けを行う
    public function profileHistories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}
