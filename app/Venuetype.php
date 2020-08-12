<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venuetype extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'venuetypes';

    //protected $fillable = ['name'];

    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }
    public function locations(){
        return $this->hasMany('App\Location');
    }
    public function servicetypes(){
        return $this->hasMany('App\Servicetype');
    }
    public function venues(){
        return $this->hasMany('App\Venue');
    }
}
