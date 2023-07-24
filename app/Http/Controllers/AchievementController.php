<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Achievement::all();
        $students = Student::all();

        return response()->view('admin.achievements.index', ['achievements' => $data, 'students' => $students]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Student::all();
        return response()->view('admin.achievements.create', ['students' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'student_id' => 'required|numeric|exists:students,name',
            'day' => 'required|string',
            'evaluation' => 'required|string',
            'date' => 'required|date',
            'count' => 'required|string',
            'surah' => 'required|string',
            'type_active' => 'required|string',
            'note' => 'string',
        ]);

        if ($validator->fails()) {                                                                    //!
            $achievements = new Achievement();
            $achievements->student_id = $request->input('student_id');
            $achievements->day = $request->input('day');
            $achievements->evaluation = $request->input('evaluation');
            $achievements->date = $request->input('date');
            $achievements->count = $request->input('count');
            $achievements->surah = $request->input('surah');
            $achievements->type_active = $request->input('type_active');
            $achievements->note = $request->input('note');
            $saved = $achievements->save();

            return redirect()->route("achievements.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $achievements = Achievement::findOrFail($id);
        $students = Student::all();
        return response()->view('admin.achievements.edit', ['achievements' => $achievements, 'students' => $students]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validator = Validator($request->all(), [
            'student_id' => 'required|numeric|exists:students,id',
            'day' => 'required|string|max:30',
            'evaluation' => 'required|string',
            'date' => 'required|date',
            'count' => 'required|string',
            'surah' => 'required|string',
            'type_active' => 'required|string',
            'note' => 'string',
        ]);

        if (!$validator->fails()) {
            $achievements = Achievement::findOrFail($id);
            $achievements->student_id = $request->input('student_id');
            $achievements->day = $request->input('day');
            $achievements->evaluation = $request->input('evaluation');
            $achievements->date = $request->input('date');
            $achievements->count = $request->input('count');
            $achievements->surah = $request->input('surah');
            $achievements->type_active = $request->input('type_active');
            $achievements->note = $request->input('note');
            $saved = $achievements->save();

            return redirect()->route("achievements.index");
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Achievement::destroy($id);
        return redirect()->back();
    }
}
