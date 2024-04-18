<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Voiture {
    public $couleur;
    private $marque;
    private $modele;
    private $km;

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setKm($km) {
        $this->km = $km;
    }

    public function getKm() {
        return $this->km;
    }
}

$voiture = new Voiture();

$voiture->couleur = 'rouge';
$voiture->setMarque('Toyota');
$voiture->setModele('Corolla');
$voiture->setKm(15000);

echo "Couleur: " . $voiture->couleur . "\n";
echo "Marque: " . $voiture->getMarque() . "\n";
echo "Modèle: " . $voiture->getModele() . "\n";
echo "Kilométrage: " . $voiture->getKm() . "\n";

?>
</body>
</html>