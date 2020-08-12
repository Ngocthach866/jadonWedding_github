<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicetype extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'servicetypes';

    public function tasktypesets(){
        return $this->belongsTo('App\Tasktypeset');
    }

    public function purchasingtypesets(){
        return $this->belongsTo('App\Purchasingtypeset');
    }

    public function venuetypes(){
        return $this->belongsTo('App\Venuetype');
    }

    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }
}
