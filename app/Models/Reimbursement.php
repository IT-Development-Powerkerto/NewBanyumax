<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reimbursement extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'user_id',
        'reason',
        'phone',
        'nominal',
        'no_rekening',
        'attachment',
        'status',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
