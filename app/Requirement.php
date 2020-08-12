<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requirement extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'requirements';

    public function projects(){
        return $this->belongsTo('App\Project');
    }
    public function clients(){
        return $this->belongsTo('App\Client');
    }
    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function servicetypes(){
        return $this->belongsTo('App\Servicetype');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
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
