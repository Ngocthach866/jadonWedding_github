<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'vendors';

    public function vendorable()
    {
        return $this->morphTo();
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    protected $fillable = ['id','name','vendorable_id','vendorable_type','description','picture','deleted_at','updated_at','created_at'];
}
