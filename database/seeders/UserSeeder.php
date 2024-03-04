<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'email' => 'revanp0@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Revan'
        ]);
    }
}
