<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Comment;
use App\Models\Group;
use App\Models\Location;
use App\Models\Source;
use App\Models\Tag;
use App\Models\Type;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            $User = User::factory()->create();

            Location::factory()
            ->times(10)
            ->for($User)
            ->hasAddress()
            ->hasCoordinate()
            ->hasAttached(Tag::factory()->for($User)->count(3))
            ->hasAttached(Source::factory()->for($User)->create())
            ->hasImages(2, ['user_id' => $User->id])
            ->for(Type::factory()->for($User)->create())
            ->create();
        }

        $Users = User::all();
        Comment::factory()->for(User::all()->random())->for(Location::all()->first())->count(2)->create();
        Comment::factory()->for(User::all()->random())->for(Location::all()->random())->count(2)->create();

        Visit::factory()->for(User::all()->random())->for(Location::all()->random())->create();
        Visit::factory()->for(User::all()->random())->for(Location::all()->random())->create();

        Client::factory()->for(User::all()->random())->count(3)->create();
    }
}
