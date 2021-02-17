<?php

namespace Database\Factories;

use App\Models\Withdrawal;
use Illuminate\Database\Eloquent\Factories\Factory;

class WithdrawalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Withdrawal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->uuid,
            'user_id' => 1,
            'amount' => $this->faker->randomNumber(),
            'status' => 1,
        ];
    }
}
