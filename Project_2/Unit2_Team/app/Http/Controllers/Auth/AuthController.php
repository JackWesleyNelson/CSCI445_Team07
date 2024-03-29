<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Log;
use DB;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;
use App\Language;
use App\Team;
use App\StudentsLanguage;
use App\StudentsClass;
use App\StudentsStyle;
use App\StudentsTeam;
use App\Style;

class AuthController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:2',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {   
        User::create([
            'cwid' => $data['cwid'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isAdmin' => 'false',
        ]);
        
        $id = DB::table('users')->where('username', $data['username'])->pluck('id');
        
        $lang_id = DB::table('languages')->where('name', $data['language'])->pluck('id');
        
        $style_id = DB::table('styles')->where('type', $data['preference'])->pluck('id');
        
        StudentsLanguage::create([
            'student_id' => $id[0], 
            'language_id' => $lang_id[0],
            'preference_rating' => '0',
        ]);
        
        StudentsStyle::create([
            'student_id' => $id[0],
            'style_id' => $style_id[0],
        ]);
        
        DB::table('users')->where('id', $id[0])->delete();
        
        return User::create([
            'cwid' => $data['cwid'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isAdmin' => 'false',
        ]);
    }
}
