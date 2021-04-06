<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = ['options'=>'object'];

    public function currency()
    {
        return $this->belongsTo(TradeCurrency::class,'trade_currency_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
