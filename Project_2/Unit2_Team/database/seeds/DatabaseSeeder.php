<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;
use App\Language;
use App\StudentLanguage;
use App\StudentClass;
use App\StudentStyle;
use App\StudentTeam;
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
        //seed the students style
        $this->call(StudentStyleTableSeeder::class);
        //seed the students classes
        $this->call(StudentClassTableSeeder::class);
        //seed the students languages
        $this->call(StudentLanguageTableSeeder::class);
        Model::reguard();
    }
}
//seed for users
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create(['cwid' => '123978', 'username' => 'mmouse', 'email' => 'mmouse@mines.edu', 'password' => 'pass1', 'isAdmin' => 'true']);
        User::create(['cwid' => '444321', 'username' => 'dduck', 'email' => 'dduck@mines.edu', 'password' => 'pass2', 'isAdmin' => 'true']);
        User::create(['cwid' => '999777', 'username' => 'jjetson', 'email' => 'jjetson@mines.edu', 'password' => 'pass3', 'isAdmin' => 'true']);
        User::create(['cwid' => '555123', 'username' => 'fbaggins', 'email' => 'fbaggins@mines.edu', 'password' => 'pass4', 'isAdmin' => 'false']);
        User::create(['cwid' => '988777', 'username' => 'bbaggins', 'email' => 'bbaggins@mines.edu', 'password' => 'pass5', 'isAdmin' => 'false']);
        User::create(['cwid' => '478234', 'username' => 'pbear', 'email' => 'pbear@mines.edu', 'password' => 'pass6', 'isAdmin' => 'false']);
        User::create(['cwid' => '409123', 'username' => 'daduck', 'email' => 'daduck@mines.edu', 'password' => 'pass7', 'isAdmin' => 'false']);
        User::create(['cwid' => '128745', 'username' => 'wcoyote', 'email' => 'wcoyote@mines.edu', 'password' => 'pass8', 'isAdmin' => 'false']);
        User::create(['cwid' => '765120', 'username' => 'rrunner', 'email' => 'rrunner@mines.edu', 'password' => 'pass9', 'isAdmin' => 'false']);
        User::create(['cwid' => '876123', 'username' => 'msimpson', 'email' => 'msimpson@mines.edu', 'password' => 'pass10', 'isAdmin' => 'false']);
        User::create(['cwid' => '333221', 'username' => 'cbrown', 'email' => 'cbrown@mines.edu', 'password' => 'pass11', 'isAdmin' => 'false']);
        User::create(['cwid' => '752412', 'username' => 'lvanpelt', 'email' => 'lvanpelt@mines.edu', 'password' => 'pass12', 'isAdmin' => 'false']);
        User::create(['cwid' => '532109', 'username' => 'bbunny', 'email' => 'bbunny@mines.edu', 'password' => 'pass13', 'isAdmin' => 'false']);
        User::create(['cwid' => '223311', 'username' => 'bboop', 'email' => 'bboop@mines.edu', 'password' => 'pass14', 'isAdmin' => 'false']);
        User::create(['cwid' => '443322', 'username' => 'lgriffin', 'email' => 'lgriffin@mines.edu', 'password' => 'pass15', 'isAdmin' => 'false']);
        User::create(['cwid' => '443311', 'username' => 'wflintstone', 'email' => 'wflintstone@mines.edu', 'password' => 'pass16', 'isAdmin' => 'false']);
        User::create(['cwid' => '123978', 'username' => 'fflintstone', 'email' => 'fflintstone@mines.edu', 'password' => 'pass17', 'isAdmin' => 'false']);
        User::create(['cwid' => '784512', 'username' => 'ppig', 'email' => 'ppig@mines.edu', 'password' => 'pass18', 'isAdmin' => 'false']);
        User::create(['cwid' => '834215', 'username' => 'leela', 'email' => 'leela@mines.edu', 'password' => 'pass19', 'isAdmin' => 'false']);
        User::create(['cwid' => '920451', 'username' => 'scat', 'email' => 'scat@mines.edu', 'password' => 'pass20', 'isAdmin' => 'false']);
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
        Style::create(['type' => 'Don\'t Care']);
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
//seed StudentsStyles
class StudentStyleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_styles')->delete();
        StudentStyle::create(['student_id' => '1', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '2', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '3', 'style_id' => '3']);
        StudentStyle::create(['student_id' => '4', 'style_id' => '3']);
        StudentStyle::create(['student_id' => '5', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '6', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '7', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '8', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '9', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '10', 'style_id' => '3']);
        StudentStyle::create(['student_id' => '11', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '12', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '13', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '14', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '15', 'style_id' => '3']);
        StudentStyle::create(['student_id' => '16', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '17', 'style_id' => '3']);
        StudentStyle::create(['student_id' => '18', 'style_id' => '2']);
        StudentStyle::create(['student_id' => '19', 'style_id' => '1']);
        StudentStyle::create(['student_id' => '20', 'style_id' => '1']);
    }
}
//seed StudentsClasses
class StudentClassTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_classes')->delete();
        //1
        StudentClass::create(['student_id' => '1', 'class_id' => '1']);
        StudentClass::create(['student_id' => '1', 'class_id' => '2']);
        StudentClass::create(['student_id' => '1', 'class_id' => '3']);
        StudentClass::create(['student_id' => '1', 'class_id' => '4']);
        //2
        StudentClass::create(['student_id' => '2', 'class_id' => '1']);
        StudentClass::create(['student_id' => '2', 'class_id' => '2']);
        //3
        StudentClass::create(['student_id' => '3', 'class_id' => '3']);
        StudentClass::create(['student_id' => '3', 'class_id' => '4']);
        //4
        StudentClass::create(['student_id' => '4', 'class_id' => '4']);
        //5
        StudentClass::create(['student_id' => '5', 'class_id' => '3']);
        //6
        StudentClass::create(['student_id' => '6', 'class_id' => '1']);
        //7
        StudentClass::create(['student_id' => '7', 'class_id' => '1']);
        StudentClass::create(['student_id' => '7', 'class_id' => '4']);
        //8
        StudentClass::create(['student_id' => '8', 'class_id' => '1']);
        //9
        StudentClass::create(['student_id' => '9', 'class_id' => '2']);
        StudentClass::create(['student_id' => '9', 'class_id' => '3']);
        //10
        StudentClass::create(['student_id' => '10', 'class_id' => '3']);
        StudentClass::create(['student_id' => '10', 'class_id' => '4']);
        //11
        StudentClass::create(['student_id' => '11', 'class_id' => '1']);
        StudentClass::create(['student_id' => '11', 'class_id' => '2']);
        StudentClass::create(['student_id' => '11', 'class_id' => '3']);
        StudentClass::create(['student_id' => '11', 'class_id' => '4']);
        //12
        StudentClass::create(['student_id' => '12', 'class_id' => '2']);
        StudentClass::create(['student_id' => '12', 'class_id' => '3']);
        StudentClass::create(['student_id' => '12', 'class_id' => '4']);
        //13
        StudentClass::create(['student_id' => '13', 'class_id' => '4']);
        //14
        StudentClass::create(['student_id' => '14', 'class_id' => '2']);
        //15
        StudentClass::create(['student_id' => '15', 'class_id' => '3']);
        //16
        StudentClass::create(['student_id' => '16', 'class_id' => '1']);
        //17
        StudentClass::create(['student_id' => '17', 'class_id' => '3']);
        //18
        StudentClass::create(['student_id' => '18', 'class_id' => '2']);
        //19
        StudentClass::create(['student_id' => '19', 'class_id' => '1']);
        //20
        StudentClass::create(['student_id' => '20', 'class_id' => '4']);
    }
}
//seed StudentsLanguages
class StudentLanguageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('students_languages')->delete();
        StudentLanguage::create(['student_id' => '1', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '1', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '1', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '2', 'language_id' => '1', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '2', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '2', 'language_id' => '3', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '3', 'language_id' => '1', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '3', 'language_id' => '2', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '3', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '4', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '4', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '4', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '5', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '5', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '5', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '6', 'language_id' => '1', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '6', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '6', 'language_id' => '3', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '7', 'language_id' => '1', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '7', 'language_id' => '2', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '7', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '8', 'language_id' => '1', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '8', 'language_id' => '2', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '8', 'language_id' => '3', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '9', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '9', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '9', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '10', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '10', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '10', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '11', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '11', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '11', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '12', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '12', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '12', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '13', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '13', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '13', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '14', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '14', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '14', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '15', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '15', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '15', 'language_id' => '3', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '16', 'language_id' => '1', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '16', 'language_id' => '2', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '16', 'language_id' => '3', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '17', 'language_id' => '1', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '17', 'language_id' => '2', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '17', 'language_id' => '3', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '18', 'language_id' => '1', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '18', 'language_id' => '2', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '18', 'language_id' => '3', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '19', 'language_id' => '1', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '19', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '19', 'language_id' => '3', 'preferenceRating' => '0']);
        StudentLanguage::create(['student_id' => '20', 'language_id' => '1', 'preferenceRating' => '2']);
        StudentLanguage::create(['student_id' => '20', 'language_id' => '2', 'preferenceRating' => '1']);
        StudentLanguage::create(['student_id' => '20', 'language_id' => '3', 'preferenceRating' => '0']);
    }
}




