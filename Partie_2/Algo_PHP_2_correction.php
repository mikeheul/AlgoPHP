<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="uk-container uk-container-large">
    
<h1>Correction exercices Algo PHP - Partie 2</h1>

<!-------------------------------------- EXERCICE 1 ---------------------------------------->

<style>
    .red {
        color: red;
    }
</style>

<h2>EXERCICE 1</h2>
<?php

$texte = "Mon texte en paramètre";
echo "Phrase à convertir « : $texte »";

echo convertirMajRouge($texte);
echo convertirMajRougeV3($texte);
echo convertirMajCouleur($texte, "#FDA156");
echo convertirMajCouleur($texte, "#FDD200");
echo convertirMajCouleur("Hello world !", "#ACC354");
echo convertirMajCouleur();

/**
 * convertirMajRouge
 *
 * @param  mixed $texte
 * @return void
 */
function convertirMajRouge(string $texte = "Aucun texte défini"){
    $color = "red";
    // mb_strtoupper gère les majuscules accentuées contrairement à strtoupper
    $maj = mb_strtoupper($texte);
    return "<p style='color:$color'>$maj</p>";
}

/**
 * convertirMajRougeV2
 *
 * @param  mixed $texte
 * @return void
 */
function convertirMajRougeV2(string $texte = "Aucun texte défini"){
	// sans passer par des variables intermédiaires
	return "<p style='color:red'>".mb_strtoupper($texte)."</p>";	
}

/**
 * convertirMajRougeV3
 *
 * @param  mixed $texte
 * @return void
 */
function convertirMajRougeV3(string $texte = "Aucun texte défini"){
    // en passant par une classe CSS
	return "<p class='red'>".mb_strtoupper($texte)."</p>";	
}

/**
 * convertirMajCouleur
 *
 * @param  mixed $texte
 * @param  mixed $color
 * @return void
 */
function convertirMajCouleur(string $texte = "Aucun texte défini", string $color = "black") {
    // variante où l'on indique la couleur en paramètre : couleur nommée ou code héxadécimal
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";	
}

?>

<!-------------------------------------- EXERCICE 2 -------------------------------------->

<h2>EXERCICE 2</h2>
<?php

$capitales = [
	"France" => "Paris",
	"Allemagne" => "Berlin",
	"USA" => "Washington",
	"Italie" => "Rome"
];

$test = json_encode($capitales);

var_dump($capitales);
var_dump($test);

echo afficherTableHTMLExo2($capitales);
// echo afficherTableHTML();

/**
 * afficherTableHTML
 *
 * @param  mixed $capitales
 * @return void
 */
function afficherTableHTMLExo2(array $capitales = ["N/A" => "N/A"]) {
	// trier par pays (A à Z) : k = key - l'inverse est krsort()
    ksort($capitales);
	$resultat = 
		"<table class='uk-table uk-table-striped'>
    		<thead>
    			<tr>
    				<th>Pays</th>
    				<th>Capitale</th>
    			</tr>
			</thead>
			<tbody>";
		// boucle pour afficher les pays + capitales - mb_strtoupper gère les majusules accentuées
    	foreach($capitales as $pays => $capitale) {
			$resultat .= 
				"<tr>
					<td>".mb_strtoupper($pays)."</td>
					<td>$capitale</td>
				</tr>";
    	}
    $resultat .= "</tbody></table>";
    return $resultat;
}

?>

<!-------------------------------------- EXERCICE 3 -------------------------------------->

<h2>EXERCICE 3</h2>
<?php echo "<a href='http://www.elan-formation.fr' target='_blank'>Site Elan Formation</a>"; ?>

<!-------------------------------------- EXERCICE 4 -------------------------------------->

<h2>EXERCICE 4</h2>
<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];

var_dump($capitales);

echo afficherTableHTMLExo4($capitales);
// echo afficherTableHTML("test"); // génère une erreur car type array attendu en paramètre, string ici (voir signature méthode)

