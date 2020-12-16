<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Coordinate;
use App\Models\Location;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'type_id' => Type::factory(),
            'coordinate_id' => Coordinate::factory(),
            'address_id' => Address::factory(),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence
        ];
    }
}
