<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user -> name =     "Usuario1";
        $user -> email =    'usuario1@gmail.com';
        $user -> password = bcrypt('1234');

        $user -> save();

        $user = new User();

        $user -> name =     "Usuario2";
        $user -> email =    'usuario2@gmail.com';
        $user -> password = bcrypt('1234');

        $user -> save();
    }
}
