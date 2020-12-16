<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'location_id' => Location::factory(),
            'visited_at' => $this->faker->dateTime,
            'story' => $this->faker->sentence
        ];
    }
}
