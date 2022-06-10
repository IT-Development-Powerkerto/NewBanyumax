<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function products(){
    	return $this->belongsTo(Product::class,'product_id','id');
    }

    public function facebookpixel(){
    	return $this->belongsTo(FacebookEventPixel::class,'facebook_pixel_id','id');
    }

    public function tiktokpixel(){
    	return $this->belongsTo(TiktokEventPixel::class,'tiktok_pixel_id','id');
    }

    public function whatsapppixel(){
    	return $this->belongsTo(TiktokEventPixel::class,'whatsapp_pixel_id','id');
    }
}
