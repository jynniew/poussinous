<?php

/*
        1. Créer une classe Poussin
        2. Lui ajouter les attributs
            - Nom
            - Poids
            - Image
        3. Lui ajouter un constructeur permettant de lui attribuer son nom et son image
        4. Dans le constructeur, le poids sera toujours initialisé à 50g
        5. Ajouter une méthode "Courir" affichant "Le poussin cour et perd 5g". Retirer 5g au poids du poussin
        6. Ajouter une méthode "Manger" affichant "Le poussin mange et prend 7g". Ajouter 7g au poids du poussin
        7. Ajouter une méthode "afficher" réalisant un var dump du poussin
    */

class Poussins {
    public $name ;
    public $poids = 50 ;
    public $img ;

    function __construct($name, $img) {
        $this->name = $name ;
        $this->img = $img;
    }
    function courir() {
        $new_poids = $this->poids - 5;
        echo "<p>Le poussin cour et perd 5g... Il ne fait plus que $new_poids g </p>";
    }
    function manger() {
        $new_poids2 = $this->poids + 7;
        echo "<p>Le poussin mange et prend 7g ! Il fait maintenant $new_poids2 g </p>";
    }
    function show() {
        echo var_dump($this);
        echo "Voici ".$this->name." ! </br> Il pèse ".$this->poids."g et ressemble à ça: </br><img src='".$this->img."' alt='image de poussin trop mignon'>";
    }
}

$Pioupiou = new Poussins("Pioupiou", "https://img.freepik.com/photos-premium/poussin-mignon-ia-generative_195703-374.jpg");

$Pioupiou->show();



?>
