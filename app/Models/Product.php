<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function promotion()
    {
        return $this->hasMany(Promotion::class);
    }

    public function evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function campaign()
    {
        return $this->hasMany(Campaign::class);
    }

    public function lead()
    {
        return $this->hasMany(Lead::class);
    }

}
