<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;

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

        // $this->call(UserTableSeeder::class);
        $this->call(UserTableSeeder::class);
        Model::reguard();
    }
}
class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(['username' => 'mmouse', 'email' => 'mmouse@mines.edu', 'password' => 'pass1']);
        User::create(['username' => 'dduck', 'email' => 'dduck@mines.edu', 'password' => 'pass2']);
        User::create(['username' => 'jjetson', 'email' => 'jjetson@mines.edu', 'password' => 'pass3']);
        User::create(['username' => 'fbaggins', 'email' => 'fbaggins@mines.edu', 'password' => 'pass4']);
        User::create(['username' => 'bbaggins', 'email' => 'bbaggins@mines.edu', 'password' => 'pass5']);
        User::create(['username' => 'pbear', 'email' => 'pbear@mines.edu', 'password' => 'pass6']);
        User::create(['username' => 'daduck', 'email' => 'daduck@mines.edu', 'password' => 'pass7']);
        User::create(['username' => 'wcoyote', 'email' => 'wcoyote@mines.edu', 'password' => 'pass8']);
        User::create(['username' => 'rrunner', 'email' => 'rrunner@mines.edu', 'password' => 'pass9']);
        User::create(['username' => 'msimpson', 'email' => 'msimpson@mines.edu', 'password' => 'pass10']);
        User::create(['username' => 'cbrown', 'email' => 'cbrown@mines.edu', 'password' => 'pass11']);
        User::create(['username' => 'lvanpelt', 'email' => 'lvanpelt@mines.edu', 'password' => 'pass12']);
        User::create(['username' => 'bbunny', 'email' => 'bbunny@mines.edu', 'password' => 'pass13']);
        User::create(['username' => 'bboop', 'email' => 'bboop@mines.edu', 'password' => 'pass14']);
        User::create(['username' => 'lgriffin', 'email' => 'lgriffin@mines.edu', 'password' => 'pass15']);
        User::create(['username' => 'wflintstone', 'email' => 'wflintstone@mines.edu', 'password' => 'pass16']);
        User::create(['username' => 'fflintstone', 'email' => 'fflintstone@mines.edu', 'password' => 'pass17']);
        User::create(['username' => 'ppig', 'email' => 'ppig@mines.edu', 'password' => 'pass18']);
        User::create(['username' => 'leela', 'email' => 'leela@mines.edu', 'password' => 'pass19']);
        User::create(['username' => 'scat', 'email' => 'scat@mines.edu', 'password' => 'pass20']);
        
    }
}
