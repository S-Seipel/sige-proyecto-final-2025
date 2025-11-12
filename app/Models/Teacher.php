<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $casts = [
        'birthdate' => 'date',
    ];

    protected $fillable = [
        'last_name',
        'name',
        'dni',
        'year_old',
        'birthdate',
        'cuil',
        'zip_code',
        'address',
        'phone',
        'email_abc',
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_subject');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'teacher_course');
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class, 'teacher_schedule');
    }

    public function days()
    {
        return $this->belongsToMany(Day::class, 'teacher_day');
    }
}
