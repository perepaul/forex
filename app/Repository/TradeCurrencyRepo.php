<?php

namespace App\Repository;

use App\Models\TradeCurrency;
use App\Repository\BaseRepository;

class TradeCurrencyRepo extends BaseRepository
{
    protected $modelClass = TradeCurrency::class;
}
