<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Circle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'level'
    ];

    public function teacher_valuation(): HasOne
    {
        return $this->hasOne(Teacher_valuation::class);
    }

    public function activity()
    {
        return $this->belongsToMany(Activity::class);
    }
}
