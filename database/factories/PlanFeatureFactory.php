<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\PlanFeature;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlanFeature::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $plans = Plan::all();
        $first = $plans->first();
        $last = $plans->last();
        return [
            'plan_id'=>rand($first->id,$last->id),
            'value' => str_limit($this->faker->sentence(35),45,''),
        ];
    }
}
