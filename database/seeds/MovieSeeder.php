<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*
        DB::table('movies')->insert([ 
	      'title' => 'Film', 
	      'year' => 2000, 
	      'rating' => 10.0, 
	      'country' => 'Croatia' 
  	]); 
  	*/
        factory('App\Movie',50)->create();
    }
}
