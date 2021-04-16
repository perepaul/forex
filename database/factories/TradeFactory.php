<?php

namespace Database\Factories;

use App\Models\Trade;
use App\Models\TradeCurrency;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'trade_currency_id' => 1,
            'user_id' => rand(1, User::all()->count()),
            'amount' => $this->faker->randomNumber(),
            'profit' => $this->faker->randomNumber(),
            'options'=> ['stop_trade'=>50],
            'is_demo'=>1,
            'type' => $this->faker->randomElement(array('buy','sell'))
        ];
    }
}
