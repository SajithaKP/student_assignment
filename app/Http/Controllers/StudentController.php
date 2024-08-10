<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch students with their assignment count
        $students = Student::withCount('assignments')->get();

        return view('students.index', compact('students'));
    }
}
