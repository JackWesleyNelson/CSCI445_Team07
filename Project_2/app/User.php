<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //allow our books fields to be mass assignable
	protected $fillable = array('title', 'author', 'year', 'comments');
}
