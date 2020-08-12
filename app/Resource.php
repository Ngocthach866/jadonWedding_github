<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'resources';

    public function resourceable(){
        return $this->morphTo();
    }

    public function resourcegroups(){
        return $this->belongsTo('App\Resourcegroup');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }
}
