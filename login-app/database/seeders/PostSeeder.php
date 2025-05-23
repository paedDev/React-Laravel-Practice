<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::factory(20)->create();
    }
}
