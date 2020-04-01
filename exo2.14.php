<?php

class Voiture {
    protected $_marque;
    protected $_modele;
  

    public function __construct($marque, $modele) {
        $this->_marque = $marque;
        $this->_modele = $modele;
     
    }

    public function getMarque() { return $this->_marque; }
    public function getMmodele() { return $this->_modele; }
    public function getInfos() {
        return "Infos véhicule : $this->_marque $this->_modele<br>";
    }
    public function setMarque($marque) { $this->_marque = $marque; }
    public function setModele($modele) { $this->_modele = $modele; }


}
final class VoitureElec extends Voiture{
    private $_autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }
    public function getInfos() {
        return "Infos véhicule : $this->_marque $this->_modele $this->_autonomie<br>";
    }
}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);
echo $v1->getInfos();
echo $ve1->getInfos();