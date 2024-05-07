<?php 

include("../Views/header.php");

class Movie {
    public $title;
    public $description;
    public $language;
    public $image;
    public $releaseDate;
    public $vote;



    public function __construct($firstNightOfLoveArray) {
        $this->title = $firstNightOfLoveArray['original_title'];
        $this->description = $firstNightOfLoveArray['overview'];
        $this->language = $firstNightOfLoveArray['original_language'];
        $this->image = $firstNightOfLoveArray['poster_path'];
        $this->releaseDate = $firstNightOfLoveArray['release_date'];
        $this->vote = $firstNightOfLoveArray['vote_count'];
    }

    public function play($firstNightOfLoveArray)
    {
        echo '<h1 class="text-center text-uppercase text-black my-5">' . $this->title . '</h1>' . '<br>'
        . '<img src=" ' . $this->image . ' alt="imgFnoL" class="w-25 mx-auto d-block">' . '<br>'
        . '<h3 class="text-center my-5 fw-bold"> ' . $this->description . '</h3>' . '<br>'
        . '<p class="text-center my-5 fw-bold"> Language: ' . $this->language . '</p>' . '<br>'
        . '<p class="text-center my-5 fw-bold"> Release Date: ' . $this->releaseDate . '</p>' . '<br>'
        . '<p class="text-center my-5"> Rating: ' . $this->vote . '</p>' . '<br>'; 
    }
}
// Provo a stampare una sola card grande con questo array preso dal mio file JSON
$firstNightOfLoveArray = [
        "id"=> 978870,
        "original_language"=> "it",
        "original_title"=> "L'ultima notte di Amore",
        "overview"=> "On the night before his retirement, police lieutenant Franco Amore is called to investigate the death of a long-time partner of his in a diamond heist in which he was involved.",
        "poster_path"=> "https://image.tmdb.org/t/p/w342/dBp0REsZkZ1HK1PycwlLdBtYdsd.jpg",
        "release_date" => "2023-03-09",
        "vote_count"=> 296
    ];

    $firstNightOfLove = new Movie($firstNightOfLoveArray);
    echo $firstNightOfLove->play($firstNightOfLoveArray);