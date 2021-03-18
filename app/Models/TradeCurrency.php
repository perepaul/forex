<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeCurrency extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function trades()
    {
        return $this->belongsTo(Trade::class,'currency_id');
    }

}
