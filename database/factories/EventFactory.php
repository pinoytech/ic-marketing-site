<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'event_webinar_date' => $this->faker->date(),
            'image' => 'http://dummyimage.com/315x197.png',
            'status' => $this->faker->randomElement(['upcoming', 'past']),
            'register_link' => $this->faker->url(),
            'watch_link' => $this->faker->url(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
