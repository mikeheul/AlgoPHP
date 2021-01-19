<?php

class Animal {
    
    // Attributs ou variables d'instance ou propriétés
    // 3 types de portées de variables : public, protected ou private
    private $_nomAnimal;
    private $_race;
    private $_nbPattes;
    private $_dateNaissance;
    private $_aliments;

    // Constructeur
    public function __construct(string $nomAnimal = "inconnu", string $race = "inconnue", int $nbPattes = 0, string $dateNaissance = "") {
        // $this désigne l'objet courant
        $this->_nomAnimal = $nomAnimal;
        $this->_race = $race;
        $this->_nbPattes = $nbPattes;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_aliments = [];
    }

    // Getters (accesseurs) et setters (mutateurs)
    public function getNomAnimal(){
        return $this->_nomAnimal;
    }

    public function setNomAnimal($nomAnimal){
        $this->_nomAnimal = $nomAnimal;
    }

    public function getRace(){
        return $this->_race;
    }

    public function setRace($race){
        $this->_race = $race;
    }

    public function getNbPattes(){
        return $this->_nbPattes;
    }

    public function setNbPattes($nbPattes){
        $this->_nbPattes = $nbPattes;
    }

    public function getDateNaissance() {
        return $this->_dateNaissance->format("d-m-Y");
    }

    public function setDateNaissance($dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }

    public function getAliments(){
        return $this->_aliments;
    }

    public function afficherAliments(){
        foreach($this->_aliments as $aliment){
            echo "- $aliment<br/>";
        }
    }

    public function addAliment(string $aliment){
        $this->_aliments[] = $aliment; 
        // array_push($this->_aliments, $aliment);
    }

    public function removeAliment(string $aliment){
        if(in_array($aliment, $this->_aliments)){
            unset($this->_aliments[array_search($aliment, $this->_aliments)]);
        }
    }

    public function __toString() {
        return $this->getNomAnimal()." est de race ".$this->getRace()." et est né le ".$this->getDateNaissance()." et mange : <br/>";
    }
}