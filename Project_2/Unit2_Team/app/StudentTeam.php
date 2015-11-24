<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentTeam extends Model
{
    protected $fillable = [
        'student_id', 'style_id',
    ];
}
