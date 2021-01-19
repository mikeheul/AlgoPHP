<?php

class VoitureElec extends Voiture {

    private $autonomie;

    public function __construct($marque, $modele, $nbPortes, $autonomie){
        parent::__construct($marque, $modele, $nbPortes);
        $this->autonomie = $autonomie;
    }

    public function getAutonomie(){
        return $this->autonomie;
    }
}