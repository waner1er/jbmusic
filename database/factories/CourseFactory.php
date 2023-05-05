<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence(3),
            'slug' => Str::slug($title),
            'image' => '',
            'image_alt' => $this->faker->sentence(3),
            'excerpt' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),

            'hour_price' => 50,
            'km_shift' => 0.7,
            'duration' => 1,

            'level_id' => random_int(1, 5),

        ];
    }
}
