<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacebookWa extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'event_pixel',
        ];

    public function campaign(){
        return $this->hasMany(Campaign::class);
    }
}
