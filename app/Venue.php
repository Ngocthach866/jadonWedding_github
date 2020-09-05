<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venue extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'venues';

    public function projects(){
        return $this->belongsTo('App\Project');
    }
    public function clients(){
        return $this->belongsTo('App\Client');
    }
    public function requirements(){
        return $this->belongsTo('App\Requirement');
    }
    public function venuetypes(){
        return $this->belongsTo('App\Venuetype');
    }
    public function locations(){
        return $this->belongsTo('App\location');
    }
    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }
    public function programs(){
        return $this->belongsTo('App\Program');
    }
    public function services(){
        return $this->hasOne('App\Service');
    }
    protected $fillable = ['id', 'project_id','client_id', 'requirement_id', 'venuetype_id', 'location_id', 'picture', 'clientinput_id', 'control_id', 'program_id', 'updated_
    at', 'created_at'];
}
