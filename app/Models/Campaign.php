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

    public function facebook_event()
    {
    	return $this->belongsTo(FacebookEvent::class,'facebook_event_id','id');
    }
    public function facebook_wa()
    {
    	return $this->belongsTo(FacebookEvent::class,'facebook_wa_id','id');
    }
    public function tiktok_event()
    {
    	return $this->belongsTo(FacebookEvent::class,'tiktok_event_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function lead()
    {
        return $this->hasMany(Lead::class);
    }
    public function disbursement()
    {
        return $this->hasMany(BudgetingDisbursement::class);
    }

    public function realization()
    {
        return $this->hasMany(BudgetingRealizaftion::class);
    }

}
