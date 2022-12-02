<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $course = new Course();

        $course->name = "Diagnostico y técnicas capilares";
        $course->semester = "1";
        $course->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";

        $course->save();

        $course2 = new Course();

        $course2->name = "Bioseguridad";
        $course2->semester = "1";
        $course2->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";

        $course2->save();

        
        $course3 = new Course();

        $course3->name = "Emprendimiento";
        $course3->semester = "4";
        $course3->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";

        $course3->save();


    }
}
