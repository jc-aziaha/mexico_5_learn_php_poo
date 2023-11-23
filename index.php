<?php

// --------------------------------- Les traits -----------------------------------

// --------------------------------- Les interfaces -----------------------------------

    trait OtherActions
    {
        public function courir()
        {
            echo "Je peux courir.";
        }
    }

    interface AnimalInterface
    {
        public function manger(): string;
        public function boire(): string;
        public function marcher(): string;
        public function crier(): string;
    }

    abstract class Animal implements AnimalInterface
    {
        protected string $race;
        protected string $sexe;
        protected string $cri;

    }

    class Chien extends Animal
    {
        use OtherActions;
        
        public function __construct(string $race, string $sexe, string $cri = "aboyer")
        {
            $this->race = $race;
            $this->sexe = $sexe;
            $this->cri  = $cri;
        }

        public function manger(): string
        {
            return "J'aime la viande.";
        }

        public function boire(): string
        {
            return "J'aime de l'eau.";
        }

        public function marcher(): string
        {
            return "J'aime marcher.";
        }

        public function crier(): string
        {
            return "J'aime " . $this->cri;
        }
    }

    class Chat
    {

    }

    $chien0 = new Chien("Berger Allemand", "masculin");
    echo $chien0->crier();
    echo "<br/>";
    $chien0->courir();






    // interface AuthInterface 
    // {
    //     public function login(): string;
    // }

    // interface PlayerInterface
    // {
    //     public function toPlay(): string;
    // }

    // class Player implements AuthInterface, PlayerInterface
    // {
    //     private string $pseudo;
    //     private int $life;
    //     private float $power;

    //     public function toPlay(): string
    //     {
    //         return "Je joue.";
    //     }

    //     public function login(): string
    //     {
    //         return "Je suis connecté.";
    //     }

    //     public function toChat(): string
    //     {
    //         return "Rendez-vous dans le chat.";
    //     }
    // }



// --------------------------------- Les interfaces -----------------------------------

    // interface Actions
    // {
    //     public function discuter(): string;
    // }

    // abstract class Robot implements Actions
    // {
    //     private string $marque;
        
    // }

    // class Alexa extends Robot
    // {
    //     public function discuter(): string
    //     {
    //         return "Hello";
    //     }
    // }



// --------------------------------- Les classes abstraites-----------------------------------

    // abstract class Vehicule
    // {
    //     private string $marque;
    //     private string $couleur;
    //     private static $nbreVehicules = 0;

    //     abstract public function demarrer();

    //     abstract public function rouler();

    //     public function claxonner()
    //     {
    //         echo "Le véhicule claxonne.";
    //     }
    // }

    // class Voiture extends Vehicule
    // {
    //     private string $nitro;
    //     private string $marque;

    //     public function demarrer()
    //     {
    //         echo "La voiture démarre.";
    //     }

    //     public function rouler()
    //     {
    //         echo "La voiture roule.";
    //     }

    // }

    // class Moto extends Vehicule
    // {
    //     public function demarrer()
    //     {
    //         echo "La moto démarre.";
    //     }

    //     public function rouler()
    //     {
    //         echo "La moto roule.";
    //     }
    // }

    // class Camion extends Vehicule
    // {
    //     public function demarrer()
    //     {

    //     }

    //     public function rouler()
    //     {
            
    //     }
    // }

    // new Moto();


    // class Robot
    // {
    //     public function parler(): void
    //     {
    //         echo "Hello, je suis un robot.";
    //     }
    // }

    // class Alexa extends Robot
    // {
    //     public function parler(): void
    //     {
    //         parent::parler();
    //         echo "Je m'appelle Alexa.";
    //     }
    // }

    // $alexa0 = new Alexa();
    // $alexa0->parler();



// ---------------------------------L'héritage-----------------------------------


    // class Vehicule
    // {
    //     private string $couleur;

    //     public function rouler(): void
    //     {
    //         echo "Rouler";
    //     }
    // }

    // class Voiture extends Vehicule
    // {
        
    // }

    // class Moto extends Vehicule
    // {

    // }

    // class Camion extends Vehicule
    // {

    // }

    // $voiture0 = new Voiture();
    // $voiture0->rouler();



