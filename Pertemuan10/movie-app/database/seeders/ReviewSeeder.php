<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Rama',
            'rating' => ' 8,5 ',
            'date' => ' 12-1-2000 ',
        ]);
        
        Review::create([
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Reza',
            'rating' => ' 8,0 ',
            'date' => ' 1-8-2022 ',
        ]);

        Review::create([
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Ocid',
            'rating' => ' 9,0 ',
            'date' => ' 2-3-2023 ',
        ]);

        Review::create([
            'id' => 4,
            'title' => 'Spy x family',
            'poster' => 'movie-04.jpg',
            'user' => 'Rama',
            'rating' => ' 8,5 ',
            'date' => ' 12-1-2020 ',
        ]);

        Review::create([
            'id' => 5,
            'title' => 'From Up On Poppy Hill',
            'poster' => 'movie-05.jpg',
            'user' => 'Puki',
            'rating' => ' 9,5 ',
            'date' => ' 12-1-2021 ',
        ]);
    }
}
