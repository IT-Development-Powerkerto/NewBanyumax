<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function budgeting_disbursement(){
        return $this->hasMany(BudgetingDisbursement::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
