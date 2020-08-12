<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'projects';

    public function client1()
    {
        return $this->belongsTo('App\Client','client1_id');
    }

    public function client2()
    {
        return $this->belongsTo('App\Client','client2_id');
    }

    public function client3()
    {
        return $this->belongsTo('App\Client','client3_id');
    }

    public function Controls()
    {
        return $this->hasMany('App\Control');
    }

    public function Clientinputs()
    {
        return $this->hasMany('App\Clientinput');
    }

    public function Programs()
    {
        return $this->hasMany('App\Program');
    }
}
