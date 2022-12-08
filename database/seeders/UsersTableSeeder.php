<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'     => 'Sagor Roy',
            'email'    => 'sagor@example.com',
            'password' => bcrypt('password')
        ]);

        $user->createToken('user token')->plainTextToken;

        User::factory()->count(4)->create();
    }
}
