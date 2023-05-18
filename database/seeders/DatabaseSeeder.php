<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Page;
use App\Models\Presta;
use App\Models\Resource;
use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@user.fr',
            'password' => bcrypt('password'), // "password
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
        Course::factory(3)->create();
        Presta::factory(3)->create();
        Song::factory(20)->create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('song_users')->insert([
                'song_id' => $i,
                'user_id' => rand(1, 10),
            ]);
        }
        Page::factory()->create([
            'title' => 'welcome',
            'slug' => 'welcome',
            'intro' => 'bienvenue sur le site',
            'content' => 'bienvneue !! ',
            'image' => '1', ]
        );

        Resource::factory(10)->create();
    }
}
