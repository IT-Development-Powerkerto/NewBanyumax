<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetingDisbursement extends Model
{
    use HasFactory;

    protected $fillable =[
        'admin_id',
        'user_id',
        // 'role_id',
        'campaign_id',
        'nominal',
        'no_rek',
        'target_omzet',
        'status',
    ];

    public function campaign() {
        return $this->belongsTo(Campaign::class, 'campaign_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
