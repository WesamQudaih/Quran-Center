<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use App\Models\Teacher_valuation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherValuationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Teacher_valuation::all();
        return response()->view('admin.teachers.index', ['teachers' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Circle::all();
        return response()->view('admin.teachers.create', ['circles' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|max:30',
            'circle_id' => 'required|numeric|exists:circles,id',
            'evaluation' => 'required|string',
            'count' => 'required|string',
        ]);

        if (!$validator->fails()) {
            $Teacher_valuation = new Teacher_valuation();
            $Teacher_valuation->name = $request->input('name');
            $Teacher_valuation->circle_id = $request->input('circle_id');
            $Teacher_valuation->count = $request->input('count');
            $Teacher_valuation->evaluation = $request->input('evaluation');
            $saved = $Teacher_valuation->save();

            return redirect()->route("teachers.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher_valuation $teacher_valuation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teachers = Teacher_valuation::findOrFail($id);
        $circles = Circle::all();
        return response()->view('admin.teachers.edit', ['teachers' => $teachers, 'circles' => $circles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|max:30',
            'circle_id' => 'required|numeric|exists:circles,id',
            'evaluation' => 'required|string',
            'count' => 'required|string',
        ]);

        if (!$validator->fails()) {
            $Teacher_valuation =  Teacher_valuation::findOrFail($id);
            $Teacher_valuation->name = $request->input('name');
            $Teacher_valuation->circle_id = $request->input('circle_id');
            $Teacher_valuation->count = $request->input('count');
            $Teacher_valuation->evaluation = $request->input('evaluation');
            $saved = $Teacher_valuation->save();
            return redirect()->route("teachers.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Teacher_valuation::destroy($id);
        return redirect()->back();
        // return response()->json(
        //     ['message' => $deleted ? "teachers deleted successfully" : "Failed to delete teachers"],
        //     $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        // );
    }
}
