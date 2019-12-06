<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required|max:255',
        'introduction' => 'required|max:255',
    );
        
    public function profilehistory(){
        return $this->hasMany('App\ProfileHistory');
    }
    
}
