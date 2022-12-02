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
        $course->description = "Assessing the condition of the client's hair and scalp, taking into account the established protocol.";
        $course->teacher = "Jose Chaverra";
        $course->group = "1";

        $course->save();

        $course2 = new Course();

        $course2->name = "Biosafety";
        $course2->semester = "1";
        $course2->description = "Prepare the work area according to the service, biosafety standards and legal framework.";
        $course2->teacher = "Jose Chaverra";
        $course2->group = "2";

        $course2->save();
  
        $course3 = new Course();

        $course3->name = "Entrepreneurship";
        $course3->semester = "4";
        $course3->description = "Identify business opportunities by applying idea generation techniques, analyzing competitive advantages, entrepreneurial skills and characteristics of the environment.";
        $course3->teacher = "Jose Chaverra";
        $course3->group = "3";

        $course3->save();

        $course4 = new Course();

        $course4->name = "Sale and Consulting";
        $course4->semester = "5";
        $course4->description = "Identificar las demandas y necesidades del cliente para informar y asesorar sobre los productos y/o servicios de venta de imagen personal.";
        $course4->teacher = "Jose Chaverra";
        $course4->group = "4";

        $course4->save();

        $course5 = new Course();

        $course5->name = "Hair Color Change Techniques";
        $course5->semester = "3";
        $course5->description = "Analyze the characteristics of the client's hair and scalp, as well as their style and needs, to determine the most appropriate techniques for the color change.";
        $course5->teacher = "Jose Chaverra";
        $course5->group = "5";

        $course5->save();


    }
}
