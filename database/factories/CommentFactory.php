<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

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
            'author' => $this->faker->word,
            'contents' => $this->faker->sentence
        ];
    }
}
