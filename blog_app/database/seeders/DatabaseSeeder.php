<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Comments; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('pass1234.'),
        ]);

        Post::factory(5)->create();

        Comments::factory()->count(5)->create();
    }
}
