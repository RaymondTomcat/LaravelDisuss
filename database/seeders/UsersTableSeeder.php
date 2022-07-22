<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'test@test.com',
            'password' => bcrypt('password'),
            'type' => User::ADMIN,
        ]);

        User::factory()->create([
            'name' => 'Raymond',
            'email' => 'test@test1.com',
            'password' => bcrypt('password'),
            'type' => User::DEFAULT,
        ]);

        User::factory()->count(5)->create();
    }
}
