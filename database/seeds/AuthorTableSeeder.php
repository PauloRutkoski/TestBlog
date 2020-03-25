<?php

use Illuminate\Database\Seeder;
use App\Author;


class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Author::class, 5)->create();
    }
}
