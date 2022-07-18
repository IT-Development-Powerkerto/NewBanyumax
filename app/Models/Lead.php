<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function operator()
    {
        return $this->belongsTo(Operator::class)->withTrashed();
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
