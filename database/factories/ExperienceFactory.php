<?php

namespace Database\Factories;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => fake()->jobTitle(),
            'entreprise' => fake()->company(),
            'date_debut' => fake()->date(),
            'date_fin' => fake()->optional(0.7)->date(),
            'description' => fake()->paragraph(),
        ];
    }

    /**
     * Indicate that the experience is current (no end date).
     */
    public function current(): static
    {
        return $this->state(fn (array $attributes) => [
            'date_fin' => null,
        ]);
    }
}