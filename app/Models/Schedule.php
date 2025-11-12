<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'start_time',
        'end_time'
    ];

}
