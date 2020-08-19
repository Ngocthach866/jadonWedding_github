<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'products';

    public function vendors(){
        return $this->belongsTo('App\Vendor');
    }
    public function purchasingtypes(){
        return $this->belongsTo('App\Purchasingtype');
    }
    public function controls(){
        return $this->belongsTo('App\Control');
    }
    public function purchasings(){
        return $this->hasMany('App\Purchasing');
    }

    protected $fillable = ['id','vendor_id','purchasingtype_id','name','specification','price','picture','expireddate','control_id','deleted_at','updated_at','created_at'];
}
