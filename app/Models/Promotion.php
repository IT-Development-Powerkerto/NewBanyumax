<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $table = 'promotions';

    protected $fillable = [
        'admin_id',
        'user_id',
        'promotion_type_id',
        'promotion_name',
        'product_id',
        'promotion_product_price',
        'promotion_product_percent',
        'total_promotion',
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function type_promotion()
    {
    	return $this->belongsTo(TypePromotion::class, 'promotion_type_id', 'id');
    }

}
