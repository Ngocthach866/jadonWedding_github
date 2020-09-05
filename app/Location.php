<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'locations';

    public function venuetypes()
    {
        return $this->belongsTo('App\Venuetype');
    }

    public function controls()
    {
        return $this->belongsTo('App\Control');
    }

    public function venues()
    {
        return $this->hasOne('App\Venue');
    }

    protected $fillable = ['id', 'name', 'address', 'from', 'to', 'venuetype_id', 'price', 'expireddate', 'specification', 'picture', 'control_id', 'updated_
at', 'created_at'];
}
