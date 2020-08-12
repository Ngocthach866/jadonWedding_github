<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Control extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'controls';

    public function projects(){
        return $this->belongsTo('App\Project');
    }

    public function clients(){
        return $this->belongsTo('App\Client');
    }

    public function milestones(){
        return $this->hasOne('App\Milestone');
    }

    public function programs(){
        return $this->hasOne('App\Program');
    }

    public function purchasingtypes(){
        return $this->hasOne('App\Purchasingtype');
    }

    public function products(){
        return $this->hasOne('App\Product');
    }
}
