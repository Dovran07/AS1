<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }


    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }


    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }


    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }


    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }
}