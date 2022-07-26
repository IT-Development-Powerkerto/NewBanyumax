<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'announcement'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
