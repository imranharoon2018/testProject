<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('videos')->insert([
            'youtube_id' => 'abcd',
            'thumbnail' => 'helloworld',
            'views' => 10,
           
        ]);
		DB::table('videos')->insert([
            'youtube_id' => 'xyz',
            'thumbnail' => '10000',
            'views' => 150000,
            
        ]);
    }
}
