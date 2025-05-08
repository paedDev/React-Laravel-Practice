<?php

namespace Database\Factories;


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
            // 'employer_id' => Employer::factory(),
            'title' => fake()->realText(30),
            'body' => fake()->realText(200),
            // 'comments_id' => Comments::factory(),
            // $table->string('title');
            // $table->text('body');


        ];
    }
}
