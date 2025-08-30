<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\posts::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            // 'thumbnail' => $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 9),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
