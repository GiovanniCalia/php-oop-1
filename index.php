<?php

class Movie{

    private $anno;
    private $genere;
    private $protagonista;
    private $lingua;

    public function __construct($_anno, $_genere, $_protagonista){
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->protagonista = $_protagonista;
    }


    public function getAnno(){
        return $this->anno;
    }

    public function getGenere(){
        return $this->genere;
    }

    public function getProtagonista(){
        return $this->protagonista;
    }
}

$film = new Movie(2014, 'fantasy', 'Leonardo DiCaprio');
var_dump($film)

?>
