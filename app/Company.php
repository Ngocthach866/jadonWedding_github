<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'companys';

    public function persons(){
        return $this->belongsTo('App\Person');
    }

    public function vendors(){
        return $this->morphMany('App\Vendor', 'vendorable');
    }

    public function resources(){
        return $this->morphMany('App\Resource', 'resourceable');
    }

}
