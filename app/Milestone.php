<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Milestone extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'milestones';

    public function clientinputs()
    {
        return $this->belongsTo('App\Clientinput');
    }

    public function controls()
    {
        return $this->belongsTo('App\Control');
    }

    public function Programs()
    {
        return $this->hasOne('App\Program');
    }
}
