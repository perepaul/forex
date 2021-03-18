<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    public function currency()
    {
        $this->hasMany(TradeCurrency::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
