<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Roberto', 'surname' => 'Palanga', 'email' => 'roberto.palanga@example.com', 'password' => bcrypt('password123'), 'profile_img' => 'roberto.png', 'bio' => 'Biografia di Roberto'],
            ['name' => 'Emanuele', 'surname' => 'Pogliari', 'email' => 'emanuele.pogliari@example.com', 'password' => bcrypt('password123'), 'profile_img' => 'emanuele.png', 'bio' => 'Biografia di Emanuele'],
            ['name' => 'Giuseppe', 'surname' => 'Cassone', 'email' => 'giuseppe.cassone@example.com', 'password' => bcrypt('password123'), 'profile_img' => 'giuseppe.png', 'bio' => 'Biografia di Giuseppe'],
            ['name' => 'Mattia', 'surname' => 'Morriale', 'email' => 'mattia.morriale@example.com', 'password' => bcrypt('password123'), 'profile_img' => 'mattia.png', 'bio' => 'Biografia di Mattia'],
            ['name' => 'Federico', 'surname' => 'Dibitonto', 'email' => 'federico.dibitonto@example.com', 'password' => bcrypt('password123'), 'profile_img' => 'federico.png', 'bio' => 'Biografia di Federico'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
