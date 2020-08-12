<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientinput extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'clientinputs';

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

    public function purchasingtypesets(){
        return $this->hasOne('App\Purchasingtypeset');
    }

    public function tasktypes(){
        return $this->hasOne('App\Tasktype');
    }

    public function tasktypesets(){
        return $this->hasOne('App\Tasktypeset');
    }
}
