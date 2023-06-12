<?php
Class Personne{
	private string $_nom;
	private string $_prenom;
	private DateTime $_dateNaissance;

	public function __construct(string $nom, string $prenom, string $dateNaissance){
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_dateNaissance = new DateTime($dateNaissance);
	}

	public function getNom(){
		return $this->_nom;
	}
	public function getPrenom(){
		return $this->_prenom;
	}
	public function getDateNaissance(){
		return $this->_dateNaissance;
	}

	public function getAge(){
		$today = new DateTime();
		$birthday = $this->getDateNaissance();
		$dif = date_diff($birthday, $today);
		return $dif->format('%y');
	}

	public function __toString(){
		return $this->getPrenom().' '.$this->getNom()." a ".$this->getAge()." ans.<br/>";
	}
}


?>