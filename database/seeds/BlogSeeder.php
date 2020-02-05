<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Blog 1',
                'content' => 'Blog 1 content',
                'author' => 'Jeffrey',
                'active' => '1',
            ],
            [
                'title' => 'Blog 2',
                'content' => 'Blog 2 content',
                'author' => 'John',
                'active' => '0',
            ],
            [
                'title' => 'Blog 3',
                'content' => 'Blog 3 content',
                'author' => 'Karel',
                'active' => '1',
            ],
            [
                'title' => 'Blog 4',
                'content' => 'Blog 4 content',
                'author' => 'Mies',
                'active' => '1',
            ],
        ]);
    }
}
