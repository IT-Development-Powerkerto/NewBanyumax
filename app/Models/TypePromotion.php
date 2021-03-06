<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePromotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function promotion()
    {
        return $this->hasMany(Promotion::class);
    }
}
