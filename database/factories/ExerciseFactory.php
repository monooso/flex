<?php

namespace Database\Factories;

use App\Enums\MuscleGroup;
use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $muscleGroups = array_column(MuscleGroup::cases(), 'value');

        return [
            'demo_url' => $this->faker->url,
            'muscle_group' => $this->faker->randomElement($muscleGroups),
            'name' => $this->faker->unique()->word,
            'needs_anchor' => $this->faker->boolean,
            'needs_pull_up_bar' => $this->faker->boolean,
        ];
    }
}
