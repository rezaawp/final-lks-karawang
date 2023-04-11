<?php

namespace Database\Factories;

use App\Models\Choise;
use App\Models\Division;
use App\Models\Poll;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pollId = Poll::all()->random()->id;
        $choiseId = Choise::where('poll_id', $pollId)->get()->random()->id;
        return [
            'choise_id' => $choiseId,
            'poll_id' => $pollId,
            'user_id' => User::all()->random()->id,
            'division_id' => Division::all()->random()
        ];
    }
}
