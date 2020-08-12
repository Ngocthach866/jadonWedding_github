<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'locations';

    public function venuetypes(){
        return $this->belongsTo('App\Venuetype');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }
}
