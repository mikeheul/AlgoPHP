<?php include 'template/header.php'; ?>

<h1>EXERCICE 15</h1>
<p>Créer une classe <code>Personne</code> (nom, prenom, date de naissance), instancier 2 personnes et renvoyer leur infos : nom + prénom + age</p>
<hr class="uk-divider-icon">
<p><strong>Résultat :</strong></p>

<?php

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("VALET","Marion","1985-01-17");

var_dump($p1);
var_dump($p2);

//Afficher les infos des personnes instanciées
echo $p1."<br>";
echo $p2."<br>";

$p1->setPrenom("Michèle");
echo $p1."<br>";

/**
 * Class Personne
 */
class Personne {
	
	//Attributs (ou variables d'instance), par convention en "private", "protected" éventuellement si on fait appel à de l'héritage de classe
	private $nom;
	private $prenom;
	private $dateNaissance;

	//Constructeur
	public function __construct($nom = "",$prenom = "",$dateNaissance = ""){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->dateNaissance = new DateTime($dateNaissance);
	}

	//Getters et setters (accesseurs et mutateurs)
	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		echo $this->nom." ".$this->prenom." a changé de nom !<br/>";
		$this->nom=$nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($prenom){
		echo $this->nom." ".$this->prenom." a changé de prénom !<br/>";
		$this->prenom=$prenom;
	}

	public function getDateNaissance(){
		return $this->dateNaissance;
	}

	public function setDateNaissance($dateNaissance){
		echo $this->nom." ".$this->prenom." a changé de date de naissance (???) !<br/>";
		$this->dateNaissance=$dateNaissance;
	}
	
	//Méthode perso pour le calcul de l'âge
	public function getAge(){ 		
		$now = new DateTime(); // date du jour
		$interval = $this->dateNaissance->diff($now); 
		return $interval->format('%y'); // récupérer le nombre d'années
	}

	public function __toString(){
		return $this->prenom." ".$this->nom." a ".$this->getAge()." ans";
	}
}