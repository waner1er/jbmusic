<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presta>
 */
class PrestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title =$this->faker->sentence(3),
            'slug' => Str::slug($title),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'image_alt' => $this->faker->sentence(3),
            'excerpt' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),

            'hour_price' => 50,
            'forfait_price' => 500,
            'km_shift' => 0.7,
            'duration' => 1,
        ];
    }
}
