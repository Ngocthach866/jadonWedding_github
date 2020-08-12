<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchasingtype extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'purchasingtypes';

    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }
    public function products(){
        return $this->hasMany('App\Product');
    }
    public function purchasingtypesets(){
        return $this->hasMany('App\Purchasingtypeset');
    }
    public function purchasings(){
        return $this->hasMany('App\Purchasing');
    }
}
