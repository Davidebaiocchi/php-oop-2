<?php

class HarryPotter {
    // istanze
    public $genre = 'Fantasy';
    public $cast = 
    'Harry Potter = Daniel Radcliff' . '<br>' . 
    'Hermione Granger = Emmma Watson'. '<br>' . 
    'Ronald Weasley = Rupert Grint'. '<br>' . 
    'Albus Silente = Richard Harris '. '<br>' . 
    'Rubeus Hagrid = Robbie Coltrane'. '<br>' .
    'Vernon Dursley = Richard Griffiths'. '<br>' .
    'Severus Piton = Alan Rickman '. '<br>' ;
    public $date = '2001 - 2011';
    public $production = 'Warner Bros';

    public function __construct($genre, $cast, $date, $production) {
        $this->genre = $genre;
        $this->cast = $cast;
        $this->date = $date;
        $this->production = $production;
    }
}