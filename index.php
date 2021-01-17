<?php

    class Room {
        public $numero;
        public $letti;
        public $piano;
        public $tipo;
        function __construct($tipo) {
            $this->tipo = $tipo;
        }
        public function room_echo(){
            return 'La stanza numero '.$this->numero.' si trova al '.$this->piano.' e la tipologia è: '.$this->tipo; 
        }
    }


    $stanza10 = new Room('Business');
    $stanza10->letti = "2";
    $stanza10->piano = "1 Piano";
    $stanza10->numero = "10";

    echo $stanza10->room_echo();


?>