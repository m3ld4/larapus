<?php

use Illuminate\Database\Seeder;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample
        $author = Author::create(['name'=>'mohammad fauzi']);

        //sample
        $book = book::create(['title'=>'perahu kertas','amount'=>3, 'author_id'=>$author->id]);
    }
}
