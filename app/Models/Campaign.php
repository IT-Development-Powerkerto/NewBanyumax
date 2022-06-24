<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // public function products(){
    // 	return $this->belongsTo(Product::class,'product_id','id');
    // }

    public function facebook_event(){
    	return $this->belongsTo(FacebookEvent::class,'facebook_event_id','id');
    }

    public function facebook_wa(){
    	return $this->belongsTo(FacebookEvent::class,'facebook_wa_id','id');
    }

}
