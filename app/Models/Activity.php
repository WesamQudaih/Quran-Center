<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'title', 'circle_id', 'description', 'image', 'date',
    ];

    public function circle()
    {
        return $this->belongsTo(Circle::class);
    }
}
