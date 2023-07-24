<?php

namespace App\Http\Controllers;

use App\Models\Circle;
use Illuminate\Http\Request;

class CirclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Circle::all();
        return response()->view('admin.circles.index', ['circles' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('admin.circles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:30',
            'level' => 'required|string',
        ]);

        $circles = new Circle();
        $circles->name = $request->input('name');
        $circles->level = $request->input('level');
        $saved = $circles->save();

        // return redirect()->back();
        return redirect()->route("circles.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Circle $circles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $circles = Circle::findOrFail($id);
        return response()->view('admin.circles.edit', ['circles' => $circles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:30',
            'level' => 'required|string',
        ]);

        $circles = Circle::findOrFail($id);
        $circles->name = $request->input('name');
        $circles->level = $request->input('level');
        $saved = $circles->save();

        return redirect()->route("circles.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Circle::destroy($id);
        return redirect()->back();
    }
}
