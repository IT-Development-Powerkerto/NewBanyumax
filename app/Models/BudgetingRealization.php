<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BudgetingRealization extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'admin_id',
        'user_id',
        'item',
        'nominal',
        'description',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
