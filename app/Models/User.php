<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
    public function promotion()
    {
        return $this->hasMany(Promotion::class);
    }
    public function campaign(){
        return $this->hasMany(Campaign::class);
    }
    public function evaluation(){
        return $this->hasMany(Evalution::class);
    }
    public function budgeting_realization(){
        return $this->hasMany(BudgetingRealization::class);
    }
    public function budgeting_realization_admin(){
        return $this->hasMany(BudgetingRealizationAdmin::class);
    }
    public function reimbursement(){
        return $this->hasMany(Reimbursement::class);
    }
    public function budgeting_disbursement(){
        return $this->hasMany(BudgetingDisbursement::class);
    }

    public function staff(){
        return $this->hasMany(Staff::class);
    }

}
