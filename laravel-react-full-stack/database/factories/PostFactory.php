<?php

namespace Database\Factories;

use App\Models\Comments;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->realText(30),
            'comments' => Comments::factory(),
            'body' => fake()->realText(200)
            // $table->string('title');
            // $table->text('body');


        ];
    }
}
