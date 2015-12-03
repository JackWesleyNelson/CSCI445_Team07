<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;

class AdminController extends Controller
{
    public function index()
    {
    	$teams = Team::all();

    	return view('admin', compact('teams'));
    }

    public function getMembers($id) {
      $team = Team::findOrFail($id);

      return $team;
    }
}
