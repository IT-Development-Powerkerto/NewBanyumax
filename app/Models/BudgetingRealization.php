<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BudgetingRealization extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'admin_id',
        'user_id',
        'campaign_id',
        'item',
        'nominal',
        'funds',
        'description',
        'attachment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function campaign()
     {
        return $this->belongsTo(Campaign::class, 'campaign_id','id');
    }
}
