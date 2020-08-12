<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    //  protected $primaryKey = 'person_id';    ---> đổi tên primary key
    protected $table = 'persons';        //--->đổi tên table, default của laravel là persons (plural)

    public function companys()
    {
        return $this->hasMany('App\Company');
    }

    public function employees()
    {
        return $this->hasOne('App\Employee');
    }

    public function clients()
    {
        return $this->hasOne('App\Client');
    }

    /*
    public function projects1()
    {
        return $this->hasOneThrough('App\Project','App\Client','person_id','client1_id');
    }
    */

    public function vendors(){
        return $this->morphMany('App\Vendor', 'vendorable');
    }

    public function resources(){
        return $this->morphMany('App\Resource', 'resourceable');
    }
    
}
