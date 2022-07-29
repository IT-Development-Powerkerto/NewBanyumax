<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetingRealizationAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'user_id',
        'item',
        'nominal',
        'description',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
