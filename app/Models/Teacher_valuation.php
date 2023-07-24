<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher_valuation extends Model
{
    use HasFactory;

    protected $table = 'teachers__valuation';

    protected $fillable = [
        'name', 'circle_id', 'evaluation', 'count'
    ];

    public function circle(): BelongsTo
    {
        return $this->belongsTo(Circle::class);
    }
}
