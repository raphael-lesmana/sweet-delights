<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        User::factory(10)->create();
        User::factory(10)->admin()->create();

        User::create([
            'email' => 'test@example.com',
            'name' => 'test',
            'password' => 'password', 
        ]);

        User::create([
            'email' => 'admin@example.com',
            'name' => 'admin',
            'password' => 'password', 
            'is_admin' => true,
        ]);

    }
}
