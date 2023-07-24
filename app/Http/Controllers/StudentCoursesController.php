<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Division;
use App\Models\Student;
use App\Models\Student_Course;
use App\Models\Student_Courses;
use Illuminate\Http\Request;

class StudentCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student_Course::all();
        $courses = Course::all();
        $students = Student::all();
        $divisions = Division::all();
        return response()->view('admin.courses_students.index', ['marks' => $data,'students'=>$students, 'courses' => $courses, 'divisions' => $divisions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = Student_Course::all();
        $courses = Course::all();
        $students = Student::all();
        $divisions = Division::all();
        return response()->view('admin.courses_students.create', ['courses' => $courses, 'students' => $students, 'divisions' => $divisions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'courses_id' => 'required|numeric|exists:courses,id',
            'student_id' => 'required|numeric|exists:students,id',
            'division_id' => 'required|numeric|exists:divisions,id',
            'mark' => 'required|string',

        ]);

        if (!$validator->fails()) {
            $marks = new Student_Course();
            $marks->courses_id = $request->input('courses_id');
            $marks->student_id = $request->input('students_id');
            $marks->division_id = $request->input('divisions_id');
            $marks->mark = $request->input('mark');
            $saved = $marks->save();

            return redirect()->route("courses_students.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $student_Courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Student_Course::findOrFail($id);
        $courses = Course::all();
        $students = Student::all();
        $divisions = Division::all();
        return response()->view('admin.courses_students.edit', ['marks' => $data, 'courses' => $courses, 'students' => $students, 'divisions' => $divisions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'courses_id' => 'required|numeric|exists:courses,id',
            'student_id' => 'required|numeric|exists:students,id',
            'division_id' => 'required|numeric|exists:divisions,id',
            'mark' => 'required|string',

        ]);

        if (!$validator->fails()) {
            $marks = Student_Course::findOrFail($id);
            $marks->courses_id = $request->input('courses_id');
            $marks->student_id = $request->input('student_id');
            $marks->division_id = $request->input('division_id');
            $marks->mark = $request->input('mark');
            $saved = $marks->save();

            return redirect()->route("courses_students.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $deleted = Student_Course::destroy($id);
        return redirect()->back();
    }
}
