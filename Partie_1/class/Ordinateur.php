<?php

class Ordinateur {
 
    private $marque;
    private $modele;
    private $ram;
    private $processeur;

    public function __construct(Marque $marque = null, string $modele = "N/A", int $ram = 0, string $processeur = "inconnu") {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->ram = $ram;
        $this->processeur = $processeur;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function setMarque(Marque $marque) {
        $this->marque = $marque;
        return $this;
    }

    public function getModele(){
        return $this->modele;
    }

    public function setModele(string $modele){
        $this->modele = $modele;
        return $this;
    }

    public function getRam(){
        return $this->ram;
    }

    public function setRam(int $ram){
        $this->ram = $ram;
        return $this;
    }

    public function getProcesseur(){
        return $this->processeur;
    }

    public function setProcesseur(string $processeur){
        $this->processeur = $processeur;
        return $this;
    }

    public function __toString(){
        return "L'ordinateur ".$this->getMarque(). " ".$this->getModele()." a une mémoire vive de ".$this->getRam()." Go, avec un processeur ".$this->getProcesseur();
    }
}