<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resourcegroup extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'resourcegroups';

    public function tasktypes(){
        return $this->belongsTo('App\Tasktype');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }

    public function resources(){
        return $this->hasMany('App\Resource');
    }
}
