<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Language;
use App\Team;
use App\StudentsLanguage;
use App\StudentsClass;
use App\StudentsStyle;
use App\StudentsTeam;
use App\Style;
use Auth;

class AdminController extends Controller
{
    public function getCurrentTeamRoute(Request $request) {
        return getCurrentTeam($request->teamname);
    }

    public function getCurrentStudentRoute(Request $request) {
        return getCurrentStudent($request->username);
    }

    public function getCurrentTeam($currentTeam) {
      $teams = Team::all();

      $currentTeam = Team::where('name', '=', $currentTeam)->first();

      $currentStudentName = [];
      $teamId = \DB::table('teams')->where('name', $currentTeam->name)->pluck('id');
      $studentIds = \DB::table('students_teams')->where('team_id', $teamId)->pluck('student_id');
      for ($i = 0; $i < sizeof($studentIds); $i++){
        $currentStudentName[] = \DB::table('users')->where('id', $studentIds[$i])->pluck('username');
      }

      return json_encode(array("team" => $teams, "current" => $currentTeam, "students" => $currentStudentName));
    }

    public function getCurrentStudent($currentStudent) {
      //return
      $currentName = \DB::table('users')->where('username', $currentStudent)->pluck('username');
      $currentID = \DB::table('users')->where('username', $currentStudent)->pluck('id');
      //return
      $currentEmail = \DB::table('users')->where('username', $currentStudent)->pluck('email');
      $currentStyleID =  \DB::table('students_styles')->where('student_id', $currentID)->pluck('style_id');
      //return
      $currentStyle = \DB::table('styles')->where('id', $currentStyleID)->pluck('type');

      return json_encode(array("currentName" => $currentName, "currentEmail" => $currentEmail, "currentStyle" => $currentStyle));
    }

    public function index()
    {
      $currentTeam = Team::first();
      $data = $this->getCurrentTeam($currentTeam->name);
      $data = json_decode($data);

      $students = User::all();

      return view('admin', array('teams' => $data->team, 'currentTeam' => $data->current, 'currentStudentName' => $data->students, 'students' => $students,));

    }


    public function show($id) {
      $team = Team::findOrFail($id);
      return $team;
    }

    public function run_team_assign_algorithm(Request $request){
        $min = $request->input('min');
        $max = $request->input('max');
        //$min = $data['min'];
        //$max = $data['max'];


        $ids = \DB::table('users')->where('isAdmin', 'false')->pluck('id');

        $rows = sizeof($ids);

        //drop the teams table
        \DB::table('teams')->delete();

        //drop the students teams table
        \DB::table('students_teams')->delete();

        $z = floor($rows/$max);

        \Log::info("the z value: " .$z);

        $teamNum = 0;

        for ($x = 0; $x < $z; $x++){
            Team::create(['name' => 'Team' .$x]);

            $team_id = \DB::table('teams')->where('name', 'Team' .$x)->pluck('id');
            for($i = 1; $i < $max + 1; $i++){
                StudentsTeam::create(['student_id' => $i + ($max * $x), 'team_id' => $team_id[0]]);
            }
            $teamNum = ($x + 1);
        }


        $remainder = ($rows - ($z*$max));
        Team::create(['name' => 'Team' .$teamNum]);
        $team_id = \DB::table('teams')->where('name', 'Team' .$teamNum)->pluck('id');
        for($x = 0; $x < $remainder; $x++){
            StudentsTeam::create(['student_id' => ($rows - $x), 'team_id' => $team_id[0]]);
        }

        $currentTeam = Team::first();
        $data = $this->getCurrentTeam($currentTeam->name);
        $data = json_decode($data);

        $students = User::all();

      	return view('admin', array('teams' => $data->team, 'currentTeam' => $data->current, 'currentStudentName' => $data->students, 'students' => $students,));

    }

}
