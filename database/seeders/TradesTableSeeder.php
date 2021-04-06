<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Trade::factory(10)->create();
    }
}
