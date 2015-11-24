<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentStyle extends Model
{
    protected $fillable = [
        'student_id', 'style_id',
    ];
}
