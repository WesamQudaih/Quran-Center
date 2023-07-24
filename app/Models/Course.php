<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'hours', 'start_date', 'end_date', 'time', 'teacher_name', 'mark'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function students()
    {
        return $this->belongsToMany(
            Student::class,         // Related model
            'student__courses',     // pivot table الجدول الوسيط
            'courses_id',           // f.k current
            'student_id',           // f.k related
            'id',                   // current model key
            'id'                    // related key
        );
        // الترتيب مهم
    }

    public function student()  //s
    {
        return $this->belongsToMany(Student::class, 'student__courses', 'courses_id', 'student_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function student_course()
    {
        return $this->hasMany(Student_Course::class);
    }

}
