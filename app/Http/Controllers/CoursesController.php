<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Course::all();
        $students = Student::all();
        return response()->view('admin.courses.index', ['courses' => $data, 'students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return response()->view('admin.courses.create');
        // $data = Student::all();
        // $data = Course::all();
        return response()->view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            // 'mark' => 'required|string',
            'teacher_name' => 'required|string',
            'hours' => 'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'time' => 'string',
        ]);

        $courses = new Course();
        $courses->name = $request->input('name');
        $courses->teacher_name = $request->input('teacher_name');
        // $courses->mark = $request->input('mark');
        $courses->hours = $request->input('hours');
        $courses->start_date = $request->input('start_date');
        $courses->end_date = $request->input('end_date');
        $courses->time = $request->input('time');
        $saved = $courses->save();

        // return redirect()->back();
        return redirect()->route("courses.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courses = Course::findOrFail($id);
        return response()->view('admin.courses.edit', ['courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            // 'mark' => 'string',
            'teacher_name' => 'required|string',
            'hours' => 'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'time' => 'string',
        ]);

        $courses = Course::findOrFail($id);
        $courses->name = $request->input('name');
        $courses->teacher_name = $request->input('teacher_name');
        // $courses->mark = $request->input('mark');
        $courses->hours = $request->input('hours');
        $courses->start_date = $request->input('start_date');
        $courses->end_date = $request->input('end_date');
        $courses->time = $request->input('time');
        $saved = $courses->save();

        return redirect()->route("courses.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Course::destroy($id);
        return redirect()->back();
    }
}