/**
 * afficherTableHTML
 *
 * @param  mixed $capitales
 * @return void
 */
function afficherTableHTMLExo4(array $capitales = ["N/A" => "N/A"]){
    // trier par ville (A à Z) - l'inverse est arsort()
    asort($capitales);
    $resultat = 
        "<table class='uk-table uk-table-striped'>
    		<thead>
    			<tr>
    				<th>Pays</th>
    				<th>Capitale</th>
    				<th>Lien wiki</th>
    			</tr>
			</thead>
            <tbody>";
        // boucle pour afficher les pays + capitales
        // on notera que la construction de l'URL wikipedia se fait directement dans la boucle
        foreach($capitales as $pays => $capitale){
            $resultat .= 
                "<tr>
                    <td>".mb_strtoupper($pays)."</td>
                    <td>$capitale</td>
                    <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
                </tr>";
        }
    $resultat .= "</tbody></table>";
    return $resultat;
}

?>

<!-------------------------------------- EXERCICE 5 -------------------------------------->

<h2>EXERCICE 5</h2>
<?php

$nomsInput = ["Nom","Prénom","Ville"];
var_dump($nomsInput);

echo afficherInput($nomsInput);
// echo afficherInput();

/**
 * afficherInput
 *
 * @param  mixed $nomsInput
 * @return void
 * TODO : Imbriquer input dans label pour les associer
 */
function afficherInput(array $nomsInput = ["N/A"]){
    $resultat = "<form action='#'>";
    foreach($nomsInput as $input){
        $resultat .= "<label for='".mb_strtolower($input)."'>$input</label><br/><input class='uk-input' type='text' name='".mb_strtolower($input)."' id='".mb_strtolower($input)."'><br/>";
    }
    $resultat .= "</form>";
    return $resultat;
}

?>

<!-------------------------------------- EXERCICE 6 -------------------------------------->

<h2>EXERCICE 6</h2>
<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
var_dump($elements);

echo alimenterListeDeroulante($elements);

/**
 * alimenterListeDeroulante
 * @param  mixed $elements
 * @return void
 * TODO : appliquer les autres propriétés aux <option>
 */
function alimenterListeDeroulante(array $elements = ["N/A"]){
    $resultat = "<form action='#'>
        <select class='uk-select' name='civilite'>";
        foreach($elements as $option){
            $resultat .= "<option value='$option'>$option</option>";
        }
    $resultat .= "</select></form>";
    return $resultat;
}

?>

<h2>EXERCICE 7</h2>
<!-------------------------------------- EXERCICE 7 -------------------------------------->

<?php

// checked
$elements = [
    "Choix 1" => "", 
    "Choix 2" => "checked", 
    "Choix 3" => ""
];

var_dump($elements);

echo genererCheckbox($elements);

/**
 * genererCheckbox
 *
 * @param  mixed $elements
 * @return void
 */
