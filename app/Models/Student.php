<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'birth_date', 'gender', 'address', 'phone'
    ];

    public function show($id)
    {
        $student = Student::where('user_id', auth()->id())->findOrFail($id);

        return view('students.show', compact('student'));
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);  // باقي القيم تلقائي
    }

    public function course() //s
    {
        return $this->belongsToMany(Course::class, 'student__courses', 'student_id', 'courses_id');
    }
}