// ---------------------------------Le constructeur-----------------------------------


    // class User
    // {
    //     private string $firstName;
    //     private string $lastName;
    //     private string $email;
    //     private string $password;
    //     private static int $nbreInstance = 0;

    //     public function __construct()
    //     {
    //         self::$nbreInstance++;
    //     }

    //     public static function getNbreInstance(): int
    //     {
    //         return self::$nbreInstance;
    //     }

    //     public function getFirstName(): string
    //     {
    //         return $this->firstName;
    //     }

    //     public function setFirstName(string $firstName): void
    //     {
    //         $this->firstName = $firstName;
    //     }
        
    //     public function getLastName(): string
    //     {
    //         return $this->lastName;
    //     }

    //     public function setLastName(string $lastName): void
    //     {
    //         $this->lastName = $lastName;
    //     }

    //     public function getEmail(): string
    //     {
    //         return $this->email;
    //     }

    //     public function setEmail(string $email): void
    //     {
    //         $this->email = $email;
    //     }

    //     public function getPassword(): string
    //     {
    //         return $this->password;
    //     }

    //     public function setPassword(string $password): void
    //     {
    //         $this->password = $password;
    //     }

    //     public function toPresentItSelf(): string
    //     {
    //         return "Hello, je m'appelle " . $this->firstName . " " . $this->lastName;
    //     }

    // }


    // $user0 = new User();
    // $user1 = new User();
    // $user2 = new User();
    
    // echo User::getNbreInstance();

    // $user0->setFirstName("Homer");
    // $user0->setLastName("Simpson");
    // $user0->setEmail("simpson@gmail.com");
    // $passwordHashed = password_hash("1234", PASSWORD_BCRYPT);
    // $user0->setPassword($passwordHashed);
    // echo $user0->toPresentItSelf();





    // class Tasse
    // {
    //     private string $couleur;
    //     private string $signature;

    //     public function __construct(string $couleur, string $signature)
    //     {
    //         $this->couleur = $couleur;
    //         $this->signature = $signature;
    //     }

    //     public function boire(string $liquide): string
    //     {
    //         return "Cette tasse de couleur " . $this->couleur . " et de signature <em>" . $this->signature . "</em> me permet de boire $liquide.";
    //     }

    //     public function getCouleur(): string
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur): void
    //     {
    //         $this->couleur = $couleur;
    //     }

    //     public function getSignature(): string
    //     {
    //         return $this->signature;
    //     }

    //     public function setSignature(string $signature): void
    //     {
    //         $this->signature = $signature;
    //     }
    // }

    // $tasse0 = new Tasse("bleue marine", "Hello World!");
    // $tasse1 = new Tasse("jaune citron", "La vie est belle!");

    // echo $tasse0->boire("du thé");
    // echo "<br/>";
    // echo $tasse1->boire("du café");
    // echo "<br/>";
    
    
    // $tasse0->setSignature("dwwm");
    
    // echo $tasse0->boire("du thé");
    // echo "<br/>";
    // echo $tasse1->boire("du café");
    // echo "<br/>";




    // class Vehicule
    // {
    //     private string $marque;
    //     private string $couleur;
    //     private bool $nitro;

    //     public function __construct(string $marque, string $couleur, bool $nitro)
    //     {
    //         $this->marque  = $marque;
    //         $this->couleur = $couleur;
    //         $this->nitro   = $nitro;
    //     }

    //     public function getMarque(): string
    //     {
    //         return $this->marque;
    //     }

    //     public function setMarque(string $marque): void
    //     {
    //         $this->marque = $marque;
    //     }

    //     public function getCouleur(): string 
    //     {
    //         return $this->couleur;
    //     }

    //     public function setCouleur(string $couleur): void
    //     {
    //         $this->couleur = $couleur;
    //     }

    //     public function getNitro(): bool 
    //     {
    //         return $this->nitro;
    //     }

    //     public function setNitro(bool $nitro): void
    //     {
    //         $this->nitro = $nitro;
    //     }
    // }

    // $vehicule0 = new Vehicule("Renault", "Noire", true);
    // $vehicule1 = new Vehicule("Alpha Roméo", "Grise", false);

    // echo $vehicule0->getMarque();
    // echo "<br/>";
    // echo $vehicule1->getMarque();
    // echo "<br/>";








// public, protected, private

    // class Vehicule
    // {
    //     private string $marque = "Fiat";

    //     // getter accesseur
    //     public function getMarque(): string
    //     {
    //         return $this->marque;
    //     }

    //     // setter mutateur
    //     public function setMarque(string $newMarque): void
    //     {
    //         $this->marque = $newMarque;
    //     }

    //     public function demarrer(): string
    //     {
    //         return "Le véhicule démarre.";
    //     }

    //     public function rouler(): string
    //     {
    //         return "Le véhicule roule.";
    //     }

    //     public function freiner(): string
    //     {
    //         return "Le véhicule roule.";
    //     }
    // }

    // $vehiculeDeCecilia  = new Vehicule;
    // $vehiculeDeRabiatou = new Vehicule;
    // $vehiculeDeNarimene = new Vehicule;

    // echo "------------------------Avant--------------------<br/>";

    // echo "Pour Cécilia: " . $vehiculeDeCecilia->getMarque();
    // echo "<br/>";
    // echo "Pour Rabiatou: " . $vehiculeDeRabiatou->getMarque();
    // echo "<br/>";
    // echo "Pour Narimene: " . $vehiculeDeNarimene->getMarque();
    // echo "<br/>";


    // // Changement de marque de vehicule1
    // $vehiculeDeCecilia->setMarque("Audi");
    // $vehiculeDeRabiatou->setMarque("Tesla");
    // $vehiculeDeNarimene->setMarque("Peugeot");

    // echo "------------------------Après--------------------<br/>";

    // echo "Pour Cécilia: " . $vehiculeDeCecilia->getMarque();
    // echo "<br/>";
    // echo "Pour Rabiatou: " . $vehiculeDeRabiatou->getMarque();
    // echo "<br/>";
    // echo "Pour Narimene: " . $vehiculeDeNarimene->getMarque();
    // echo "<br/>";

    // $vehiculeDeNarimene->setMarque("Audi");

    // echo "------------------------Après Après--------------------<br/>";

    // echo "Pour Cécilia: " . $vehiculeDeCecilia->getMarque(); 
    // echo "<br/>";
    // echo "Pour Rabiatou: " . $vehiculeDeRabiatou->getMarque();
    // echo "<br/>";
    // echo "Pour Narimene: " . $vehiculeDeNarimene->getMarque();
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


