<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'clients';

    public function persons()
    {
        return $this->belongsTo('App\Person');
    }

    public function projects_rep1()
    {
        return $this->hasMany('App\Project','client1_id');
    }

    public function projects_rep2()
    {
        return $this->hasMany('App\Project','client2_id');
    }

    public function projects_rep3()
    {
        return $this->hasMany('App\Project','client3_id');
    }

    public function Controls()
    {
        return $this->hasMany('App\Control');
    }

    public function Clientinputs()
    {
        return $this->hasMany('App\Clientinput');
    }
}
