<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            WithdrawalSeeder::class,
            DepositTableSeeder::class,
            TradesTableSeeder::class,
            PlanAndPlanFeatureSeeder::class,
            TradeCurrencySeeder::class,
        ]);
    }
}
