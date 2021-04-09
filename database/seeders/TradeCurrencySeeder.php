<?php

namespace Database\Seeders;

use App\Models\TradeCurrency;
use Illuminate\Database\Seeder;

class TradeCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TradeCurrency::factory(4)->create();
    }
}
