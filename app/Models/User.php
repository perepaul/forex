<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'currency_id',
        // 'name',
        // 'email',
        // 'password',
        // 'balance',
        // 'demo_balance',

    ];

    protected $guarded =['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function __construct()
    // {
    //     $this->fillable = $this->attributes;
    // }

    public function isActive()
    {
        return $this->status == 1;
    }

    public function currency()
    {
        return $this->belongsTo(AccountCurrency::class);
    }

    public function trades()
    {
        return $this->hasMany(Trade::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
