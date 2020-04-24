<?php

use Illuminate\Database\Seeder;

class PhotographerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Photographer', 1)->create();
    }
}
