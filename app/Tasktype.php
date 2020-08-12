<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasktype extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'tasktypes';

    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }

    public function tasktypesets(){
        return $this->hasMany('App\Tasktypeset');
    }

    public function reourcegroups(){
        return $this->hasMany('App\Resourcegroup');
    }
}
