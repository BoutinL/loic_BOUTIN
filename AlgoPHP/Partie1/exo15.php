<h1>Exercice 15</h1>
<p>
Créer une classe Personne (nom, prénom et date de naissance).<br/>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br/>
$p1 = new Personne("DUPONT","Michel", "1980-02-19");<br/>
$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");<br/>
Affichage:<br/>
	Michel DUPONT a ... ans<br/>
	Alice DUCHEMIN a ... ans
</p>
<h2>Résultat</h2>
<?php
Class Personne{
	private $_nom;
	private $_prenom;
	private $_age;

	public function __construct($nom,$prenom,$age){
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_age = $age;
	}

	public function getNom(){
		return $this->_nom;
	}
	public function getPrenom(){
		return $this->_prenom;
	}
	public function getAge(){
		return $this->_age;
	}
}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

$today = new DateTime();
$birthday1 = new DateTime($p1->getAge());
$birthday2 = new DateTime($p2->getAge());
$dif1 = date_diff($birthday1, $today);
$dif2 = date_diff($birthday2, $today);
$y1 = $dif1->format('%y');
$y2 = $dif2->format('%y');

echo $p1->getPrenom().' '.$p1->getNom()." a ".$y1." ans<br/>";
echo $p2->getPrenom().' '.$p2->getNom()." a ".$y2." ans";
?>