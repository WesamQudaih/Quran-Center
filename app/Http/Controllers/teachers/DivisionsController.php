<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    public function index()
    {
        $divisions = Division::all();
        $courses = Course::all();
        return response()->view('admin.divisions.index', ['divisions' => $divisions, 'courses' => $courses]);
    }

    public function create()
    {
        $courses = Course::all();
        return response()->view('admin.divisions.create', compact('courses'));
        // return response()->view('admin.divisions.create', ['courses' => $courses]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'course_id' => 'required',
        ]);

        $division = new Division();
        $division->name = $request->input('name');
        $division->cours_id  = $request->input('course_id');
        $saved = $division->save();

        // return redirect()->back();
        return redirect()->route("divisions.index");
    }

    public function edit($id)
    {
        $courses = Course::all();
        $divisions = Division::findOrFail($id);
        return response()->view('admin.divisions.edit', ['divisions' => $divisions, 'courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'course_id' => 'required|string',
        ]);

        $division = Division::findOrFail($id);
        // $division = new Division();
        $division->name = $request->input('name');
        $division->cours_id  = $request->input('course_id');
        $saved = $division->save();
        return redirect()->route("divisions.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Division::destroy($id);
        return redirect()->back();
    }
}
