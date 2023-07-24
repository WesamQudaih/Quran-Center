<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievements';

    protected $fillable = [
        'student_id', 'date', 'day', 'surah','count', 'evaluation', 'type_active', 'note',
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
}
