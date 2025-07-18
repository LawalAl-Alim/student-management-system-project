<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'matric_number' => 'required',
        'course' => 'required',
    ]);

    Student::create($request->all());

    return redirect()->route('home');
}

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'matric_number' => 'required',
        'course' => 'required',
    ]);

    $student->update($request->all());

    return redirect()->route('home');
}

    public function destroy(Student $student)
{
    $course = $student->course;
    $student->delete();
    return redirect()->route('students.byCourse', $course);
}
    public function home()
{
    return view('students.home');
}

public function courses()
{
    $courses = [
        'Computer Science',
        'Business Administration',
        'Engineering',
        'Medicine',
        'Law',
        'Accounting',
        'Psychology',
        'Economics',
        'Architecture',
        'Mass Communication',
    ];
    return view('students.courses', compact('courses'));
}

public function studentsByCourse($course)
{
    $students = Student::where('course', $course)->get();
    return view('students.index', compact('students', 'course'));
}
}