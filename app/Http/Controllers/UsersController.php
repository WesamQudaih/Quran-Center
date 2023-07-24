<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    // public function login()
    // {

    //     return  view('login');
    // }

    // function check(Request $request)
    // {
    //     $creds = $request->only('email', 'password');
    //     if (Auth::guard('web')->attempt($creds)) {
    //         // if (Auth::user()->type === "admin") {
    //             return redirect()->route('admin.admin.home');
    //         // }
    //         // if (Auth::user()->type === "user") {
    //         //     return redirect()->route('user.user.home');
    //         // }
    //     } else {
    //         return  redirect()->route('login')->with('fail', "Incorrect Credentials");
    //     }
    // }

    public function logout(){
        Auth::guard('web')->logout();
    }

    public function index()
    {
        $users = User::all();
        return response()->view('admin.users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6',
            'type' => 'required|in:user,teacher,admin'
        ]);

        $users = new User();
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->type = $request->input('type');
        $saved = $users->save();

        // return redirect()->back();
        return redirect()->route("users.index");
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // 'password' => 'nullable|min:6',
            'type' => 'required|in:user,teacher,admin'
        ]);

        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->type = $request->input('type');
        $saved = $users->save();
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $delete = User::destroy($id);
        return redirect()->back();
    }
}
