<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions';

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function student_course()
    {
        return $this->hasMany(Student_Course::class);
    }
}
