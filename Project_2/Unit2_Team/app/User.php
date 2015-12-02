<?php

namespace App;

use Illuminate\Foundation\Auth\User as BaseUser;

class User extends BaseUser
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cwid', 'username', 'email', 'password', 'isAdmin',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function classes()
    {
        return $this->hasManyThrough('App\Course', 'App\StudentsClass', 'student_id', 'class_id');
    }
    public function languages()
    {
        return $this->hasManyThrough('App\Language', 'App\StudentsLanguage', 'student_id', 'language_id');
    }
    public function styles()
    {
        return $this->hasManyThrough('App\Style', 'App\StudentsStyle', 'student_id', 'style_id');
    }
    public function team()
    {
        return $this->hasManyThrough('App\Team', 'App\StudentsTeam', 'student_id', 'team_id');
    }
}
