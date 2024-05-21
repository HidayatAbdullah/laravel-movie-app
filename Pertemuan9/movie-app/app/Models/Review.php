<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Rama',
            'rating' => ' 8,5 ',
            'date' => ' 12-1-2000 ',
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Reza',
            'rating' => ' 8,0 ',
            'date' => ' 1-8-2022 ',
        ],
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Ocid',
            'rating' => ' 9,0 ',
            'date' => ' 2-3-2023 ',
        ],
        [
            'id' => 4,
            'movie' => 'Spy x family',
            'poster' => 'movie-04.jpg',
            'user' => 'Rama',
            'rating' => ' 8,5 ',
            'date' => ' 12-1-2020 ',
        ],
        [
            'id' => 5,
            'movie' => 'From Up On Poppy Hill',
            'poster' => 'movie-05.jpg',
            'user' => 'Puki',
            'rating' => ' 9,5 ',
            'date' => ' 12-1-2021 ',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
