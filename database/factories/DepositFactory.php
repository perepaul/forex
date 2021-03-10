<?php

namespace Database\Factories;

use App\Models\Deposit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepositFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Deposit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(range(1,User::all()->count())),
            'reference' => generateReference(),
            'currency_id' => 1,
            'amount' => $this->faker->randomNumber(),
            'method' => 'bitcoin',
            'status' => 'pending',
        ];
    }
}
