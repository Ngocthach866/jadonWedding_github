<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'projects';

    public function client1(){
        return $this->belongsTo('App\Client','client1_id');
    }
    public function client2(){
        return $this->belongsTo('App\Client','client2_id');
    }
    public function client3(){
        return $this->belongsTo('App\Client','client3_id');
    }
    public function controls(){
        return $this->hasMany('App\Control');
    }
    public function clientinputs(){
        return $this->hasMany('App\Clientinput');
    }
    public function programs(){
        return $this->hasMany('App\Program');
    }
    public function requirements(){
        return $this->hasMany('App\Requirement');
    }
    public function tasks(){
        return $this->hasMany('App\Task');
    }
    public function purchasings(){
        return $this->hasMany('App\Purchasing');
    }
    public function venues(){
        return $this->hasMany('App\Venue');
    }
    public function services(){
        return $this->hasMany('App\Service');
    }
}