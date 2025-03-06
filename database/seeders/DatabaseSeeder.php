<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory(100)->create();

        $this -> call([
            UserSeeder::class
        ]);
    }
}
