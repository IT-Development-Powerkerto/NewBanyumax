<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'admin_id',
        'user_id',
        'product_id',
        'date',
        'time',
        'resistance',
        'solution',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
