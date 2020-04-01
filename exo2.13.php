<?php

class Voiture {
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_moteurAllume;
    private static $_nbVehicules = 0;

    public function __construct($marque, $modele, $nbPortes) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_moteurAllume = false;
        self::$_nbVehicules++;
        $this->_numeroVehicule = self::$_nbVehicules;
    }

    public function getMarque() { return $this->_marque; }
    public function getMmodele() { return $this->_modele; }
    public function getNbPortes() { return $this->_nbPortes; }
    public function getvitesseActuelle() { return "La vitesse actuelle du véhicule $this->_marque $this->_modele est de $this->_vitesseActuelle km/h"; }

    public function setMarque($marque) { $this->_marque = $marque; }
    public function setModele($modele) { $this->_modele = $modele; }
    public function setNbPortes($nbPortes) { $this->_nbPortes = $nbPortes; }
    public function setVitesseActuelle($vitesseActuelle) { $this->_vitesseActuelle = $vitesseActuelle; }

    public function demarrer() {
        if (!$this->_moteurAllume) {
            $this->_moteurAllume = true;
            return "Le véhicule $this->_marque $this->_modele démarre<br>";
        } else {
            return "Le moteur est déjà allumé<br>";
        }
    }
    public function accelerer($acceleration) {
        if ($this->_moteurAllume == true) {
            $this->_vitesseActuelle += $acceleration;
            return "Le véhicule $this->_marque $this->_modele accélère de $acceleration km/h<br>";
        } else {
            return "Le véhicule $this->_marque $this->_modele doit d'abord être allumé avant de pouvoir accélerer !<br>";
        }
    }
    public function stopper() {
        if ($this->_moteurAllume) {
            $this->_moteurAllume = false;
            $this->_vitesseActuelle = 0;
            return "Le véhicule $this->_marque $this->_modele s'arrête<br>";
        }
    }
    public function getInfos() {
        $res = "<br>Infos véhicule $this->_numeroVehicule<br>";
        $res.= "***************<br><br>";
        $res.= "Nom et modèle du véhicule : $this->_marque $this->_modele <br> 
                Nombre de portes : $this->_nbPortes <br>"; 
        $res.= "Le véhicule $this->_marque est ";
        $res.= ($this->_moteurAllume == false) ? "éteint<br>" : "allumé<br>";
        $res.= "Sa vitesse actuelle est de $this->_vitesseActuelle km/h<br><br>";

        return $res;
    }

}

$v1 = new Voiture("Peugeot", "408", "5");
$v2 = new Voiture("Citroën", "C4", "3");

echo $v1->getInfos();
echo $v2->getInfos();
echo $v1->accelerer(20);
echo $v1->demarrer();
echo $v1->accelerer(25);
echo $v1->getvitesseActuelle();