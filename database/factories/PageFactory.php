<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $name = $this->faker->name(),
            'slug' => $name,
            'intro' => $this->faker->text(255),
            'content' => $this->faker->text(),
            'image' => '1',
        ];
    }
}
