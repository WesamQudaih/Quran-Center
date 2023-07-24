<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Student::all();
        return response()->view('admin.students.index', ['students' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('admin.students.create');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'address' => 'string|min:3|max:50',
            'birth_date' => 'required|date',
            'gender' => 'required|string',
            'phone' => 'string|max:10',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $students = new Student();
        $students->name = $request->input('name');
        $students->address = $request->input('address');
        $students->birth_date = $request->input('birth_date');
        $students->gender = $request->input('gender');
        $students->phone = $request->input('phone');
        if ($request->file('image')) {
            $path = $request->file('image')->store('public/images');
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $data['image'] = $filename;
        }
        $saved = $students->save();

        // return redirect()->back();
        return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id);
        return response()->view('admin.students.edit', ['students' => $students]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:50',
            'address' => 'string|min:3|max:50',
            'birth_date' => 'required|date',
            'gender' => 'required|string',
            'phone' => 'string|max:10',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (!$validator->fails()) {
            $students = Student::findOrFail($id);
            $students->name = $request->input('name');
            $students->address = $request->input('address');
            $students->birth_date = $request->input('birth_date');
            $students->gender = $request->input('gender');
            $students->phone = $request->input('phone');
            if ($request->file('image')) {
                $path = $request->file('image')->store('public/images');
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('public/Image'), $filename);
                $data['image'] = $filename;
            }
            $saved = $students->save();

            return redirect()->route("students.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Student::destroy($id);
        return redirect()->back();
    }
}
