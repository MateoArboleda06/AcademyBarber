<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuario Estudiante',
            'email' => 'estudiante@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Student');

        User::create([
            'name' => 'Mateo Arboleda Vasco',
            'email' => 'mateo@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jose Chaverra',
            'email' => 'jose@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Teacher');
    }
}
