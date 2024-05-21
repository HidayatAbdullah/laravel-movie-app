<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'genre' => 'Action',
            'description' => 'salah satu genre film yang sebagian besar menampilkan adegan kejar-kejaran, perkelahian, baku tembak, ledakan, dan aksi pemeran pengganti.',
        ],
        [
            'id' => 2,
            'genre' => 'Romance',
            'description' => ' mengisahkan tentang masalah percintaan sepasang kekasih.',
        ],
        [
            'id' => 3,
            'genre' => 'Komedi',
            'description' => ' menampilkan karya yang lucu yang pada umumnya bertujuan untuk menghibur, menimbulkan tawa, terutama di televisi, film, dan lawakan.',
        ],
        [
            'id' => 4,
            'genre' => 'Drama',
            'description' => ' menampilkan cerita yang menggugah emosi para penontonnya dengan berbagai konflik.',
        ],
        [
            'id' => 5,
            'genre' => 'Horor',
            'description' => ' film yang dibuat untuk menimbulkan rasa, takut, teror, jijik dan sebagainya bagi para penontonnya.',
        ],
    ]; 

    public function getAllGenres()
    {
        return $this->genres;
    }
}