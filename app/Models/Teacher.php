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
        'subject_id'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
