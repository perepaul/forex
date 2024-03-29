<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountCurrency extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class,'currency_id');
    }
}
