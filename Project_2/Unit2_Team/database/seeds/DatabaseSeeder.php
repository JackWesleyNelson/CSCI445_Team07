<?php

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

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //seed the users
        $this->call(UserTableSeeder::class);
        //seed the languages
        $this->call(LanguageTableSeeder::class);
        //seed the styles
        $this->call(StyleTableSeeder::class);
        //seed the classes
        $this->call(ClassTableSeeder::class);
        //seed the teams
        $this->call(TeamTableSeeder::class);
        //seed the students style
        $this->call(StudentsStyleTableSeeder::class);
        //seed the students classes
        $this->call(StudentsClassTableSeeder::class);
        //seed the students languages
        $this->call(StudentsLanguageTableSeeder::class);
        //seed the students teams
        $this->call(StudentsTeamTableSeeder::class);
        Model::reguard();
    }
}
//seed for users
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create(['cwid' => '123978', 'username' => 'mmouse', 'email' => 'mmouse@mines.edu', 'password' => bcrypt('pass1'), 'isAdmin' => 'false']);
        User::create(['cwid' => '444321', 'username' => 'dduck', 'email' => 'dduck@mines.edu', 'password' => bcrypt('pass2'), 'isAdmin' => 'false']);
        User::create(['cwid' => '999777', 'username' => 'jjetson', 'email' => 'jjetson@mines.edu', 'password' => bcrypt('pass3'), 'isAdmin' => 'false']);
        User::create(['cwid' => '555123', 'username' => 'fbaggins', 'email' => 'fbaggins@mines.edu', 'password' => bcrypt('pass4'), 'isAdmin' => 'false']);
        User::create(['cwid' => '988777', 'username' => 'bbaggins', 'email' => 'bbaggins@mines.edu', 'password' => bcrypt('pass5'), 'isAdmin' => 'false']);
        User::create(['cwid' => '478234', 'username' => 'pbear', 'email' => 'pbear@mines.edu', 'password' => bcrypt('pass6'), 'isAdmin' => 'false']);
        User::create(['cwid' => '409123', 'username' => 'daduck', 'email' => 'daduck@mines.edu', 'password' => bcrypt('pass7'), 'isAdmin' => 'false']);
        User::create(['cwid' => '128745', 'username' => 'wcoyote', 'email' => 'wcoyote@mines.edu', 'password' => bcrypt('pass8'), 'isAdmin' => 'false']);
        User::create(['cwid' => '765120', 'username' => 'rrunner', 'email' => 'rrunner@mines.edu', 'password' => bcrypt('pass9'), 'isAdmin' => 'false']);
        User::create(['cwid' => '876123', 'username' => 'msimpson', 'email' => 'msimpson@mines.edu', 'password' => bcrypt('pass10'), 'isAdmin' => 'false']);
        User::create(['cwid' => '333221', 'username' => 'cbrown', 'email' => 'cbrown@mines.edu', 'password' => bcrypt('pass11'), 'isAdmin' => 'false']);
        User::create(['cwid' => '752412', 'username' => 'lvanpelt', 'email' => 'lvanpelt@mines.edu', 'password' => bcrypt('pass12'), 'isAdmin' => 'false']);
        User::create(['cwid' => '532109', 'username' => 'bbunny', 'email' => 'bbunny@mines.edu', 'password' => bcrypt('pass13'), 'isAdmin' => 'false']);
        User::create(['cwid' => '223311', 'username' => 'bboop', 'email' => 'bboop@mines.edu', 'password' => bcrypt('pass14'), 'isAdmin' => 'false']);
        User::create(['cwid' => '443322', 'username' => 'lgriffin', 'email' => 'lgriffin@mines.edu', 'password' => bcrypt('pass15'), 'isAdmin' => 'false']);
        User::create(['cwid' => '443311', 'username' => 'wflintstone', 'email' => 'wflintstone@mines.edu', 'password' => bcrypt('pass16'), 'isAdmin' => 'false']);
        User::create(['cwid' => '123978', 'username' => 'fflintstone', 'email' => 'fflintstone@mines.edu', 'password' => bcrypt('pass17'), 'isAdmin' => 'false']);
        User::create(['cwid' => '784512', 'username' => 'ppig', 'email' => 'ppig@mines.edu', 'password' => bcrypt('pass18'), 'isAdmin' => 'false']);
        User::create(['cwid' => '834215', 'username' => 'leela', 'email' => 'leela@mines.edu', 'password' => bcrypt('pass19'), 'isAdmin' => 'false']);
        User::create(['cwid' => '920451', 'username' => 'scat', 'email' => 'scat@mines.edu', 'password' => bcrypt('pass20'), 'isAdmin' => 'false']);
    }
}
//seed for languages
class LanguageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->delete();
        Language::create(['name' => 'C/C++']);
        Language::create(['name' => 'Java']);
        Language::create(['name' => 'Python']);
    }
}
//seed for styles
class StyleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('styles')->delete();
        Style::create(['type' => 'Social']);
        Style::create(['type' => 'Competitive']);
        Style::create(['type' => 'Dont Care']);
    }
}
//seed for classes
class ClassTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->delete();
        Course::create(['prefix' => 'CSCI', 'number' => '261']);
        Course::create(['prefix' => 'CSCI', 'number' => '262']);
        Course::create(['prefix' => 'CSCI', 'number' => '306']);
        Course::create(['prefix' => 'CSCI', 'number' => '406']);
    }
}
//seed for teams
class TeamTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->delete();
        Team::create(['name' => 'Team01']);
        Team::create(['name' => 'Team02']);
        Team::create(['name' => 'Team03']);
        Team::create(['name' => 'Team04']);
        Team::create(['name' => 'Team05']);
        Team::create(['name' => 'Team06']);
        Team::create(['name' => 'Team07']);
    }
}
//seed StudentsStyles
class StudentsStyleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_styles')->delete();
        StudentsStyle::create(['student_id' => '1', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '2', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '3', 'style_id' => '3']);
        StudentsStyle::create(['student_id' => '4', 'style_id' => '3']);
        StudentsStyle::create(['student_id' => '5', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '6', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '7', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '8', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '9', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '10', 'style_id' => '3']);
        StudentsStyle::create(['student_id' => '11', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '12', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '13', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '14', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '15', 'style_id' => '3']);
        StudentsStyle::create(['student_id' => '16', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '17', 'style_id' => '3']);
        StudentsStyle::create(['student_id' => '18', 'style_id' => '2']);
        StudentsStyle::create(['student_id' => '19', 'style_id' => '1']);
        StudentsStyle::create(['student_id' => '20', 'style_id' => '1']);
    }
}
//seed StudentsClasses
class StudentsClassTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_classes')->delete();
        //1
        StudentsClass::create(['student_id' => '1', 'class_id' => '1']);
        StudentsClass::create(['student_id' => '1', 'class_id' => '2']);
        StudentsClass::create(['student_id' => '1', 'class_id' => '3']);
        StudentsClass::create(['student_id' => '1', 'class_id' => '4']);
        //2
        StudentsClass::create(['student_id' => '2', 'class_id' => '1']);
        StudentsClass::create(['student_id' => '2', 'class_id' => '2']);
        //3
        StudentsClass::create(['student_id' => '3', 'class_id' => '3']);
        StudentsClass::create(['student_id' => '3', 'class_id' => '4']);
        //4
        StudentsClass::create(['student_id' => '4', 'class_id' => '4']);
        //5
        StudentsClass::create(['student_id' => '5', 'class_id' => '3']);
        //6
        StudentsClass::create(['student_id' => '6', 'class_id' => '1']);
        //7
        StudentsClass::create(['student_id' => '7', 'class_id' => '1']);
        StudentsClass::create(['student_id' => '7', 'class_id' => '4']);
        //8
        StudentsClass::create(['student_id' => '8', 'class_id' => '1']);
        //9
        StudentsClass::create(['student_id' => '9', 'class_id' => '2']);
        StudentsClass::create(['student_id' => '9', 'class_id' => '3']);
        //10
        StudentsClass::create(['student_id' => '10', 'class_id' => '3']);
        StudentsClass::create(['student_id' => '10', 'class_id' => '4']);
        //11
        StudentsClass::create(['student_id' => '11', 'class_id' => '1']);
        StudentsClass::create(['student_id' => '11', 'class_id' => '2']);
        StudentsClass::create(['student_id' => '11', 'class_id' => '3']);
        StudentsClass::create(['student_id' => '11', 'class_id' => '4']);
        //12
        StudentsClass::create(['student_id' => '12', 'class_id' => '2']);
        StudentsClass::create(['student_id' => '12', 'class_id' => '3']);
        StudentsClass::create(['student_id' => '12', 'class_id' => '4']);
        //13
        StudentsClass::create(['student_id' => '13', 'class_id' => '4']);
        //14
        StudentsClass::create(['student_id' => '14', 'class_id' => '2']);
        //15
        StudentsClass::create(['student_id' => '15', 'class_id' => '3']);
        //16
        StudentsClass::create(['student_id' => '16', 'class_id' => '1']);
        //17
        StudentsClass::create(['student_id' => '17', 'class_id' => '3']);
        //18
        StudentsClass::create(['student_id' => '18', 'class_id' => '2']);
        //19
        StudentsClass::create(['student_id' => '19', 'class_id' => '1']);
        //20
        StudentsClass::create(['student_id' => '20', 'class_id' => '4']);
    }
}
//seed StudentsLanguages
class StudentsLanguageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_languages')->delete();
        StudentsLanguage::create(['student_id' => '1', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '1', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '1', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '2', 'language_id' => '1', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '2', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '2', 'language_id' => '3', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '3', 'language_id' => '1', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '3', 'language_id' => '2', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '3', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '4', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '4', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '4', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '5', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '5', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '5', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '6', 'language_id' => '1', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '6', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '6', 'language_id' => '3', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '7', 'language_id' => '1', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '7', 'language_id' => '2', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '7', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '8', 'language_id' => '1', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '8', 'language_id' => '2', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '8', 'language_id' => '3', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '9', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '9', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '9', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '10', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '10', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '10', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '11', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '11', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '11', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '12', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '12', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '12', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '13', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '13', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '13', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '14', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '14', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '14', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '15', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '15', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '15', 'language_id' => '3', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '16', 'language_id' => '1', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '16', 'language_id' => '2', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '16', 'language_id' => '3', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '17', 'language_id' => '1', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '17', 'language_id' => '2', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '17', 'language_id' => '3', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '18', 'language_id' => '1', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '18', 'language_id' => '2', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '18', 'language_id' => '3', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '19', 'language_id' => '1', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '19', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '19', 'language_id' => '3', 'preference_rating' => '0']);
        StudentsLanguage::create(['student_id' => '20', 'language_id' => '1', 'preference_rating' => '2']);
        StudentsLanguage::create(['student_id' => '20', 'language_id' => '2', 'preference_rating' => '1']);
        StudentsLanguage::create(['student_id' => '20', 'language_id' => '3', 'preference_rating' => '0']);
    }
}
//seed to assign students to a team
class StudentsTeamTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_teams')->delete();
        StudentsTeam::create(['student_id' => '1', 'team_id' => '1']);
        StudentsTeam::create(['student_id' => '2', 'team_id' => '1']);
        StudentsTeam::create(['student_id' => '3', 'team_id' => '1']);
        StudentsTeam::create(['student_id' => '4', 'team_id' => '2']);
        StudentsTeam::create(['student_id' => '5', 'team_id' => '2']);
        StudentsTeam::create(['student_id' => '6', 'team_id' => '2']);
        StudentsTeam::create(['student_id' => '7', 'team_id' => '3']);
        StudentsTeam::create(['student_id' => '8', 'team_id' => '3']);
        StudentsTeam::create(['student_id' => '9', 'team_id' => '3']);
        StudentsTeam::create(['student_id' => '10', 'team_id' => '4']);
        StudentsTeam::create(['student_id' => '11', 'team_id' => '4']);
        StudentsTeam::create(['student_id' => '12', 'team_id' => '4']);
        StudentsTeam::create(['student_id' => '13', 'team_id' => '5']);
        StudentsTeam::create(['student_id' => '14', 'team_id' => '5']);
        StudentsTeam::create(['student_id' => '15', 'team_id' => '5']);
        StudentsTeam::create(['student_id' => '16', 'team_id' => '6']);
        StudentsTeam::create(['student_id' => '17', 'team_id' => '6']);
        StudentsTeam::create(['student_id' => '18', 'team_id' => '6']);
        StudentsTeam::create(['student_id' => '19', 'team_id' => '7']);
        StudentsTeam::create(['student_id' => '20', 'team_id' => '7']);
    }
}




