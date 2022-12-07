<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'Grupo 1',
            'schedule' => 'Mañana',
            'course' => 'Biosafety',
            'teacher' => 'Jose Chaverra',
            'course_id' => 2,
            'teacher_id' => 3
        ]);

        Group::create([
            'name' => 'Grupo 2',
            'schedule' => 'Tarde',
            'course' => 'Entrepreneurship',
            'teacher' => 'Jose Chaverra',
            'course_id' => 3,
            'teacher_id' => 3
        ]);

        Group::create([
            'name' => 'Grupo 3',
            'schedule' => 'Noche',
            'course' => 'Diagnosis and Hair Techniques',
            'teacher' => 'Jose Chaverra',
            'course_id' => 1,
            'teacher_id' => 3
        ]);
    }
}
