<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsTeam extends Model
{
    protected $fillable = [
        'student_id', 'team_id',
    ];
}
