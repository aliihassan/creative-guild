<?php

use App\Album;
use App\Photographer;
use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                "id" => 1,
                "photographer_id" => Photographer::first()->id,
                "title" => "Nandhaka Pieris",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "landscape1.jpg",
                "date" => "2015-05-01",
                "featured" => true
            ],
            [
                "id" => 2,
                "photographer_id" => Photographer::first()->id,
                "title" => "New West Calgary",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "landscape2.jpg",
                "date" => "2016-05-01",
                "featured" => false
            ],
            [
                "id" => 3,
                "photographer_id" => Photographer::first()->id,
                "title" => "Australian Landscape",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "landscape3.jpg",
                "date" => "2015-02-02",
                "featured" => false
            ],
            [
                "id" => 4,
                "photographer_id" => Photographer::first()->id,
                "title" => "Halvergate Marsh",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "landscape4.jpg",
                "date" => "2014-04-01",
                "featured" => true
            ],
            [
                "id" => 5,
                "photographer_id" => Photographer::first()->id,
                "title" => "Rikkis Landscape",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "landscape5.jpg",
                "date" => "2010-09-01",
                "featured" => false
            ],
            [
                "id" => 6,
                "photographer_id" => Photographer::first()->id,
                "title" => "Kiddi Kristjans Iceland",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" => "landscape6.jpg",
                "date" => "2015-07-21",
                "featured" => true
            ]
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
