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

        $course->name = "Diagnosis and Hair Techniques";
        $course->semester = "1";        
        $course->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";
        $course->teacher = "Jose Chaverra";
        $course->group = "Grupo 1";

        $course->save();

        $course2 = new Course();

        $course2->name = "Biosafety";
        $course2->semester = "1";
        $course2->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";
        $course2->teacher = "Jose Chaverra";
        $course2->group = "Grupo 2";

        $course2->save();
  
        $course3 = new Course();

        $course3->name = "Entrepreneurship";
        $course3->semester = "4";
        $course3->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";
        $course3->teacher = "Jose Chaverra";
        $course3->group = "Grupo 3";

        $course3->save();

        $course4 = new Course();

        $course4->name = "Sale and Consulting";
        $course4->semester = "5";
        $course4->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";
        $course4->teacher = "Jose Chaverra";
        $course4->group = "Grupo 4";

        $course4->save();

        $course5 = new Course();

        $course5->name = "Hair Color Change Techniques";
        $course5->semester = "3";
        $course5->description = "Valorar el estado del cabello y el cuero cabelludo del cliente teniendo en cuenta el protocolo establecido.";
        $course5->teacher = "Jose Chaverra";
        $course5->group = "Grupo 5";

        $course5->save();


    }
}
