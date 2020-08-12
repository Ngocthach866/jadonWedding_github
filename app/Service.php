<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'services';

    public function projects(){
        return $this->belongsTo('App\Project');
    }
    public function requirements(){
        return $this->belongsTo('App\Requirement');
    }
    public function servicetypes(){
        return $this->belongsTo('App\Servicetype');
    }

    public function tasks1(){
        return $this->belongsTo('App\Task','task1_id');
    }
    public function tasks2(){
        return $this->belongsTo('App\Task','task2_id');
    }
    public function tasks3(){
        return $this->belongsTo('App\Task','task3_id');
    }
    public function tasks4(){
        return $this->belongsTo('App\Task','task4_id');
    }
    public function tasks5(){
        return $this->belongsTo('App\Task','task5_id');
    }

    public function purchasings1(){
        return $this->belongsTo('App\Purchasing','purchasing1_id');
    }
    public function purchasings2(){
        return $this->belongsTo('App\Purchasing','purchasing2_id');
    }
    public function purchasings3(){
        return $this->belongsTo('App\Purchasing','purchasing3_id');
    }
    public function purchasings4(){
        return $this->belongsTo('App\Purchasing','purchasing4_id');
    }
    public function purchasings5(){
        return $this->belongsTo('App\Purchasing','purchasing5_id');
    }

    public function venues(){
        return $this->belongsTo('App\Venue');
    }

    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }
    public function programs(){
        return $this->belongsTo('App\Program');
    }
}
