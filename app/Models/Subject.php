<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'subject',
        'day',
        'start_time',
        'end_time',
        'course',
        'division'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
