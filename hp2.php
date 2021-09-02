<?php

require_once __DIR__ . '/hp.php';

class Hp2 extends HarryPotter {
    public $title = 'Harry Potter e La camera dei segreti';
    public $trama = 'Il secondo anno ad Hogwarts si rivela denso di pericoli per Harry Potter e i suoi amici: un mostro misterioso si aggira per la scuola pietrificando i maghi mezzosangue figli di babbani, e tutti incolpano Harry.';
    public $date_drop = '2002';
    public $img = 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS89EyAC-sy1SddiCkTT65slUCStYueMEtFnzjyKK1i8-d3tumI';

    public function setPrice() {
        if($this->price = 15) {
            $this->price = 7 . '$' ;
        }
    }
}

