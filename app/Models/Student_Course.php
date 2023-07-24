<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Course extends Model
{
    use HasFactory;

    protected $table = 'student__courses';

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
