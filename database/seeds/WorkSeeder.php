<?php
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Heemskerk',
                'headtitle' => 'Heemskerk app',
                'slug' => 'heemskerk',
                'description' => 'Dit is een korte beschrijving',
                'body' => 'Dit is de body',
                'image' => 'img/thumbnail/logo-heemskerk.png',
                'day' => '2',
                'month' => 'apr',
                'category' => 'Het Bureau',
                'sub_title' => 'App voor heemskerk',

            ],
            [
                'title' => 'em-project',
                'headtitle' => 'projectweek p4',
                'slug' => 'em_project',
                'description' => 'Projectweek in het eerste jaar van glu',
                'body' => 'Dit is de body',
                'image' => 'img/thumbnail/em_project.PNG',
                'day' => '2',
                'month' => 'Jun',
                'category' => 'project',
                'sub_title' => 'projectweek',
            ],
            [
                'title' => 'Netflix',
                'headtitle' => 'React',
                'slug' => 'Netflix',
                'description' => 'In periode 6 moest ik een netflix app maken',
                'body' => 'Netflix',
                'image' => 'img/thumbnail/netflix.PNG',
                'day' => '2',
                'month' => 'apr',
                'category' => 'REACTJS',
                'sub_title' => 'Netflix app met Reactjs',
            ],
            [
                'title' => 'TicToc',
                'headtitle' => 'eigen project',
                'slug' => 'own-project',
                'description' => 'Eigen project',
                'body' => 'Dit is de body',
                'image' => 'img/thumbnail/tictoc.PNG',
                'day' => '1',
                'month' => 'may',
                'category' => 'Het Bureau',
                'sub_title' => 'App voor heemskerk',
            ],
        ]);
    }
}
