<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchasingtypeset extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'purchasingtypesets';

    public function purchasingtypes1(){
        return $this->belongsTo('App\Purchasingtype','purchasingtype1_id');
    }
    public function purchasingtypes2(){
        return $this->belongsTo('App\Purchasingtype','purchasingtype2_id');
    }
    public function purchasingtypes3(){
        return $this->belongsTo('App\Purchasingtype','purchasingtype3_id');
    }
    public function purchasingtypes4(){
        return $this->belongsTo('App\Purchasingtype','purchasingtype4_id');
    }
    public function purchasingtypes5(){
        return $this->belongsTo('App\Purchasingtype','purchasingtype5_id');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function servicetypes(){
        return $this->hasMany('App\Servicetype');
    }

    protected $fillable = ['name', 'purchasingtype1_id', 'purchasingtype2_id', 'purchasingtype3_id','purchasingtype4_id','purchasingtype5_id','master','picture','clientinput_id','control_id'];
}
