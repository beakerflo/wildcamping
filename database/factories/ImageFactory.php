<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

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
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'filename' => $this->faker->word . mt_rand(1000,9999) . ".jpg"
        ];
    }
}
