<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'employees';

    public function persons()
    {
        return $this->belongsTo('App\Person');
    }
}
