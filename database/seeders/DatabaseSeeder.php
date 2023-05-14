<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\CourseLevel;
use App\Models\Course;
use App\Models\Presta;
use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Monolog\Level;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // "password"
        ]);
        \App\Models\Level::factory()->create([
            'level' => 1,
            'name' => 'Débutant',
        ]);
        \App\Models\Level::factory()->create([
            'level' => 2,
            'name' => 'Intermédiaire',
        ]);
        \App\Models\Level::factory()->create([
            'level' => 3,
            'name' => 'Avancé',
        ]);
        \App\Models\Level::factory()->create([
            'level' => 4,
            'name' => 'Expert',
        ]);
        Course::factory(10)->create();
        Presta::factory(10)->create();

        Resource::factory(10)->create();
    }
}
