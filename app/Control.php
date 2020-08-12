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

    public function purchasingtypesets(){
        return $this->hasOne('App\Purchasingtypeset');
    }

    public function tasktypes(){
        return $this->hasOne('App\Tasktype');
    }

    public function tasktypesets(){
        return $this->hasOne('App\Tasktypeset');
    }

    public function resourcegroups(){
        return $this->hasOne('App\Resourcegroup');
    }

    public function resources(){
        return $this->hasOne('App\Resource');
    }

    public function venuetypes(){
        return $this->hasOne('App\Venuetype');
    }

    public function locations(){
        return $this->hasMany('App\Location');
    }

    public function servicetypes(){
        return $this->hasOne('App\Servicetype');
    }
}
