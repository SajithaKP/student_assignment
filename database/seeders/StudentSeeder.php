<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Assignmen;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $student1 = Student::create([
            'name' => 'Kadeeja', 
            'mob' => '1234567890', 
            'email' => 'kadeeja123@gmail.com', 
        ]);

        $student2 = Student::create([
            'name' => 'Amina', 
            'mob' => '9995161616', 
            'email' => 'amina123@gmail.com', 
        ]);

        $student3 = Student::create([
            'name' => 'Fathima', 
            'mob' => '8889101010', 
            'email' => 'fathima@gmail.com', 
        ]);

        // Createing assignments
        Assignmen::create(['student_id' => $student1->id, 'assignment' => 'Math Assignment 1']);
        Assignmen::create(['student_id' => $student1->id, 'assignment' => 'Math Assignment 2']);
        Assignmen::create(['student_id' => $student2->id, 'assignment' => 'Science Assignment 1']);
        Assignmen::create(['student_id' => $student2->id, 'assignment' => 'Science Assignment 2']);
        Assignmen::create(['student_id' => $student2->id, 'assignment' => 'Math Assignment 1']);
        Assignmen::create(['student_id' => $student3->id, 'assignment' => 'History Assignment 1']);
        Assignmen::create(['student_id' => $student3->id, 'assignment' => 'History Assignment 2']);
    }
}
