<?php

class Voiture {

    protected $marque;
    protected $modele;
    protected $nbPortes;

    public function __construct($marque, $modele, $nbPortes){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getNbPortes(){
        return $this->nbPortes;
    }
}