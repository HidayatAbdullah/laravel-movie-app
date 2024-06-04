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
            'movie_id' => '1',
            'user' => 'Rama',
            'rating' => ' 8,5 ',
            'date' => ' 12-1-2000 ',
        ]);
        
        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => 'Reza',
            'rating' => ' 8,0 ',
            'date' => ' 1-8-2022 ',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => 'Ocid',
            'rating' => ' 9,0 ',
            'date' => ' 2-3-2023 ',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => 'Rama',
            'rating' => ' 8,5 ',
            'date' => ' 12-1-2020 ',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => 'Puki',
            'rating' => ' 9,5 ',
            'date' => ' 12-1-2021 ',
        ]);
    }
}
