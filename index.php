<?php

// public, protected, private


    class Vehicule
    {
        private string $marque = "Fiat";

        // getter accesseur
        public function getMarque(): string
        {
            return $this->marque;
        }

        // setter mutateur
        public function setMarque(string $newMarque): void
        {
            $this->marque = $newMarque;
        }

        public function demarrer(): string
        {
            return "Le véhicule démarre.";
        }

        public function rouler(): string
        {
            return "Le véhicule roule.";
        }

        public function freiner(): string
        {
            return "Le véhicule roule.";
        }
    }

    $vehiculeDeCecilia  = new Vehicule;
    $vehiculeDeRabiatou = new Vehicule;
    $vehiculeDeNarimene = new Vehicule;

    echo "------------------------Avant--------------------<br/>";

    echo "Pour Cécilia: " . $vehiculeDeCecilia->getMarque();
    echo "<br/>";
    echo "Pour Rabiatou: " . $vehiculeDeRabiatou->getMarque();
    echo "<br/>";
    echo "Pour Narimene: " . $vehiculeDeNarimene->getMarque();
    echo "<br/>";


    // Changement de marque de vehicule1
    $vehiculeDeCecilia->setMarque("Audi");
    $vehiculeDeRabiatou->setMarque("Tesla");
    $vehiculeDeNarimene->setMarque("Peugeot");

    echo "------------------------Après--------------------<br/>";

    echo "Pour Cécilia: " . $vehiculeDeCecilia->getMarque();
    echo "<br/>";
    echo "Pour Rabiatou: " . $vehiculeDeRabiatou->getMarque();
    echo "<br/>";
    echo "Pour Narimene: " . $vehiculeDeNarimene->getMarque();
    echo "<br/>";

    // Cecilia fiat
    // Rabiatou fiat
    // Narimene fiat


    // Cecilia Audi
    // Rabiatou Tesla
    // Narimene Peugeot



    // class Tv
    // {
    //     private float $taille = 55;
    //     private string $marque = "LG";

    //     public function getTaille(): float
    //     {
    //         return $this->taille;
    //     }

    //     public function regarderMatchs() : void
    //     {
    //         echo "Je regarde Argentine - Brésil";
    //     }

    //     public function seConnecterYoutube() : void
    //     {
    //         echo "Extraits du match";
    //     }
    // }
    

    // $tv1 = new Tv;
    // $tv1->taille;

    // echo "<br/>";

    // $tv2 = new Tv;
    // $tv2->seConnecterYoutube();



    // class Iphone
    // {
    //     public string $couleur = "rouge";
    //     public int $model = 15;
    //     public float $price = 1500.99;

    //     public function appeler(): string
    //     {
    //         return "L'iphone appelle.";
    //     }

    //     public function lireMessage(): string
    //     {
    //         return "L'iphone lit les messages.";
    //     }

    //     public function naviguer(): string
    //     {
    //         return "L'iphone navigue.";
    //     }
    // }

    // $iphone0 = new Iphone;
    // $iphone1 = new Iphone;
    // $iphone2 = new Iphone;
    // $iphone3 = new Iphone;
    // $iphone4 = new Iphone;

    // class Robot
    // {

    // }

    // $robot0 = new Robot;
    // $robot1 = new Robot;
    // $robot2 = new Robot;
    // $robot3 = new Robot;


