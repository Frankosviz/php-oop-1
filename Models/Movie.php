<?php 

class Movie {
    public $title;

    public function __construct($text) {
        $this->title = $text;
    }

    public function play()
    {
        echo $this->title . ' is playing';
    }

    public function printFlag(){
        echo 'flag';
    }
}

$starWars = new Movie('Star Wars');
echo $starWars->play();
$starWars->play();