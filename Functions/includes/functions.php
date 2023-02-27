<?php

class Olifant
{
    // eigenschappen (properties) lijkt op variabelen
    private $aantalpoten = 4;
    public $aantalslurfen = 1;
    // methodes (methods) lijkt op functions

    // constructor
    function __construct() {
        $this->aantalpoten = 4;
        $this->aantalslurfen = 1;
    }

    private function maalTwee($var){

    }

    public Function set_aantalPoten($aantal){
        $this->aantalpoten = $aantal;
        $this->maalTwee();
    }
    public Function get_aantalPoten(){
        return($this->aantalpoten);
    }
}