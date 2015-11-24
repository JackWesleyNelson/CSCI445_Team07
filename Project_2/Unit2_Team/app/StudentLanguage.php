<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLanguage extends Model
{
    protected $fillable = [
        'student_id', 'language_id', 'preference_rating',
    ];
}
