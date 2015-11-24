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
class BooksTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('books')->delete();

        Book::create(['title' => 'A Tale of Two Cities', 'author' => 'Charles Dickens', 'year' => '1859']);
    }
}
