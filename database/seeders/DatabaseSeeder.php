<?php

namespace Database\Seeders;

use App\Models\LocalUser;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        LocalUser::factory(15)->create();
        LocalUser::create([
            'name' => 'Noadmin',
            'pin' => '1075',
            'avatar' => 'images/shinchan.png',
            'role' => 'user',
        ]);

        LocalUser::create([
            'name' => 'admin',
            'pin' => '1075',
            'avatar' => 'images/shinchan.png',
            'role' => 'admin',
        ]);

    }

}