function genererCheckbox(array $elements = ["N/A" => ""]){
    $resultat = "<form action='#'>";
    foreach ($elements as $label => $checked) {
        $resultat .= "<input class='uk-checkbox' type='checkbox' $checked> $label<br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

?>

<!-------------------------------------- EXERCICE 8 -------------------------------------->

<h2>EXERCICE 8</h2>
<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url, 4);
echo repeterImageLoop($url, 4);

// sans boucle
/**
 * repeterImage
 *
 * @param  mixed $url
 * @param  mixed $nb
 * @return void
 */
function repeterImage(string $url = "", int $nb = 0) {
    echo "<h4>Méthode sans boucle (str_repeat)</h4>";
    //str_repeat répète une chaîne et évite de devoir faire une boucle (qui fonctionnerait aussi évidemment)
    return str_repeat("<img src='$url' alt='chien'>", $nb)."<br>";
}

// avec boucle
/**
 * repeterImageLoop
 *
 * @param  mixed $url
 * @param  mixed $nb
 * @return void
 */
function repeterImageLoop(string $url = "", int $nb = 0) {
    echo "<h4>Méthode avec boucle</h4>";
    $res = "";
    for($i = 1; $i <= $nb; $i++){
        $res .= "<img src='$url' alt='chien'>";
    }
    return $res."<br>";
}

?>

<!-------------------------------------- EXERCICE 9 -------------------------------------->

<h2>EXERCICE 9</h2>
<?php

$elements = [
    "Masculin",
    "Féminin",
    "Autre"
];

var_dump($elements);

echo afficherRadio($elements);

/**
 * afficherRadio
 *
 * @param  mixed $elements
 * @return void
 */
function afficherRadio(array $elements = ["N/A"]) {
    $resultat = "<form action='#'>";
    foreach ($elements as $radio) {
        //name='sexe' indispensable pour grouper et rendre les boutons radios indépendant !
        $resultat .= "<label><input class='uk-radio' type='radio' name='sexe'> $radio</label><br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

?>

<!-------------------------------------- EXERCICE 10 -------------------------------------->

<h2>EXERCICE 10</h2>
<?php

$coordonnees = ["Nom", "Prenom", "Email"];
$civilites = ["Masculin", "Féminin", "Autre"];
$formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

var_dump($coordonnees);
var_dump($civilites);
var_dump($formations);

echo renderForm($coordonnees, $civilites, $formations);

// formulaire entier
/**
 * renderForm
 *
 * @param  mixed $coordonnees
 * @param  mixed $civilites
 * @param  mixed $formations
 * @return void
 */
function renderForm(array $coordonnees = ["N/A"], array $civilites = ["N/A"], array $formations = ["N/A"]){
    $resultat = "<form action='#'>";
    $resultat .= renderInput($coordonnees);
    $resultat .= renderRadio($civilites);
    $resultat .= renderChoices($formations);
    $resultat .= "<input class='uk-button uk-margin-top' type='submit' value='Envoyer'>";
    $resultat .= "</form>";
    return $resultat;
}

// affichage des input
/**
 * renderInput
 *
 * @param  mixed $array
 * @return void
 */
function renderInput(array $array = ["N/A"]){
    $resultat = "";
    foreach($array as $input){
        $resultat .= "<label>$input</label><br><input class='uk-input' type='text' name='".mb_strtolower($input)."'><br>";
    }
    return $resultat;
}

// affichage des radios
/**
 * renderRadio
 *
 * @param  mixed $array
 * @return void
 */
function renderRadio(array $array = ["N/A"]){
    $resultat = "<label>Sexe</label><br>";
    foreach($array as $radio){
        $resultat .= "<label><input class='uk-radio' type='radio' name='civilite'> $radio</label><br>";
    }
    return $resultat;
}

// affichage des checkbox
/**
 * renderChoices
 *
 * @param  mixed $array
 * @return void
 */
function renderChoices(array $array = ["N/A"]){
    $resultat = "<label>Formation</label><br><select class='uk-select'>";
    foreach($array as $option){
        $resultat .= "<option>$option</option>";
    }
    $resultat .= "</select><br>";
    return $resultat;
}

?>

<!-------------------------------------- EXERCICE 11 -------------------------------------->

<h2>EXERCICE 11</h2>
<?php

// date précise
echo formaterDateFr("2019-02-23");
// date courante
echo formaterDateFr("now");
echo formaterDateFr();

/**
 * formaterDateFr
 * Si la date n'est pas passée en paramètre, la fonction renvoie la date du jour par défaut
 *
 * @param  mixed $date
 * @return void
 */
function formaterDateFr(string $date = "now"){
    // setLocale modifie les informations de localisation. Ne pas oublier utf-8 pour gérer l'accentuation
    setLocale(LC_ALL, 'fr_FR.utf-8');
    // strftime formate une date / heure locale avec la configuration locale
    return strftime("%A %d %B %Y", strtotime($date))."<br>";
}

?>

<!-------------------------------------- EXERCICE 12 -------------------------------------->

<h2>EXERCICE 12</h2>
<?php

$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1","valeur2"]];

foreach($tableauValeurs as $valeur){
	var_dump($valeur) . "<br/>";
}

?>

<!-------------------------------------- EXERCICE 13 - 14 -------------------------------------->

<h2>EXERCICE 13 - 14</h2>
<?php

/**
 * Voiture
 */
class Voiture{

    // Attributs
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_etat; // démarrée ou stoppée : booléen

    private static $nbVoitures = 0; // permettra de compter le nombre de voitures instanciées

    /**
     * __construct
     *
     * @param  mixed $marque
     * @param  mixed $modele
     * @param  mixed $nbPortes
     * @return void
     */
    public function __construct(string $marque = "", string $modele = "", int $nbPortes = 0){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0; 
        $this->_etat = false; // stoppé
        self::$nbVoitures++;
        echo "$this est crée<br>";
    }

    // Getters et méthodes supplémentaires
        
    /**
     * getMarque
     *
     * @return void
     */
    public function getMarque(){
        return $this->_marque;
    }
    
    /**
     * getModele
     *
     * @return void
     */
    public function getModele(){
        return $this->_modele;
    }
    
    /**
     * getNbPortes
     *
     * @return void
     */
    public function getNbPortes(){
        return $this->_nbPortes;
    }
    
    /**
     * getEtat
     *
     * @return void
     */
    public function getEtat(){
        return ($this->_etat) ? "démarré" : "stoppé"; // etat == true
    }
    
    /**
     * getNbVoitures
     *
     * @return void
     */
    public static function getNbVoitures(){
        $affNb = (self::$nbVoitures > 1) ? "voitures au garage" : "voiture au garage";
        return "--- ".self::$nbVoitures." $affNb<br>";
    }
    
    /**
     * __toString
     *
     * @return void
     */
    public function __toString(){
        return "Le véhicule ".$this->_marque." ".$this->_modele;
    }
    
    /**
     * getInfos
     *
     * @return void
     */
    public function getInfos(){
        return "Nom et modèle : $this->_marque $this->_modele<br>
                Nombre de portes : $this->_nbPortes<br>
                $this est ".$this->getEtat()."<br>
                Sa vitesse actuelle est de : $this->_vitesseActuelle km/h<br>";
    }
    
    /**
     * demarrer
     *
     * @return void
     */
    public function demarrer(){
        if($this->_etat){ // si état = vrai
            echo "$this est déjà démarré !<br>";
        }else{
            $this->_etat = true;
            echo "$this démarre<br>";
        }
    }
    
    /**
     * stopper
     *
     * @return void
     */
    public function stopper(){
        if(!$this->_etat){ // si état = false
            echo "$this est déjà à l'arrêt !<br>";
        }else{
            $this->_etat = false;
            $this->_vitesseActuelle = 0;
            echo "$this s'arrête<br>";
        }
    }
    
    /**
     * accelerer
     *
     * @param  mixed $vitesse
     * @return void
     */
    public function accelerer(int $vitesse){
        if($this->_etat){ // si le véhicule est démarré
            $this->_vitesseActuelle += $vitesse;  //$this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse
            echo "$this accélère de $vitesse km/h<br>";
            echo "La vitesse actuelle est de $this->_vitesseActuelle km/h<br>";
        }else{
            echo "<p style='color:red'>Pour accélérer, $this doit être démarré !</p>";
        }
    }
    
    /**
     * ralentir
     *
     * @param  mixed $vitesse
     * @return void
     */
    public function ralentir(int $vitesse){
        if($this->_etat){
            $this->_vitesseActuelle = max($this->_vitesseActuelle - $vitesse, 0);
            echo "$this ralentit de $vitesse km/h<br>";
            echo "La vitesse actuelle est de $this->_vitesseActuelle km/h<br>";
            //$this->_vitesseActuelle -= $vitesse;  //$this->_vitesseActuelle = $this->_vitesseActuelle - $vitesse
        }else{
            echo "<p style='color:red'>Pour ralentir, $this doit rouler !</p>";
        }
    }
}

/**
 * VoitureElec
 * VoitureElec hérite (étend = extends) de la classe Voiture
 */
class VoitureElec extends Voiture{ 

    // Attributs
    private $_autonomie;

    // Constructeur (parent:: permet d'hériter du constructeur de la classe mère "Voiture")
    /**
     * __construct
     *
     * @param  mixed $marque
     * @param  mixed $modele
     * @param  mixed $nbPortes
     * @param  mixed $autonomie
     * @return void
     */
    public function __construct(string $marque = "", string $modele = "", int $nbPortes = 0, int $autonomie = 0){
        parent::__construct($marque, $modele, $nbPortes); 
        $this->_autonomie = $autonomie;
    }

    // Getters    
    /**
     * getAutonomie
     *
     * @return void
     */
    public function getAutonomie(){
        return $this->_autonomie;
    }

    /**
     * Set the value of _autonomie
     *
     * @return  self
     */ 
    public function setAutonomie($_autonomie){
        $this->_autonomie = $_autonomie;
        return $this;
    }
    
    /**
     * getInfos
     *
     * @return void
     */
    public function getInfos(){
        return parent::getInfos(). " Autonomie : $this->_autonomie km<br>";
    }
}

// ***************** TESTS DES CLASSES *****************

echo Voiture::getNbVoitures();

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);
$v3 = new Voiture("Mercedes", "AMD", 4);
$ve1 = new VoitureElec("BMW", "i3", 5, 200);

$ve1->setAutonomie(300);

echo Voiture::getNbVoitures();

$v1->demarrer();
$v1->accelerer(50);
$v1->stopper();
$v1->ralentir(20);
echo $v1->getInfos();

$v2->accelerer(50); // ERREUR ! (véhicule non démarré)

$ve1->demarrer();
$ve1->accelerer(20);
echo $ve1->getInfos();

?>

<!-------------------------------------- EXERCICE 15 -------------------------------------->

<h2>EXERCICE 15</h2>
<?php

/**
 * filter_var($variable, $filter) : Filtre une variable avec un filtre spécifique
 *      Filtres de validation : FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_FLOAT, FILTER_VALIDATE_IP, FILTER_VALIDATE_URL, ...
 *      Filtres de nettoyage : FILTER_SANITIZE_EMAIL, FILTER_SANITIZE_STRING, ...
 */

// Adresse email et IP à tester
$email = "elan@elan-formation";
$ip = "192.168.1.255";

echo verifierMail($email);
echo verifierIp($ip);
echo verifierMailV2($email);

// Verifier qu'une adresse mail est valide
/**
 * verifierMail
 *
 * @param  mixed $email
 * @return void
 */
function verifierMail(string $email = "contact@exemple.com"){
    $resultat = "L'adresse mail <strong>$email</strong> n'est pas valide<br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $resultat = "L'adresse mail <strong>$email</strong> est valide<br>";
    }
    return $resultat;

    // return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? "adresse valide" : "adresse non valide";
}

// version optimisée
/**
 * verifierMailV2
 *
 * @param  mixed $email
 * @return void
 */
function verifierMailV2(string $email = "contact@exemple.com") {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? "L'adresse mail <strong>$email</strong> est valide" : "L'adresse mail <strong>$email</strong> est non valide";
}

// Vérifier qu'une adresse IP est valide
/**
 * verifierIp
 *
 * @param  mixed $ip
 * @return void
 */
function verifierIp(string $ip = "127.0.0.1"){
    $resultat = "L'adresse IP <strong>$ip</strong> n'est pas valide<br>";
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $resultat = "L'adresse IP <strong>$ip</strong> est valide<br>";
    }
    return $resultat;
}

?>

</div>
</body>
</html>








