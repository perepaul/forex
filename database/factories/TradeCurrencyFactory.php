<?php

namespace Database\Factories;

use App\Models\TradeCurrency;
use Illuminate\Database\Eloquent\Factories\Factory;

class TradeCurrencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TradeCurrency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(array('USDGPB','NGNUSD','USDBTC','EURUSD')),
        ];
    }
}
