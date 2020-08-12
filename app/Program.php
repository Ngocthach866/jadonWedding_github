<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'programs';

    public function projects()
    {
        return $this->belongsTo('App\Project');
    }

    public function milestones1(){
        return $this->belongsTo('App\Milestone','milestone1_id');
    }

    public function milestones2(){
        return $this->belongsTo('App\Milestone','milestone2_id');
    }

    public function milestones3(){
        return $this->belongsTo('App\Milestone','milestone3_id');
    }

    public function milestones4(){
        return $this->belongsTo('App\Milestone','milestone4_id');
    }

    public function milestones5(){
        return $this->belongsTo('App\Milestone','milestone5_id');
    }

    public function milestones6(){
        return $this->belongsTo('App\Milestone','milestone6_id');
    }

    public function milestones7(){
        return $this->belongsTo('App\Milestone','milestone7_id');
    }

    public function milestones8(){
        return $this->belongsTo('App\Milestone','milestone8_id');
    }

    public function milestones9(){
        return $this->belongsTo('App\Milestone','milestone9_id');
    }

    public function clientinputs(){
        return $this->belongsTo('App\Clientinput');
    }

    public function controls(){
        return $this->belongsTo('App\Control');
    }
}
