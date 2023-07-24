<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Circle;
use Illuminate\Http\Request;

class ActivitesTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Activity::all();
        return response()->view('teachers.activities.index', ['activities' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Circle::all();
        return response()->view('teachers.activities.create', ['circles' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'title' => 'required|string|max:50',
            'circle_id' => 'required|numeric|exists:circles,id',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (!$validator->fails()) {
            $activities = new Activity();
            $activities->title = $request->input('title');
            $activities->circle_id = $request->input('circle_id');
            $activities->description = $request->input('description');
            $activities->date = $request->input('date');
            // $path = "";
            // if ($request->has("image")) {
            //     $file = $request->file('image');
            //     $filename =  $file->hashName();
            //     $path = 'assets/images/activities/' . $filename;

            //     $file->move(public_path('assets/images/activities/'), $filename);
            // }

            // $admindata = [
            //     'type' => $request->type,
            //     'name' => $request->name,
            //     'avatar' =>   asset($path),

            // ];
            // $user_id =  User::insertGetId($admindata);


            // if ($request->hasFile('image')) {
            //     $file = $request->file('image');
            //     $path = $request->store('uploads', [
            //         'disk'=> 'public'
            //     ]);
            //     $request->merge([
            //         "image"  => $path,
            //     ]);
            // }

            $saved = $activities->save();

            return redirect()->route("activities.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $vactivities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activite = Activity::findOrFail($id);
        $circles = Circle::all();
        return response()->view('teachers.activities.edit', ['activities' => $activite, 'circles' => $circles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'title' => 'required|string|max:50',
            'circle_id' => 'required|numeric|exists:circles,id',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if (!$validator->fails()) {
            $activities = Activity::findOrFail($id);
            $activities->title = $request->input('title');
            $activities->circle_id = $request->input('circle_id');
            $activities->description = $request->input('description');
            $activities->date = $request->input('date');
            if ($request->hasFile('image')) {
                // $path = $request->file('image')->store();
                $file = $request->file('image');
                $filename = now() . '_image' . $activities->title . '.' . $file->getClientOriginalName();
                $file->storePubliclyAs('activities', $filename , ['disk'=>'public']);
                $activities->image = 'activities/'.$filename;
            }
            $saved = $activities->save();

            return redirect()->route("activities.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $deleted = Activity::destroy($id);
        return redirect()->back();
    }
}
