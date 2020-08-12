<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasktypeset extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'tasktypesets';

    public function tasktypes1(){
        return $this->belongsTo('App\Tasktype','tasktype1_id');
    }
    public function tasktypes2(){
        return $this->belongsTo('App\Tasktype','tasktype2_id');
    }
    public function tasktypes3(){
        return $this->belongsTo('App\Tasktype','tasktype3_id');
    }
    public function tasktypes4(){
        return $this->belongsTo('App\Tasktype','tasktype4_id');
    }
    public function tasktypes5(){
        return $this->belongsTo('App\Tasktype','tasktype5_id');
    }
    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
