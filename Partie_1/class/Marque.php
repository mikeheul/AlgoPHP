<?php

class Marque {

    private $nomMarque;
    private $pays;

    public function __construct($nomMarque = "inconnu", $pays = "N/A") {
        $this->nomMarque = $nomMarque;
        $this->pays = $pays;
    }

    public function getNomMarque(){
        return $this->nomMarque;
    }

    public function setNomMarque($nomMarque){
        $this->nomMarque = $nomMarque;
        return $this;
    }

    public function getPays(){
        return $this->pays;
    }

    public function setPays($pays){
        $this->pays = $pays;
        return $this;
    }

    public function __toString(){
        return $this->nomMarque." (".$this->pays.")";
    }
}